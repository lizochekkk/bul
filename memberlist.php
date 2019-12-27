<?php session_start();
$link = mysqli_connect ("localhost","lizochek","liza18072000!56@","kurs");
       if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	   }?>
<html>
    <head>
	<meta charset="utf-8">
	<link rel = stylesheet href = "css\viewforum.css">
    <title>Список пользователей</title>
	
    </head>
<body>
<div class='quests'>
<h1 align = 'middle'> Список пользователей </h1>
<table align = 'center' style ='text-align: center;' width = '500px' border= '1px solid'>
<th> id </th>
<th> login </th>
<th> lvl </th>
<th> Action </th>
<?php
	$sql = "SELECT `id`, `login`,`lvl` FROM `users`";
	$result = mysqli_query($link,$sql) or die("Ошибка при получении списка пользователей: ".mysqli_error($link));
	if($result)
	{
		$rows = mysqli_num_rows($result);
		for($i = 0; $i < $rows; ++$i)
		{
			echo "<tr>";
			$row = mysqli_fetch_row($result);
			for ($j = 0; $j < 3; $j++)
			{				
				echo "<td> {$row[$j]} </td>";
			}
			if(isset($_SESSION['lvl']))
			{
				if ($row[2] < $_SESSION['lvl'])
				{
					echo "<td> <form action = 'action.php' method = 'POST'>
							<button class = 'dwn' name = 'delete' value = '{$row[0]}' > X </button>";
					
					if(isset($_POST['suspend']))
					{
						if($_POST['suspend'] == $row[0])
							echo "<form action = 'action.php' method = 'POST'>
								Подтвердите:
								<button value = '{$_POST['suspend']}' name='confirm'>✓</button></input> </form>";	
					}
					if ($row[2] != 1 && $_SESSION['lvl']> 1)
						echo "<button class='upd' action = 'action.php' name = 'upgrade' value = '{$row[0]}'> + </button></form>";
					elseif ($row[2] == 1 && $_SESSION['lvl']>1)
						echo "<button class='dwn' action = 'action.php' name = 'downgrade' value = '{$row[0]}'> - </button></form>";
					echo "</form>";
					echo "<form action = 'memberlist.php?p=0' method = 'POST'><button  class='dwn' name = 'suspend' value = '{$row[0]}' > Ban </button></form></td>";
				}
				else 
				echo "<td> </td>";
			}
			else 
				echo "<td> </td>";
			echo "</tr>";
		}
	}

?>
</table>
<nav style='text-align:center'>  <a href='../index.php'> Main </a> </nav>
<?php /*
if(isset($_POST['delete']))
{
	     
	$sql = "DELETE FROM `users` WHERE `users`.`id` = '{$_POST['delete']}' ";
	$result = mysqli_query($link,$sql) or dir("Ошибка: ".mysqli_error($link));
	header("Location: manage.php");
}
if(isset($_POST['upgrade']))
{
	     
	$sql = "UPDATE `users` SET `lvl`= '1' WHERE `users`.`id` = '{$_POST['upgrade']}' ";
	$result = mysqli_query($link,$sql) or dir("Ошибка: ".mysqli_error($link));
	header("Location: manage.php");
}
if(isset($_POST['downgrade']))
{
	     
	$sql = "UPDATE `users` SET `lvl`= '0' WHERE `users`.`id` = '{$_POST['downgrade']}' ";
	$result = mysqli_query($link,$sql) or dir("Ошибка: ".mysqli_error($link));
	header("Location: manage.php");
}
*/?>
</div>
</body>
</html>