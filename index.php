<?php
session_start();
$link = mysqli_connect("localhost","lizochek","liza18072000!56@","kurs");
if(!$link)
{
    die("Error: ".mysqli_error($link));
}
/*
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	
	exit; */	
?><!--Something is wrong with the XAMPP installation :-( -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel=stylesheet href='main.css'>
</head>	 	
<body>
<div class = 'header'>
	<h3 >Хлебобулочные изделия</h3><br>
	<div align='right'>
  <?php
if(isset($_SESSION['user']))
	echo "<div class=welcome>Добро пожаловать, ".$_SESSION['user']."</div><br>";
else 
	echo "<a class = 'r' href='reg.php'>Регистрация</a>
	<a class = 'r' href='log.php'>Войти</a>";

?>	
	
	
	</div>
</div>
<?php
if(isset($_SESSION['user']))
{
echo "<div class='cart' align = right> 
<img width='50px' src='/img/cart.png'><br>
";
$sql = "SELECT `bul`,`hleb`,`pechenye`,`keks`,`pirogn`,`chocolad` FROM `dostavka` WHERE `id` = '{$_SESSION['id']}'";
$res = mysqli_query($link,$sql) or die("Ошибка получении количества купленного: ".mysqli_error($link));
if($res)
{ 
  $count = mysqli_fetch_row($res);
  $cost = intdiv($count[0],1000000)*40+intdiv(($count[0] % 1000000),10000)*40+intdiv(($count[0] % 10000),100)*40+$count[0]%100*40;
  $cost = $cost + intdiv($count[1],1000000)*30+intdiv(($count[1] % 1000000),10000)*30+intdiv(($count[1] % 10000),100)*35+$count[1]%100*45;
  $cost = $cost +intdiv($count[2],1000000)*50+intdiv(($count[2] % 1000000),10000)*45+intdiv(($count[2] % 10000),100)*45+$count[2]%100*50;
  $cost = $cost +intdiv($count[3],1000000)*60+intdiv(($count[3] % 1000000),10000)*60+intdiv(($count[3] % 10000),100)*60+$count[3]%100*60;
  $cost = $cost +intdiv($count[4],1000000)*65+intdiv(($count[4] % 1000000),10000)*60+intdiv(($count[4] % 10000),100)*40+$count[4]%100*50;
  $cost = $cost +intdiv($count[5],1000000)*70+intdiv(($count[5] % 1000000),10000)*65+intdiv(($count[5] % 10000),100)*70+$count[5]%100*67;
  echo "Всего: ".$cost."руб.<br><a href=cart.php> Подробнее </a></div>";
}
}
?>
<?php
if(isset($_SESSION['mes']))
{
  echo $_SESSION['mes'];
  unset($_SESSION['mes']);
}
  
?>
<ul class="menu">
   <li><a href="new.php">Булочки</a>
    <ul> 
     <li><a href="opisan.php?i=1">с вареньем</a></li> 
     <li><a href="opisan.php?i=2">с корицей</a></li> 
     <li><a href="opisan.php?i=3">с маком</a></li> <!--- ссыыылки --->
     <li><a href="opisan.php?i=4" class="brd">с сахором</a></li> 
    </ul> 
   </li> 
   <li><a href="new1.php">Хлеб</a> 
    <ul> 
     <li><a href="opisan.php?i=5">белый</a></li> 
     <li><a href="opisan.php?i=6">черный</a></li> 
     <li><a href="opisan.php?i=7">бородинский</a></li> 
     <li><a href="opisan.php?i=8" class="brd">зерновой</a></li> 
    </ul> 
   </li>
   <li><a href="new2.php">Печенье</a> 
    <ul> 
     <li><a href="opisan.php?i=9">песочное</a></li> 
     <li><a href="opisan.php?i=10">овсяное</a></li> 
     <li><a href="opisan.php?i=11">с вареньем</a></li> 
     <li><a href="opisan.php?i=12" class="brd">шоколадное</a></li> 
    </ul> 
   </li> 
   <li><a href="new3.php">Кексы</a> 
    <ul> 
     <li><a href="opisan.php?i=13">шоколадные</a></li> 
     <li><a href="opisan.php?i=14">с глазурью</a></li> 
     <li><a href="opisan.php?i=15">классические</a></li> 
     <li><a href="opisan.php?i=16" class="brd">с малиной</a></li> 
    </ul> 
   </li> 
  <li><a href="new4.php">Пирожные</a> 
    <ul> 
     <li><a href="opisan.php?i=17">бисквитные</a></li> 
     <li><a href="opisan.php?i=18">слоенные</a></li> 
     <li><a href="opisan.php?i=19">картошка</a></li> 
     <li><a href="opisan.php?i=20" class="brd">корзиночка</a></li> 
    </ul> 
   </li> 
  <li><a href="new5.php">Шоколад</a> 
    <ul> 
     <li><a href="opisan.php?i=21">горький</a></li> 
     <li><a href="opisan.php?i=22">молочный</a></li> 
     <li><a href="opisan.php?i=23">белый</a></li> 
     <li><a href="opisan.php?i=24" class="brd">с орехами</a></li> 
    </ul> 
   </li> 
  </ul>



<div class='imgs'><a href="new.php"><img width='400px' src='/img/buloch.jpg'></a><br> Булочки</div>
<div class='imgs'><a href="new1.php"><img width='400px' src='/img/Hhleb.jpg'></a><br> Хлеб</div><br>
<div class='imgs'><a href="new2.php"><img width='400px' src='/img/pechen.jpg'></a><br> Печенье</div>
<div class='imgs'><a href="new3.php"><img width='400px' src='/img/keks.jpg'></a><br> Кексы</div>
<div class='imgs'><a href="new4.php"><img width='400px' src='/img/pirogn.jpg'></a><br> Пирожные</div>
<div class='imgs'><a href="new5.php"><img width='400px' src='/img/chokolad.jpg'></a><br> Шоколад</div>


<div class = 'footer'><br>
<a href="dost.php">доставка</a><br>
<?php 
if(isset($_SESSION['lvl']))
  if($_SESSION['lvl']>0)
  echo "<a href=memberlist.php> Список пользователей </a>";
?>
<br>
  режим работы: с 8:00 до 22:00<br><br>
  тел. +7(915)368-55-84<br><br>
  <a href = logout.php> Выйти из аккаунта </a>
	<div align='right'>

	
	
	</div>
</div>
</body>
</html>