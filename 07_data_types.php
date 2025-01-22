<?php 
    
    //php data-types

    /*
        1. Strings
        2. Integer
        3. Float
        4. Boolean
        5. Object
        6. Array
        7. NULL
    */

    //String - Sequence of characters
    $name = "Aditya";
    $profile = "Developer";

    echo "His name is $name and his is a $profile. <br><br>";

    //Integer - non decimal number
    $age = 19;
    $income = 100;
    
    echo "His age is $age and he earns $income. <br><br>";

    //Float - Decimal point number
    $age = 19.6;
    $income = 100.59;
    $debts = -1.32;

    echo "Now, he is $age and he earns $income and he has $debts debts.<br><br>";

    //Boolean - can be either true of false
    $x = true;
    $is_friend = false;

        //printing with the hlp of echo
        echo $x;
        echo "<br><br>";
        echo $is_friend;

        //using var_dump function -> it takes a variable and prints the value inside a variable and type of that variable
        echo var_dump($x);
        echo "<br><br>";
        echo var_dump($is_friend);

    // Object - Instances of classes
        // Developer is a class ---> Aditya can be one object

    // Array - Used to store multiple values in a single variable
    $names = array("Adam", "Bob", "Catylen", "Devin", "Eve");
    echo "<br><br>";
    echo var_dump($names);
    echo "<br><br>";

    echo $names[0];
    echo "<br><br>";
    echo $names[1];
    echo "<br><br>";
    echo $names[2];
    echo "<br><br>";
    echo $names[3];
    echo "<br><br>";
    echo $names[4];
    echo "<br><br>";
    //echo $names[5]; // will throw an error as the size of array is 4

    // NULL 
    $name = NULL;
    echo $name;
    echo "<br><br>";
    echo var_dump($name);
?>