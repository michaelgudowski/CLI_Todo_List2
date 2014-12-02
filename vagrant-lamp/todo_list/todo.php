<?php

 // Create array to hold list of todo items
 $items = array();

 // List array items formatted for CLI
 function listItems($list)
 {
    $string = "";
    foreach ($list as $key => $value) {
        $key++;
        $string .= "[{$key}] {$value}\n";
    }    

    return $string;
}

function getInput ($upper = false)
{

    $input = trim(fgets(STDIN));

    if ($upper == true) {
        $input = strtoupper($input);
    }
        
    return $input;
}
     // Return string of list items separated by newlines.
     // Should be listed [KEY] Value like this:
     // [1] TODO item 1
     // [2] TODO item 2 - blah
     // DO NOT USE ECHO, USE RETURN


 // Get STDIN, strip whitespace and newlines,
 // and convert to uppercase if $upper is true
 


 // The loop!
 do {
     // Echo the list produced by the function
     echo listItems($items);

     // Show the menu options
     echo '(N)ew item, (R)emove item, (Q)uit : ';

    $input = getInput(true);   

     // Get the input from user
    // getInput($input)
    // {
    
    // }
    // getInput($input);
     // Use trim() to remove whitespace and newlines
     
     // Check for actionable input
     if ($input == 'N') {
         // Ask for entry
         echo 'Enter item: ';
         // Add entry to list array
         $items[] = getInput();
     } elseif ($input == 'R') {
         // Remove which item?
         echo 'Enter item number to remove: ';
         // Get array key
         $key = getInput();
         // Remove from array
         $key--;
         unset($items[$key]);
     }
 // Exit when input is (Q)uit
 } while ($input != 'Q');

 // Say Goodbye!
 echo "Goodbye!\n";

 // Exit with 0 errors
 exit(0);