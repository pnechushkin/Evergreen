<?php
function test ($n,$m){
	$mes='Ваш ответ:</br>';
	if (empty($n)||empty($m)){
		$mes.='Одно из чисел пустое</br>';
	}
	elseif ($m<=0||$n<=0){
		$mes.='Укажите положительное число</br>';
	}
	elseif ($m==$n){
		$mes.='Число не могут совпадать</br>';
	}
	elseif (abs($m-$n)<3){
		$mes.='разница между числами должна быть не менее 3-х</br>';
	}
	elseif ($n>$m){
		$mes.='Первое число должно быть меньше второго</br>';
	}
	elseif (($m-$n)%2!=0){
		$mes.='Нет возможности расчитать медиану</br>';
	}
	else {
		$mediana=($m+$n)/2;
		$mes.='mediana = '.$mediana.'</br> Prime numbers = '.++$n.' и '.--$m.'</br>';
	}
	return $mes;
}

if (!empty($_POST))
{
	$mes = test ($_POST['n'],$_POST['m']);
}

?>
<html lang="en">
<head>

</head>
<body>
<div>
	<form method="post">
		<label>Первое число</label>
		<input type="number" name="n"></br></br>
		<label>Второе число</label>
		<input type="number" name="m"></br></br>
		<input type="submit" value="GO">
	</form>
</div>
<div>
	<?=$mes?>
</div>
</body>