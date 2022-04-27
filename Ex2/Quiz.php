<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];

$point = 0;
// echo $q1;

    if($q1 == "Pacific Ocean") { 
        $point++;
    }
    if($q2 == "A flow of electrons") { 
        $point++;
    }
    if($q3 == "FBI") {
        $point++;
    }
    if($q4 == "Agoraphobia") {
        $point++;
    }
    if($q5 == "Wind of Change") {
        $point++;
    }
    $per = $point	/ 5 *100;

    echo "<h3>Question 1 : In 1768, Captain James Cook set out to explore which ocean? </h3>";
    echo "You answered: ". $q1. "<br>";
    echo "Correct answer: Pacific Ocean <br>";

    echo "<h3>Question 2 : What is actually electricity?</h3>";
    echo "You answered: ". $q2. "<br>";
    echo "Correct answer: A flow of electrons <br>";

    echo "<h3>Question 3 : Which of the following is not an international organisation?</h3>";
    echo "You answered: ". $q3. "<br>";
    echo "Correct answer: FBI <br>";

    echo "<h3>Question 4 : Which of the following disorders is the fear of being alone?</h3>";
    echo "You answered: ". $q4. "<br>";
    echo "Correct answer: Agoraphobia <br>";

    echo "<h3>Question 5 : Which of the following is a song by the German heavy metal band “Scorpions”?</h3>";
    echo "You answered: ". $q5. "<br>";
    echo "Correct answer: Wind of Change <br><br><br>";

    echo "The total you answered correctly: ".$point."<br>";
    echo "The total you answered correctly: ".$per."<br>";
?>
