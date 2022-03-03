<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  
	$t = -50;
	if($t < -30 ){
		echo 'Отавайтесь дома!';
	}
	elseif ($t >= -30 && $t <-10) {
		echo 'Сегодня холодно!';
	}
	elseif($t >= -10 && $t < 5){
		echo "Не холодно!";
	}
	elseif($t >= 5 && $t < 15){
		echo "Тепло!";
	}
	elseif($t >= 15 && $t < 25){
		echo "Очень тепло!";
	}
	elseif($t >= 25 && $t < 35){
		echo "Жарко!";
	}
	elseif($t >= 35){
		echo "Пекло!";
	}
  ?>
</body>
</html>
