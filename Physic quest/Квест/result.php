<style>
body{
    font-size:32px;
    font-weight:bold;
    text-align: center;
    padding:10%;
}
</style>
<?php
$gradus=$_POST['gradus'];
$generator=$_POST['generator'];
$reasonans=$_POST['resonans'];
$kolebania=$_POST['kolebania'];
$weight=$_POST['weight'];
$kompas=$_POST['kompas'];
$veter=$_POST['veter'];
$echos=$_POST['echo'];
$arhimet=$_POST['arhimet'];
$galiley=$_POST['galiley'];
$lomonosov=$_POST['lomonosov'];
$first=$_POST['first'];
$second=$_POST['second'];
$three=$_POST['three'];
$number=0;
if (strpos(strtolower($gradus), 'градус') !== false||strpos(strtolower($gradus), 'градусы') !== false) {
    $number++;
}
if (strpos(strtolower($generator), 'генератор') !== false||strpos(strtolower($gradus), 'генераторы') !== false) {
    $number++;
}
if (strpos(strtolower($reasonans), 'резонанс') !== false||strpos(strtolower($gradus), 'резонансы') !== false) {
    $number++;
}
if (strpos(strtolower($kolebania), 'колебания') !== false) {
    $number++;
}
if (strpos(strtolower($weight), 'вес') !== false||strpos(strtolower($gradus), 'весы') !== false) {
    $number++;
}
if (strpos(strtolower($kompas), 'компас') !== false||strpos(strtolower($gradus), 'компасы') !== false) {
    $number++;
}
if (strpos(strtolower($veter), 'ветер') !== false) {
    $number++;
}
if (strpos(strtolower($echos), 'эхо') !== false) {
    $number++;
}
if (strpos(strtolower($arhimet), 'ахримет') !== false) {
    $number++;
}
if (strpos(strtolower($galiley), 'галилей') !== false) {
    $number++;
}
if (strpos(strtolower($lomonosov), 'ломоносов') !== false) {
    $number++;
}
if (strpos(strtolower($first), '18') !== false||strpos(strtolower($gradus), '18м/c') !== false) {
    $number++;
}
if (strpos(strtolower($second), 'кристаллизация') !== false||strpos(strtolower($gradus), 'кристаллы') !== false) {
    $number++;
}
if (strpos(strtolower($three), 'центр тяжести') !== false||strpos(strtolower($gradus), 'тяжесть') !== false) {
    $number++;
}
echo "Ответ по десятибальной шкале";
echo "<div></div>";
$result=$number/1.5;
echo "<script>console.log('numbers: $number');</script>";
echo "<script>console.log('result: $result');</script>";
echo "Общее количество возможных ответов:15<div></div>";
echo "Правильных ответов: ". $number.".<div></div>";
echo "Итог: ". $result;
echo "<div></div>";
?>
<form action="index.html" method="POST">
<input type="submit" value="Вернуться назад">
</form>