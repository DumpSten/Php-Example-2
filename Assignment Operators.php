<?php
    /*
        Assignment Operators
            = value assignment 
            += by increasing value assignment 
            -= by reducing value assignment 
            *= slamming value assignment 
            /= by diving value assignment 
            %= mod value assignment 
            . combining assignment 
            .= by combining value assignment 
    */

    $a = 5;
    //$a += 5; //$a = $a + 5 ;
    //$a -= 5; //$a = $a - 5 ;
    //$a *= 5; //$a = $a * 5 ;
    //$a /= 5; //$a = $a / 5 ;
    //$a %= 5; //$a = $a % 5 ;
   
    $name = "Alper";
    $surname = "Çatal";
    //echo "Alper" . $surname . 24 . $a . "Çatal". $name;
    $name .= " " . $surname; // $name = $name .  $surname;
    echo $name ;
?>