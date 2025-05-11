<?php

// Function to show the menu
function showMenu() {
    echo "\n===== Contact Management App =====\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
}

// Declare variables for contacts
$name1 = $phone1 = $name2 = $phone2 = "";

// Main loop
while (true) {
    showMenu();
    $choice = trim(fgets(STDIN));

    if ($choice == 1) {
        // Add Contact
        if ($name1 == "" || $name2 == "") {
            echo "Enter name: ";
            $name = trim(fgets(STDIN));
            echo "Enter phone number: ";
            $phone = trim(fgets(STDIN));

            if ($name1 == "") {
                $name1 = $name;
                $phone1 = $phone;
                echo "Contact 1 added.\n";
            } else {
                $name2 = $name;
                $phone2 = $phone;
                echo "Contact 2 added.\n";
            }
        } else {
            echo "Warning: Cannot add more contacts. Maximum limit reached.\n";
        }

    } elseif ($choice == 2) {
        // View Contacts
        if ($name1 != "" || $name2 != "") {
            echo "Contacts List:\n";
            if ($name1 != "") {
                echo "1. Name: $name1, Phone: $phone1\n";
            }
            if ($name2 != "") {
                echo "2. Name: $name2, Phone: $phone2\n";
            }
        } else {
            echo "No contacts available.\n";
        }

    } elseif ($choice == 3) {
        // Exit
        echo "Exiting the Contact Management App.\n";
        break;
    } else {
        echo "Invalid choice. Please try again.\n";
    }
}
?>
