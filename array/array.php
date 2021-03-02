<?php
/*
ЗАДАНИЕ 1
- Создайте массив $bmw с ячейками:
	"model"
	"speed"
	"doors"
	"year"
- Заполните ячейки значениями: "X5", 120, 5, "2006"	
- Создайте массивы $toyota и $opel аналогичные массиву $bmw.
- Заполните массив $toyota значениями: "Carina", 130, 4, "2007"
- Заполните массив $opel значениями: "Corsa", 140, 5, "2007"*/	
$bmw = ["model"=>"X5","speed"=>"120","doors"=>"5","year"=>"2006"];	
$toyota = ["model"=>"Carina","speed"=>"130","doors"=>"4","year"=>"2007"];	
$opel = ["model"=>"Corsa","speed"=>"140","doors"=>"5","year"=>"2007"];
//или
$cars=[
	[
		"name"=>"bmw",
		"model"=>"X5",
		"speed"=>"120",
		"doors"=>"5",
		"year"=>"2006"
	],
	[
		"name"=>"toyota",
		"model"=>"Carina",
		"speed"=>"130",
		"doors"=>"4",
		"year"=>"2007"
	],
	[
		"name"=>"opel",
		"model"=>"Corsa",
		"speed"=>"140",
		"doors"=>"5",
		"year"=>"2007"
	]
]	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Массивы</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Массивы</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Выведите значения всех трёх массивов в виде: name - model - speed - doors -year,  например: bmw - 120 - 5 - 2006
	*/
	echo "bmw-$bmw[model]-$bmw[speed]-$bmw[doors]-$bmw[year]"."<br>";
	echo "toyota-$toyota[model]-$toyota[speed]-$toyota[doors]-$toyota[year]"."<br>";
	echo "opel-$opel[model]-$opel[speed]-$opel[doors]-$opel[year]"."<br>";
	//или
	echo "<br>";
	foreach($cars as $car){
		foreach($car as $key=>$value){
			echo $value;
			if($key!="year") echo "-";
		}
		echo "<br>";
	}
	?>
</body>
</html>
