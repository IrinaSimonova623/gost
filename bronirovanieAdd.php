
<!DOCTYPE HTML >
<html>
 <header>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="bronirovanie.css">
  <script src="/style/.js"></script>	
  <title>Бронирование</title>
  <style>
    @font-face {
     font-family: Dzimaa; /* Гарнитура шрифта */
     src: url(font/dzimaa.ttf); /* Путь к файлу со шрифтом */
    }
    h1 {
    font-size: 50px;
     text-align: center;
     font-family: Dzimaa;
     color: #f7f9fc;
     text-shadow: 3px 3px 3px #00C27C;
    }
    body { background: #c7b39b url(images/22.jpg) ;
      background-position:center;
      width: 100%;}
      
      
   </style>


 <ul class="menu-main">
    <li><a href="glavnaya.html" >Главная</a></li>
    <li><a href="bronirovanieAdd.php"class="current">Бронирование</a></li>
    <li><a href="katalog.html">Каталог</a></li>
    <li><a href="kontact.html">Контакты</a></li>
   
 </header>

 <body>

  <div class="wrapper">

    <div class="content"><div id="logo" style="margin-top: -100px;" >Light <br> house</div>
  <h1>Добавить бронь</h1>

  <div class="operation">
    <div class="wrap">
      <div class="operation__inner">
        <div class="operation__header">
          <a class="operation__link" href="glavnaya.html">Вернуться на главную</a>
        </div>
        </style>
 </head> 
 <body>
  
				<form class="" method="post" action="addRequest.php">
					<input class="operation__field field knop" type="text" name="fio" placeholder="ФИО">
					<input class="operation__field field knop" type="text" name="checkin" placeholder="Дата въезда">
					<input class="operation__field field knop" type="text" name="checkout" placeholder="Дата выезда">
					<input class="operation__field field knop" type="text" name="colvzrosl" placeholder="Кол-во взрослых">
					<input class="operation__field field knop" type="text" name="coldetey" placeholder="Кол-во детей">
					<div class="operation__bottom">
						<button class="button button--common operation__buttom"type="submit">Добавить</button>
					</div>
				</form>
			</div>
    </div>
  </div>
	
<?php include 'bronirovanie.php';
        ?>
         
    <div class="footer"><div>Адрес:198 West 21th Street,Suite 721<br>Телефон:(+1) 435 3533<br>Email:info@domain.com</div></div>
  
  </div>


</body>
</html>


 