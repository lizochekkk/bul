<?php
session_start();
$link = mysqli_connect("localhost","lizochek","liza18072000!56@","kurs");
if(!$link)
{
    die("Error: ".mysqli_error($link));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style='background-color:rgba(216, 193, 126, 0.3); color: ;'>
<?php
$sql = "SELECT `bul`,`hleb`,`pechenye`,`keks`,`pirogn`,`chocolad` FROM dostavka WHERE `id` = '{$_SESSION['id']}'";
$res = mysqli_query($link,$sql) or die ("Ошибка при загрузке содержимого корзины: ".mysqli_error($link));

if($res)
{
    $count = mysqli_fetch_row($res);
    $cart = array(intdiv($count[0],1000000),intdiv(($count[0] % 1000000),10000),intdiv(($count[0] % 10000),100),$count[0]%100,
intdiv($count[1],1000000),intdiv(($count[1] % 1000000),10000),intdiv(($count[1] % 10000),100),$count[1]%100,
intdiv($count[2],1000000),intdiv(($count[2] % 1000000),10000),intdiv(($count[2] % 10000),100),$count[2]%100,
intdiv($count[3],1000000),intdiv(($count[3] % 1000000),10000),intdiv(($count[3] % 10000),100),$count[3]%100,
intdiv($count[4],1000000),intdiv(($count[4] % 1000000),10000),intdiv(($count[4] % 10000),100),$count[4]%100,
intdiv($count[5],1000000),intdiv(($count[5] % 1000000),10000),intdiv(($count[5] % 10000),100),$count[5]%100);
    for($i =0; $i < 24; $i++)
    {
        if($cart[$i]!=0)
        {
            $id = $i + 1;
            $ss = "SELECT `title` FROM `bylochki` WHERE `id` = {$id}";
            $req = mysqli_query($link,$ss);
            if($req)
            {
                $bul = mysqli_fetch_row($req);
                echo $bul[0].": ".$cart[$i]." шт. <form action = add.php?i={$i}&c=1 method=POST><input type = number
               min=1 max = 20 name = count> <button name=buy> + </button> <button name = minus> - </button></form>";
              
            }
        }
    }
    echo "<br><form action= dost.php method= post><button name= order>Заказать</button></form>";
}
?>
</body>
</html>