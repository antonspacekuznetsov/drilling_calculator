<?php
$prices = array (
	 "Воскресенский район" => array(1700, 1900, 2300, 2600),
	 "Волоколамский район" => array(1800, 2000, 2300, 2500),
	 "Домодедовский район" => array(1700, 1900, 2200, 2500),
	 "Истринский район" => array(1800, 2000, 2200, 2500),
	 "Новая Москва" => array(1700, 1900, 2000, 2500),
	 "Каширский район" => array(1800, 2100, 2200, 2500),
	 "Ленинский район" => array(1700, 1900, 2200, 2500),
	 "Люберецкий район" => array(1800, 2000, 2200, 2500),
	 "Можайский район" => array(1900, 2100, 2200, 2500),
	 "Наро-Фоминский район" => array(1700, 1900, 2200, 2500),
	 "Ногинский район" => array(1800, 2000, 2200, 2500),
	 "Одинцовский район" => array(1700, 1900, 2200, 2500),
	 "Подольский район" => array(1700, 1900, 2000, 2500),
	 "Раменский район" => array(1800, 2000, 2200, 2500),
	 "Рузский район" => array(1900, 2100, 2200, 2500),
	 "Серпуховский район" => array(1700, 1900, 2200, 2500),
	 "Ступинский район" => array(1700, 1900, 2200, 2500),
	 "Чеховский район" => array(1700, 1900, 2200, 2500),
	 "Тарусский район (Калужская область)" => array(1900, 2200, 2400, 2700),
	 "Жуковский район (Калужская область)" => array(1700, 1900, 2200, 2500),
	 "Боровский район (Калужская область)" => array(1800, 2000, 2200, 2500),
	 "Мало-ярославский район (Калужская область)" => array(1900, 2200, 2300, 2600),
	 "Заокский район (Тульская область)" => array(2000, 2300, 2400, 2700)
);

if (isset($_GET['b']) && $_GET['b'] == "a")
{
	echo '
	Автор: Кузнецов Антон<br>
mail: as.ky@ya.ru<br>
github: https://github.com/antonspacekuznetsov/washing_calc<br>
https://kwork.ru/user/netmanager';
die();
	
}
if (isset($_POST['write']) && $_GET['a'] == "mail")
{
	include_once("addmail.php");
}
if (isset($_POST['write']) && $_GET['a'] == "admin")
{
	include_once("admin.php");
}


?>
<html>
<head> 
  <style>
  body {
	  padding:10px;
  }
    .tooltip2 {
      position: fixed;
      padding: 10px 20px;
      /* красивости... */
	  z-index:9999;
      border: 1px solid #b3c9ce;
      border-radius: 4px;
      text-align: left;
      font: italic 14px/1.3 arial, sans-serif;
      color: #333;
      background: #FFFAD1;
      box-shadow: 3px 3px 3px rgba(0, 0, 0, .3);
    }

.maindiv
{
	border:1px solid black;
}
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<meta content='True' name='HandheldFriendly' />
<meta content='width=480px; initial-scale=0.50; maximum-scale=0.50;minimum-scale=0.50;' name='viewport' />
<meta name="viewport" content="width=480px" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="script/jquery.maskedinput1.4.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
</head>
<body>
<h3>Артезианская скважина</h3>
<div class="col-md-6 maindiv">
<h4>Выберете район<span style="color:red">*</span></h4>
<select class="form-control">
  <option>Воскресенский район</option>
  <option>Волоколамский район</option>
  <option>Домодедовский район</option>
  <option>Истринский район</option>
  <option>Новая Москва</option>
  
  <option>Каширский район</option>
  <option>Ленинский район</option>
  <option>Люберецкий район</option>
  <option>Можайский район</option>
  <option>Новая Москва</option>
  <option>Воскресенский район</option>
  <option>Волоколамский район</option>
  <option>Домодедовский район</option>
  <option>Истринский район</option>
  <option>Новая Москва</option>
  <option>Воскресенский район</option>
  <option>Волоколамский район</option>
  <option>Домодедовский район</option>
  <option>Истринский район</option>
  <option>Новая Москва</option>
  <option>Воскресенский район</option>
  <option>Волоколамский район</option>
  <option>Домодедовский район</option>
  <option>Истринский район</option>
  <option>Новая Москва</option>
</select>

</div>
</body>
</html>