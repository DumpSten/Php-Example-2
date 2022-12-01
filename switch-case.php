<?php

    $a = 7;

    /*
    if ($a == 5){

    } elseif ($a == 6){

    } else {

    }
    */

    Switch ($a){

        case 5:
            echo 'a is equal to 5';
        break;

        case 6:
            echo 'a is equal to 6';
        break;

        case $a % 4 == 3:
            echo 'Dividing 7 by 4, the remainder is 3';
        break;

        default:
            echo 'not equal to anything';
        break;

    }

?>