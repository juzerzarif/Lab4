<?php

 $answer1 = $_POST["question1"];
 $answer2 = $_POST["question2"];
 $answer3 = $_POST["question3"];
 $answer4 = $_POST["question4"];
 $answer5 = $_POST["question5"];
 $score = 0;

if($answer1=="Option 1"){$score = $score+20;}
if($answer2=="Option 2"){$score = $score+20;}
if($answer3=="Option 3"){$score = $score+20;}
if($answer4=="Option 2"){$score = $score+20;}
if($answer5=="Option 1"){$score = $score+20;}

echo "<title>Answers</title>";
echo "<br><br>Question 1: Question 1";
echo "<br>You answered: ".$answer1;
echo "<br>Correct answer: Option 1";

echo "<br><br>Question 2: Question 2";
echo "<br>You answered: ".$answer2;
echo "<br>Correct answer: Option 2";

echo "<br><br>Question 3: Question 3";
echo "<br>You answered: ".$answer3;
echo "<br>Correct answer: Option 3";

echo "<br><br>Question 4: Question 4";
echo "<br>You answered: ".$answer4;
echo "<br>Correct answer: Option 2";

echo "<br><br>Question 5: Question 5";
echo "<br>You answered: ".$answer5;
echo "<br>Correct answer: Option 1";

echo "<br><br>Your Score: ".$score."%";
?>
