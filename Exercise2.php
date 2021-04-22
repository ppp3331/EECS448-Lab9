<?php
$x = 0;
echo "Question 1: What is 8x2?<br>";
echo "You answered: " . $_POST["a1"] . "<br>";
echo "Correct answer: 16<br></br>";
if ($_POST["a1"] == "16") $x++;

echo "Question 2: What is 2+5?<br>";
echo "You answered: " . $_POST["a2"] . "<br>";
echo "Correct answer: 7<br></br>";
if ($_POST["a2"] == "7") $x++;

echo "Question 3: What is 7-3?<br>";
echo "You answered: " . $_POST["a3"]. "<br>";
echo "Correct answer: 4<br></br>";
if ($_POST["a3"] == "4") $x++;

echo "Question 4: What is 3x5?<br>";
echo "You answered: " . $_POST["a4"]. "<br>";
echo "Correct answer: 15<br></br>";
if ($_POST["a4"] == "15") $x++;

echo "Question 5: What is 10-5?<br>";
echo "You answered: " . $_POST["a5"] . "<br>";
echo "Correct answer:5<br></br>";
if ($_POST["a5"] == "5") $x++;

echo "Number of questions correct:".$x."/5<br>";
echo "Score:" .($x*20)."%<br>";
?>