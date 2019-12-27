<?php
session_start();
    $link = mysqli_connect ("localhost","lizochek","liza18072000!56@","kurs");
       if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}
	
if(isset($_POST['delete']))
{
	      
	$sql = "DELETE FROM `users` WHERE `users`.`id` = '{$_POST['delete']}'";
	$result = mysqli_query($link,$sql) or dir("Ошибка: ".mysqli_error($link));
	header("Location: ../memberlist.php?p=0");
	
}

if(isset($_POST['upgrade']))
{
	     
	$sql = "UPDATE `users` SET `lvl`= '1' WHERE `users`.`id` = '{$_POST['upgrade']}' ";
	$result = mysqli_query($link,$sql) or dir("Ошибка: ".mysqli_error($link));
	
	header("Location: ../memberlist.php");
}
if(isset($_POST['downgrade']))
{
	     
	$sql = "UPDATE `users` SET `lvl`= '0' WHERE `users`.`id` = '{$_POST['downgrade']}' ";
	$result = mysqli_query($link,$sql) or dir("Ошибка: ".mysqli_error($link));
	header("Location: ../memberlist.php");
}
if (isset($_POST['confirm']))
{
	
	
$res= mysqli_query($link,"UPDATE `users` SET `ban` = '1' WHERE `id` = '{$_POST['confirm']}'") or die("Ошибка ".mysqli_error($link));
	$row = mysqli_fetch_row($res);
	$time = $row[0];
	if($time)
	{
		"Ошибка";
	}
	
	header("Location: ../memberlist.php");
				die("Почему ты ещё здесь?");
}
die("Я нигде не был");
?>