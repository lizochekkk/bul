<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>hover</title>
  <style>
   ul {
    width: 180px; /* Ширина меню */
    list-style: none; /* Для списка убираем маркеры */
    margin: 0; /* Нет отступов вокруг */
    padding: 0; /* Убираем поля вокруг текста */
    font-family: Arial, sans-serif; /* Рубленый шрифт для текста меню */
    font-size: 10pt; /* Размер названий в пункте меню */
   }
   li ul {
    position: absolute; /* Подменю позиционируются абсолютно */
    display: none; /* Скрываем подменю */
    margin-left: 165px; /* Сдвигаем подменю вправо */
    margin-top: -2em; /* Сдвигаем подменю вверх */
   }
   li a {
    display: block; /* Ссылка как блочный элемент */
    padding: 5px; /* Поля вокруг надписи */
    text-decoration: none; /* Подчеркивание у ссылок убираем */
    color: #666; /* Цвет текста */
    border: 1px solid #ccc;/* Рамка вокруг пунктов меню */
    background-color: #f0f0f0; /* Цвет фона */
    border-bottom: none; /* Границу снизу не проводим */
   }
   li a:hover {
    color: #ffe; /* Цвет текста активного пункта */
    background-color: #5488af; /* Цвет фона активного пункта */
   }
   li:hover ul { 
    display: block; /* При выделении пункта курсором мыши отображается подменю */
   }
   .brd {
    border-bottom: 1px solid #ccc; /* Линия снизу */
   }
  </style>
 </head>
 <body>
  <ul class="menu">
   <li><a href="russian.html">Булочки</a>
    <ul> 
     <li><a href="linkr1.html">с вареньем</a></li> 
     <li><a href="linkr2.html">с корицей</a></li> 
     <li><a href="linkr3.html">с маком</a></li> 
     <li><a href="linkr4.html" class="brd">с сахором</a></li> 
    </ul> 
   </li> 
   <li><a href="ukrainian.html">Хлеб</a> 
    <ul> 
     <li><a href="linku1.html">белый</a></li> 
     <li><a href="linku2.html">черный</a></li> 
     <li><a href="linku3.html">бородинский</a></li> 
     <li><a href="linku4.html" class="brd">зерновой</a></li> 
    </ul> 
   </li>
   <li><a href="caucasus.html">Печенье</a> 
    <ul> 
     <li><a href="linkc1.html">песочное</a></li> 
     <li><a href="linkc2.html">с отрубями</a></li> 
     <li><a href="linkc3.html">с ночинкой</a></li> 
     <li><a href="linkc4.html" class="brd">шоколадное</a></li> 
    </ul> 
   </li> 
   <li><a href="caucasus.html">Кексы</a> 
    <ul> 
     <li><a href="linkc1.html">шоколадные</a></li> 
     <li><a href="linkc2.html">с глазурью</a></li> 
     <li><a href="linkc3.html">классические</a></li> 
     <li><a href="linkc4.html" class="brd">с малиной</a></li> 
    </ul> 
   </li> 
  </ul>'  <div class="smalcart">
    <strong>Товаров в корзине:</strong><?=$smal_cart['cart_count']?> шт.
     <br/><strong>На сумму:</strong><?=$smal_cart['cart_price']?> руб.    
    <br/><a href=''>Оформить заказ</a>
</div>'
 </body>
</html>