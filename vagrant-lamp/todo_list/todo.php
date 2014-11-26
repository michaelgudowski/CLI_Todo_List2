<?php

// Create array to hold list of todo items
$items = array();

// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) 
    {
    // Increment key for display    
        $key++;

        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }    

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = trim(fgets(STDIN));
    $input = strtolower($input);

    
    // Check for actionable input
    if ($input == 'n') 
    {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } 
    elseif ($input == 'r') 
    {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        $key--;
        // Remove from array
        unset($items[$key]);
        // Reindex numberical array
        $items = array_values($items);
    }
// Exit when input is (Q)uit else if ($input == 'Q' || $input == "q");    
}while($input != 'q');
        // Say Goodbye!
        echo "Goodbye!\n";

        // Exit with 0 errors
        exit(0);