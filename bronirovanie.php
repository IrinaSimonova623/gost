<!DOCTYPE html>
<html>
<head>
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
 
</head>
 <body>

  <div class="wrapper">

 
  <h1>Забронированные номера</h1>
  <section class="section events">
    <div class="wrap">
      <table class="section__table table">
        <tr class="table__tr">
          <th class="table__th">ФИО</th>
          <th class="table__th">Дата въезда</th>
          <th class="table__th">Дата выезда</th>
          <th class="table__th">Кол-во взрослых</th>
          <th class="table__th">Кол-во детей</th>
        </tr>
    
          <?php
          include 'bron.php';
          ?>
      </table>
   
  </div>
</section>	

</body>
</html>


 