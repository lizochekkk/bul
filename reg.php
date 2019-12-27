<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel = stylesheet href='main.css'>
</head>
<body>
 <center>
        <form action='reg.php' method=POST><br><br><br>
        <label> Логин </label><br>
        <input type='text' name='login'><br>
        <label> Пaроль </label><br>
        <input type='password' name='porol'><br><br>
        <button name='reg' style='color: ;' >зарегистрироваться</button>
    </form>
</center>
</body>
</html>
<?php
$link = mysqli_connect("localhost","lizochek","liza18072000!56@","kurs");
if(!$link)
{
    die("Error: ".mysqli_error($link));
}

if(isset($_POST['reg']))
{
$salt = mt_rand(100,999);
if(strlen($_POST['porol'])<8)
{
    echo "<div class='error'> Пароль должен содержать не меньше 8 символов </div><br>";
}
else {
        $pass = md5(md5($_POST['porol']).$salt);  
        $sql = "INSERT INTO `users` (`login`, `porol`, `salt`, `lvl`) VALUES ('{$_POST['login']}','{$pass}',{$salt},'0')";
        $res = mysqli_query($link,$sql) or die("Ошибка при регистрации: ".mysqli_error($link));
                if($res)
                {
                    $sql = "SELECT `id` FROM `users` WHERE `login` = '{$_POST['login']}'";
                    $res = mysqli_query($link,$sql) or die(mysqli_error($link));
                    if($res)
                    {  
                    $id = mysqli_fetch_row($res);
                    $sql = "INSERT INTO `dostavka` (`id` ,`login`) VALUES ( '{$id[0]}','{$_POST['login']}')";
                    $res = mysqli_query($link,$sql) or die("Ошибка при создании корзины: ".mysqli_error($link));
                    if($res)
                    {
                        
                    }
                    }
                }
        header("Location: index.php");
        die("Почему ты тут?");
     }
}
?>