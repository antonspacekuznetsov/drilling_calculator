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
	border:1px solid gray;
	border-radius:0 0 5px 5px;
	padding:10px;
	
}
.constraction
{
	white-space: nowrap;
	padding:5px;
	cursor:pointer;
	margin:3px;
}
.typer
{
	white-space: nowrap;
	padding:5px;
	cursor:pointer;
	margin:3px;
}
.constr
{
	border:1px solid #5cb5e5;
	 border-radius: 20px;
	 padding:5px;
	 margin:3px;
}
.selected2 
{
	border:1px solid #26a2e4;
		 border-radius: 20px;
	 padding:5px;
	background-color: #5cb5e5;
	color:white;
}
.radius
{
	background:url('img/mrk-diametr.png') no-repeat 0 0;
	width:12px;
	height:12px;
	display:inline-block;
	background-position: 0 0px;
}
.getcost {
	background-color:#faad3d;
	color:white;
	padding:10px;
	border-radius: 20px;
	margin: 0 auto;
	width:250px;
	margin-top:30px;
	text-align:center;
	cursor:pointer;
}
.sender {
	background-color:#faad3d;
	color:white;
	padding:10px;
	border-radius: 20px;
	margin: 0 auto;
	width:250px;
	margin-top:10px;
	text-align:center;
	cursor:pointer;
}
.titler
{
	border-radius: 5px 5px 0 0;
	background-color:#5cb5e5;
	width:300px;
	padding:10px;
	color:white;
	box-shadow: 5px 5px;
}
.popuper{
	border-radius: 4px;
	border:1px solid #26a2e4;
	width:500px;
	background-color:white;
	position:absolute;
	z-index:9999;
	visibility:hidden;
	padding:10px;
}
.row {
	margin-top:30px;
}
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<meta content='True' name='HandheldFriendly' />
<meta content='width=480px; initial-scale=0.50; maximum-scale=0.50;minimum-scale=0.50;' name='viewport' />
<meta name="viewport" content="width=480px" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
    <link rel="stylesheet" href="/script/jquery-ui-timepicker-addon.css"> 
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
	  
	  
	  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="/script/jquery-ui-timepicker-addon.js"></script>

<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" media="all" type="text/css" href="/script/jquery-ui-timepicker-addon.css" />
	  
  <script src="script/jquery.maskedinput1.4.1.js"></script> 
</head>
<body>
<div class="titler"> 
<h3 style="margin:0px;">Артезианская скважина</h3>
</div>
<div class="col-md-6 maindiv">
<div class="row">  
<div class="col-md-4">
<h4>Выберете район<span style="color:red">*</span></h4>
</div>
<div class="col-md-4">
<select id="raioner" class="selectpicker" style="width:100%;">
  <?php foreach ($prices as $p => $items) {echo '<option>'.$p.'</option>';} ?>
</select>
</div>
</div>

<div class="row">
<div class="col-md-3" >
<h4>Конструкция скваженны</h4>
</div>
<div id="const" style="margin-top:10px;">
<div class="constraction selected2" style="display:inline-block;">
<div class="radius" style="width:12px;height:12px;background-position: 0 -12px;"></div><span>133 мет.</span>
</div>
<div class="constraction " style="display:inline-block;">
<div class="radius" style="width:12px;height:12px;"></div><span>133 мет. + 117 ПНД</span>
</div>
<div class="constraction " style="display:inline-block;">
<div class="radius" style="width:12px;height:12px;"></div><span>159 мет.</span>
</div>
<div class="constraction " style="display:inline-block;">
<div class="radius" style="width:12px;height:12px;"></div><span>159 мет. + 125 ПНД</span>
</div>
</div>
</div>

<div class="row">
	<div class="col-md-4" >
		<h4>Тип обсадной трубы</h4>
	</div>
	<div id="typex">
		<div class="typer selected2" style="display:inline-block;">
			<span>Цельнотянутоя труба</span>
		</div>
		<div class="typer " style="display:inline-block;">
			<span>Усиленная труба</span>
		</div>

	</div>
</div>

<div class="row">
	<div class="col-md-4" >
		<h4>Глубина бурения</h4>
	</div>
	
		<div class="input-group" style="margin-top:5px;">
		  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="1" id ="glb" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57;'>
		</div>

	
</div>
<div class="row">

	<div id="coster" class="getcost">РАССЧИТАТЬ СТОИМОСТЬ</div>
</div>
</div>
<div id="popup" class="popuper">
<div><img id="karts" src="img/0.jpg" style="float:left;width:254px;height:254px;"></div>
<span class="glyphicon glyphicon-remove" style="position:absolute;right:5px;top:5px;cursor:pointer;" onclick="$('#name, #tel').val('');$('#popup').css({'visibility':'hidden'});$('#al1, #al2').text('');"></span>
<h4 id="raion">Район бурения:</h4>
<h4 id="diametr">Диаметр скваженны:<span class="radius" style="width:12px;height:12px;background-position: 0 0px;"></span></h4>
<h4 id="glubina">Глубина:</h4>
<hr color="red" > 
<h4>Итоговая стоимость:</h4>
<div>
<h2 id="totalcost" style="text-align:center"><b>1900</b></h2>
</div>
<div style="width:100%; margin-top:15px;">
		<div class="input-group" style="width:49%;display:inline-block;">
		  <input  type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Ваше имя" id ="name">
		  <span id="al1" style="color:red;"></span>
		</div>
				<div class="input-group" style="width:49%;display:inline-block;">
		  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"  id ="tel" placeholder="+7 123 4567890">
		  <span id="al2" style="color:red;"></span>
		</div>
</div>
<div class="row">
	<div id="coster" class="sender" onclick="sender();">ОТПРАВИТЬ ЗАЯВКУ</div>
</div>
</div>
<script>
$('.constraction, .typer').on('mouseover', function(){$(this).addClass("constr");} )
$('.constraction, .typer').on('mouseout', function(){$(this).removeClass("constr");} )
$('#coster, #sender').on('mouseover', function(){$(this).animate({width:"+=20", height:"+=1"},100);} )
$('#coster, #sender').on('mouseout', function(){$(this).animate({width:"-=20", height:"-=1"},100);} )
$('.constraction').on('click', function(){ $('.constraction').removeClass('selected2'); $(this).addClass("selected2"); $('.constraction').children().css({"background-position":"0 0px"}); $(this).children().css({"background-position":"0 -12px"}); } )
$('.typer').on('click', function(){ $('.typer').removeClass('selected2'); $(this).addClass("selected2"); } );
$('#coster').on('click', calculate_cost);
function sender()
{
	var message = "<table><tr><td>Район бурения</td><td>"+$("#raioner").val()+"</td></tr><tr><td>Диаметр скваженны</td><td>"+$('#const .selected2').children('span').text()+"</td></tr><tr><td>Глубина</td><td>"+$('#glb').val()+"</td></tr><tr><td>Стоимость</td><td>"+$('#totalcost').text()+"</td></tr><tr><td>Имя</td><td>"+$('#name').val()+"</td></tr><tr><td>Телефон</td><td>"+$('#tel').val()+"</td></tr></table>";
	priznak=false;
	if ($('#tel').val()==""){
		$('#al2').text("Поле обязательно");
		priznak=true;
	}
	else {
		$('#al2').text("");
	}
		if ($('#name').val()==""){
		$('#al1').text("Поле обязательно");
		priznak=true;
	}
	else {
		$('#al1').text("");
	}
	
	if (priznak){
		return;
	}
	$('#name, #tel').val('');$('#popup').css({'visibility':'hidden'});$('#al1, #al2').text('');
	$('body').append("<div id='popup2' class='popuper'><span class=\"glyphicon glyphicon-remove\" style=\"float:right;cursor:pointer;\" onclick='$(\"#popup2\").remove();'></span><h3 style='text-align:center;'>Ваша заявка успешно отправленна</h3></div>");
	$('#popup2').css({"visibility":"visible","left":($(window).width()/2 - $('#popup2').width()/2) + "px", "top": ($(window).height()/2 - $('#popup2').height()/2) + "px"});
	setElems();
		$.ajax({ 
		type: "POST",
	  url: "mailer.php",
	  data: "ergdf3=1&msg=" + encodeURIComponent(message)
	});
}
function calculate_cost()
{
	price =[];
	total=0;
	//switch($('#raioner').val()){
<?php
$counter=0;
 foreach ($prices as $p => $items) {
	 foreach ($items as $key => $value) {
		echo 'price["'.$p.'_'.$counter.'"]='.$value.';';
		$counter++;
		if ($counter == 4)
			$counter=0;
	 }
	} 
?>
	switch ($('#const .selected2').children('span').text())
	{
		case "133 мет." :
			$('#karts').attr("src", "img/0.jpg");
			total = price[$("#raioner").val() + "_0"];
		break;
		
		case "133 мет. + 117 ПНД" :
			$('#karts').attr("src", "img/1.jpg");
			total = price[$("#raioner").val() + "_1"];
		break;
		
		case "159 мет." :
			$('#karts').attr("src", "img/0.jpg");
			total = price[$("#raioner").val() + "_2"];
		break;
		
		case "159 мет. + 125 ПНД":
			$('#karts').attr("src", "img/1.jpg");
			total = price[$("#raioner").val() + "_3"];
		break;
		
		default:
			$('#karts').attr("src", "img/0.jpg");
		break;
	}
	total = Number($('#glb').val()) * total;
	if ($('#typex .selected2').children().text() == "Усиленная труба")
	{
		total += Number($('#glb').val()) * 200;
	}
	
	$('#raion').html("Район бурения: <span style='color:gray;'>" + $("#raioner").val()+"</span>");
	$('#diametr').html('Диаметр скваженны: <br><span class="radius" style="width:12px;height:12px;background-position: 0 0px;"></span><span style="white-space: nowrap;">' + $('#const .selected2').children('span').text()+"</span>");
	$('#glubina').html("Глубина: " + $('#glb').val() +" м.");
	$('#popup').css({"visibility":"visible","left":($(window).width()/2 - $('#popup').width()/2) + "px", "top": ($(window.top).height()/2 - $('#popup').height()/2) + "px"});
	$('#totalcost').html("<b>"+total+" Р</b>");
	
	setElems();
}

var timerId = setInterval(function(){
	if ($('.bootstrap-select').length !== 0 ) {
		$('.bootstrap-select').css({"width":"100%", "margin-top":"4px"});
		clearInterval(timerId);
	}
},500);
jQuery(function($){
   $("#tel").mask("+7 (999) 999-9999");
});
window.onresize = function(e){setElems()};
function setElems(){
	if ($(window).width() < 998) {
		$('.row').css({"margin-top":"0px"});
		//$('#raioner').parent().css({"width":"60%", "margin-left":"0px"});
		$('h4').css({"text-align":"center"});
		$('#glb').parent().css({"margin":"0 auto"});
		$("#const").parent().css({"margin":"0 auto"});
		$("#popup").css({"width": $(window).width()+"px", "top":"0px", "left:":"0px", "padding":"0px"});
		$("#karts").css({"float":"center"});
		$('#popup2').css({"visibility":"visible","width":$(window).width()+"px","left":"0px", "top": ($(window).height()/2 - $('#popup2').height()/2) + "px"});
		$("#karts").parent().css({"text-align":"center"});
		$('#popup2').css({"width":$(window).width()+"px"});
	}
	else
	{
		$('h4').css({"text-align":"left"})
		$('#raioner').parent().css({"width":"60%", "margin-left":"-60px"});
		$('.row').css({"margin-top":"30px"});
		$('#glb').parent().css({"margin":"0px"});
		$("#karts").parent().css({"text-align":"left"});
	}
	
	if ($(window).width() < 998 && $(window).width() > 400) {
		$("#const").css({"width":"70%", "margin":"0 auto"});
		$("#typex").css({"width":"40%", "margin":"0 auto"});
	}
	else
	{
		$("#const").css({"width":"", "margin":""});
		$("#typex").css({"width":"", "margin":""});
	}
}
setElems();
</script>
</body>
</html>