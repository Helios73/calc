<?php

if (isset($_POST[])) {

	$var1 = $_POST['value1'];
	$var1 = $_POST['value2'];

	if ($_POST['operation'] == '+') {
		$summa = $value1 + $value2 ;
		echo $summa;
		elseif ($_POST['opeation'] == '-') {
		$summa = $value1 - $value2 ;
		echo $summa;	
		}
		elseif ($_POST['operation'] == '/') {
		$summa = $value1 / $value2 ;
		echo $summa;
		}
		elseif ($_POST['operation'] == '*') {
		$summa = $value1 * $value2 ;
		echo $summa;
		}
	}


}

<form action="cacl.php" method="post">

	<input type="text" name="value1">

	<select name="operation">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
    <input type="text" name "value2">