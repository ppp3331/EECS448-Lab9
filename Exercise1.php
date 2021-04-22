<?php
function mult($x, $y) {
  $z = $x * $y;
  return $z;
}
echo "<tr>";
echo "<th></th>";
for ($i = 1; $i <= 100; $i++)
{
  echo "<th>".$i."</th>";
}
echo "</tr><tr>";
for ($i = 1; $i <= 100; $i++)
{
  echo "<th>".$i."</th>";
  for ($j = 1; $j <= 100; $j++)
  {
  echo "<td>".mult($i, $j)."</td>";
  }
  echo "</tr>";
}
?>