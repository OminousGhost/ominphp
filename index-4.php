<?php

#                                       №ПР4

// (Задание 4.1)
for ($i = 4; $i <= 9; $i++) {
 echo $i * $i . "\n";
}

//модернизация
$start = 4;
$end = 9;

echo "<table border='1'>";
echo "<tr><th>Число</th><th>Квадрат</th></tr>";
for ($i = $start; $i <= $end; $i++) {
 $square = $i * $i;
 echo "<tr><td>{$i}</td><td>{$square}</td></tr>";
}
echo "</table>";

// (Задание 4.2)
echo "<table border='1'>";
echo "<tr><th></th>";

for ($i = 4; $i <= 9; $i++) {
 echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 4; $i <= 9; $i++) {
 echo "<tr><th>$i</th>";
 for ($j = 4; $j <= 9; $j++) {
  echo "<td>" . ($i * $j) . "</td>";
 }
 echo "</tr>";
}
echo "</table>";
