<?php
    /*
        logical operators 
        && and
        || or
        ! if not
    */

    $a = 5;
    $b = 5;

    //echo ($a == $b)  &&  ($a + $b == 10);
    //echo ($a == $b)  &&  ($a + $b == 9);
    //echo ($a == $b)  &&  ($a + $b != 9);
    echo ($a == $b)  ||  ($a + $b == 14) || ($a - $b == 0);
    echo !($a != $b);

?>