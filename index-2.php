<?php

#                                 №ПР2

$name = "Леонид";
echo "Меня зовут " . $name;

$name = "Леонид";
$group = 446;
echo "Меня зовут " . $name . ", я учусь в группе " . $group;

$name = "Леонид";
$group = 446;
$text = "Меня зовут " . $name . ", я учусь в группе " . $group;
echo $text;

#                        Самостоятельная работа в №ПР2

echo "<html><head>";
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo "<title>Самостоятельная работа</title>";
echo "</head>";
echo "<body>";
$institution = "Название образовательного учреждения: ГАПОУ НИТ." . "<br/>";
$department = "Отделение: НИТ." . "<br/>";
$commission = "Цикловая комиссия: ЦМК отделения НИТ" . "<br/>";
$subject = "Предмет: УП  06" . "<br/>";
$cabinet = "Кабинет: 307" . "<br/>";
$teacher = "Преподаватель: Имамов Р.И." . "<br/>";
$group = "Номер группы: 446" . "<br/>";
$fullname = "Карпов Леонид Антонович";
$all = $institution . $department . $commission . $subject . $cabinet . $teacher . $group . $fullname;
echo $all;
echo "</body>";
echo "</html>";
