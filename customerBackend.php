<?php
echo "<style type=\"text/css\">";
include 'style.css';
echo "</style>";
function multiply($x, $y) {
  $z = $x * $y;
  return $z;
}

function shipping($ship) {
  if ($ship == 0) return "7 day Shipping";
  if ($ship == 5) return "3 day Shipping";
  if ($ship == 50)return "Overnight Shipping";
}

$t1 = multiply($_POST["q1"], 2);
$t2 = multiply($_POST["q2"], 3);
$t3 = multiply($_POST["q3"], 4);
$t4 =$t1+$t2+$t3+$_POST["shipping"];

echo "<h1>Welcome, " . $_POST["email"]. "</h1>";
echo "<p>Your password: ". $_POST["password"]. "</p><br>"; 

echo "<h1>Receipt</h1>";
echo "<table style='border:1px solid black;'>";
echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Water</th><td>".$_POST["q1"]."</td><td>$2</td><td>".$t1."</td></tr>";
echo "<tr><th>Coke</th><td>".$_POST["q2"]."</td><td>$3</td><td>".$t2."</td></tr>";
echo "<tr><th>Smoothie</th><td>".$_POST["q3"]."</td><td>$4</td><td>".$t3."</td></tr>";
echo "<tr><th>Shipping</th><td colspan='2'>".shipping($_POST["shipping"])."</td><td>".$_POST["shipping"]."</td></tr>";
echo "<tr><th colspan='3'>Total Cost<th>$".$t4."</th></tr>";

?>