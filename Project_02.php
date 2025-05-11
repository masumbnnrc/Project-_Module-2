<?php

// Function to show the question
function showQuestion($question, $options, $correctAnswer) {
    echo "\n$question\n";
    foreach ($options as $option) {
        echo "$option\n";
    }

    echo "Enter your answer (a/b/c): ";
    $answer = trim(fgets(STDIN));

    if ($answer == $correctAnswer) {
        echo "Correct!\n";
        return 1;
    } else {
        echo "Incorrect. The correct answer was $correctAnswer.\n";
        return 0;
    }
}

// Questions and answers
$questions = [
    ["What is the capital of France?", ["a) Bangladesh", "b) India", "c) Singapoor"], "a"],
    ["Which planet is known as the Red Planet?", ["a) Earth", "b) Mars", "c) Venus"], "b"],
    ["What is 2 + 2?", ["a) 3", "b) 4", "c) 5"], "b"]
];

$score = 0;

// Main loop
foreach ($questions as $q) {
    $score += showQuestion($q[0], $q[1], $q[2]);
}

echo "\nYou scored $score out of " . count($questions) . ".\n";
?>
