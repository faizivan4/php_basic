<?php
//Recursive Function 

//Factorial Looping
function factorialLoop (int $value):int 
{
    $total = 1;
    for($i = 1; $i <= $value; $i++ ) {
        $total = $total * $i;
    }

    return $total;
}

var_dump(factorialLoop(5));

//Factorial Recursisve
function factorialRecursive (int $value) : int
{
    if ($value==1){
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(4));

/*
Recursive Function : 
- Adalah sebuah Function memanggil Function dirinya sendiri
- 

PROBLEM DENGAN RECURSIVE FUNCTION :
    - Jika terlalu dalam penggunaan nya, dapat menyebabkan error, hank, karena memory mengalami over flow
*/