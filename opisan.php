<?php
session_start();
$link = mysqli_connect("localhost","lizochek","liza18072000!56@","kurs");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel=stylesheet href='main.css'>
</head>

   <body style='background-color:rgba(216, 193, 126, 0.3); color: ;'>
<?php

$sql="SELECT * FROM `bylochki` WHERE `id` = {$_GET['i']}";
$res = mysqli_query($link,$sql);
if($res)
{
    $row = mysqli_fetch_row($res);
    
    echo "<div align=center><img width = 400px src = '/img/img{$_GET['i']}.jpg'><br><h3>".$row[1]."</h3><br>
    ".$row[2];
    echo "<form action = 'add.php?i={$_GET['i']}' method = POST>
    <input type =number name = count min=1 max=20>
    <button name=buy> Купить </button></div>
    ";
    echo "В наличии: ".$row[3];
    echo "<br>Цена: ".$row[4]." Руб.";

}

?>
</body>
</html>