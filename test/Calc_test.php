﻿<?php
/*
ЗАДАНИЕ 1
- Проверьте, была ли корректно отправлена форма
- Если она была отправлена, отфильтруйте полученные значения
- В зависимости от оператора производите различные математические действия
- В случае деления, проверьте, делитель на равенство с нулем (на ноль делить нельзя)
- Сохраните полученный результат вычисления в переменной
*/
if(!empty($_POST)){
	if(is_numeric($_POST[num1]) and is_numeric($_POST[num2]))
	{ 
		$a=$_POST[num1];
		$b=$_POST[num2];
		if($_POST[operator]=="+") $x=$a+$b;
		elseif($_POST[operator]=="-") $x=$a-$b;
		elseif($_POST[operator]=="*") $x=$a*$b;
		elseif($_POST[operator]=="**") $x=$a**$b;
		elseif($_POST[operator]=="/")
		{
			if($_POST[num2]!=0) $x=$a/$b;
			else $x="На 0 делить нельзя";
		}
		elseif($_POST[operator]=="%")
		{
			if($_POST[num2]!=0) $x=$a%$b;
			else $x="На 0 делить нельзя";
		}
		else $x="Некоректный оператор";
		
	}else $x="Некоректные числа";	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Калькулятор</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Калькулятор</h1>

<?php
/*
ЗАДАНИЕ 2
- Если результат существует, выведите его
*/
if(!empty($_POST)){
	if(is_numeric($x)) echo "Ответ: ".$x;
	else echo $x;
}
?>

<form method="post">
<br />

Число 1:<br />
<input type="text" name="num1" /><br /><br />

Оператор:<br />
<input type="text" name="operator" /><br /><br />

Число 2:<br />
<input type="text" name="num2" /><br /><br />

<input type="submit" value="Считать!" />

</form>

</body>
</html>
