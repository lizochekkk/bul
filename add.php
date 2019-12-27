<?php
session_start();
$link = mysqli_connect("localhost","lizochek","liza18072000!56@","kurs");
if(!$link)
{
    die("Error: ".mysqli_error($link));
}

if(isset($_POST['buy']))
{
    $bul = $_GET['i'];
    if(isset($_GET['c']))
        $bul++;
    $sql = "";
    switch($bul)
    {
        case 1: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `bul` = `bul` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 2: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `bul` = `bul` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 3: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `bul` = `bul` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 4: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `bul` = `bul` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 5: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 6: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 7: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 8: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 9: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;   
        case 10: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 11: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;  
        case 12: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;    
        case 13: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 14: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 15: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 16: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 17: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 18: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 19: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;   
        case 20: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 21: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 22: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 23: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 24: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` + '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;     
    }
    $res = mysqli_query($link,$sql) or die("Ошибка при добавлении товара в корзину: ".mysqli_error($link));
if($res)
{
    if(isset($_GET['c']))
        header ("Location: cart.php");
    else 
     header("Location: index.php");
    exit;
}
}
if(isset($_POST['minus']))
{
    $bul = $_GET['i'];
    if(isset($_GET['c']))
        $bul++;
    $sql = "";
    switch($bul)
    {
        case 1: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `bul` = `bul` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 2: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `bul` = `bul` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 3: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `bul` = `bul` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 4: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `bul` = `bul` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 5: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 6: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 7: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 8: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 9: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;   
        case 10: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 11: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;  
        case 12: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;    
        case 13: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 14: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 15: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 16: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 17: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 18: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 19: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;   
        case 20: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 21: 
            $count = $_POST['count']*1000000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 22: 
            $count = $_POST['count']*10000;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break; 
        case 23: 
            $count = $_POST['count']*100;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;
        case 24: 
            $count = $_POST['count']*1;
            $sql = "UPDATE `dostavka` SET `hleb` = `hleb` - '{$count}' WHERE `id` = '{$_SESSION['id']}'";
            break;     
    }
    $res = mysqli_query($link,$sql) or die("Ошибка при добавлении товара в корзину: ".mysqli_error($link));
if($res)
{
    if(isset($_GET['c']))
        header ("Location: cart.php");
    else 
     header("Location: index.php");
    exit;
}
}


?>