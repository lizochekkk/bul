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
    <link rel=stylesheet href='main.css'>
</head>
<body>
<center>
        <form action='log.php' method=POST><br><br><br>
        <label> Логин </label><br>
        <input type='text' name='login'><br>
        <label> Пaроль </label><br>
        <input type='password' name='porol'><br><br>
        <button name='log' style='color: ;' >Войти</button>
    </form>
</center>

<?php
$link = mysqli_connect("localhost","lizochek","liza18072000!56@","kurs");
if(!$link)
{
    die("Error: ".mysqli_error($link));
}

if(isset($_POST['log']))
{
$sql = "SELECT `id`,`login`,`porol`,`salt`,`lvl` FROM `users` WHERE `login`='{$_POST['login']}'";
$res = mysqli_query($link,$sql);
if($res)
{

    $row = mysqli_fetch_row($res); 
    $pass = md5(md5($_POST['porol']).$row[3]);    
    if ($row[2]==$pass)
    {
        $_SESSION['user'] = $row[1];
        $_SESSION['id'] = $row[0];
        $_SESSION['lvl']=$row[4];

        header("Location: index.php");
        
        exit;
    }
    else 
    {
        echo "Неверный пороль";
    }
}
}
?>
</body>

</html>