<!DOCTYPE html>
<?php 
session_start();
$link = mysqli_connect("localhost","lizochek","liza18072000!56@","kurs");
if(!$link)
{
    die("Error: ".mysqli_error($link));
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <center>
        <form action='dost.php' method=POST>
        <label> Фамлия *</label><br>
        <input type='text' name='surname' required><br>
        <label> Имя *</label><br>
        <input type='text' name='name' required><br>
        <label> Отчество </label><br>
        <input type='text' name='patronymic' ><br>
        <label> Почта * </label><br>
        <input type='text' name='mail' required><br>
        <label> Город * </label><br>
        <input type='text' name='town' required><br>
        <label> Улица * </label><br>
        <input type='text' name='street' required><br>
        <label> Дом/Квартира * </label><br>
        <input type='text' name='house' required><br>
        <label> Комментарий к заказу </label><br>
        <input type='text' name='comm'><br><br>
        Доставка осуществляется в приделах МКАД.
        Стоимость доставки 150 руб. Оплата доставки производится наличными курьеру и не входит в основную стоимость заказа!
        <button name='sub' style='color: ;' >Оформить заказ</button>
    </form>
</center>
<body style='background-color:rgba(216, 193, 126, 0.3); color: ;'>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
        $sql = "INSERT INTO `dost` (`surname`, `name`, `patronymic`, `mail`, `town`, `street`, `house`, `comm`,`customer`) VALUES ('{$_POST['surname']}','{$_POST['name']}','{$_POST['patronymic']}','{$_POST['mail']}','{$_POST['town']}','{$_POST['street']}','{$_POST['house']}','{$_POST['comm']}','{$_SESSION['id']}')";
        $res = mysqli_query($link,$sql);
                if(!$res)
                {
                    die("Error: ".mysqli_error($link));
                }
        header("Location: oformlen.php");
       
        die("Почему ты тут?");
     
}

?>