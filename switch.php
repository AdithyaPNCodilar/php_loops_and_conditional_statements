<?php
//The switch statement is used to perform different actions based on different conditions.

$letter = 'm';
    switch($letter){
    case 'a':
        echo "Given character is vowel";
        break;
    case 'e':
        echo "Given character is vowel";
        break;
    case 'i':
        echo "Given character is vowel";
        break;
    case 'o':
        echo "Given character is vowel";
        break;
    case 'u':
        echo "Given character is vowel";
        break;
    case 'A':
        echo "Given character is vowel";
        break;
    case 'E':
        echo "Given character is vowel";
        break;
    case 'I':
        echo "Given character is vowel";
        break;
    case 'O':
        echo "Given character is vowel";
        break;
    case 'U':
        echo "Given character is vowel";
        break;
    default:   
        echo "Given character is a consonant";  
        break;  //Use break to prevent the code from running into the next case automatically. 
                //The default statement is used if no match is found.
    }
?>