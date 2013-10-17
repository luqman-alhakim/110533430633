<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kalkulator</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	<input type="text" name="x" />
	<select name="operator">
		 <option value="tambah"/>+
         <option value="kurang"/>-
         <option value="kali" />x
         <option value="bagi" />:
    </select>
    <input type="text" name="y" />
    <button type="submit">=</button>
    <input type="text" name="hasil" value="<?php
		$x=$_POST['x'];
		$y=$_POST['y'];
	switch ($_POST['operator']){
		case "tambah":
			echo $x + $y;
			break;
		case "kurang":
			echo $x - $y;
			break;
		case "kali":
			echo $x * $y;
			break;
		case "bagi":
			echo $x / $y;
			break;
	}
	?>" />
</body>
</html>