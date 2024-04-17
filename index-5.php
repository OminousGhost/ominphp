<?php

#                                       №ПР5

// (Задание 5.1)
echo "<table border='1'>";
for ($i = 4; $i <= 9; $i++) {
 echo "<tr>";
 for ($j = 1; $j <= 9; $j++) {
  $result = $i * $j;

  //   //c
  if ($result % 2 == 0) {
   echo '<td style="background-color: lightgrey;">' . $result . '</td>';
  } else {
   echo "<td>{$i} * {$j} = {$result}</td>";
  }

  //   //a
  if ($result < 40) {
   echo "<td style='color: green;'>{$i} * {$j} = {$result}</td>";
  } else {
   echo "<td>{$i} * {$j} = {$result}</td>";
  }
 }

 //  //b
 if ($result > 75) {
  echo '<td style="color: red; font-weight: bold;">' . $result . '</td>';
 } else {
  echo "<td>{$i} * {$j} = {$result}</td>";
 }

 echo "</tr>";
}
echo "</table>";
