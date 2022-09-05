<!--calculator 1 example-->

<form method="post">
<table border="2">
<tr>
<th>Enter Number:1</th>
<td><input type="number" name="txtnum1"></td>
</tr>

<tr>
<th>Enter Number:2</th>
<td><input type="number" name="txtnum2"></td>
</tr>

<tr>
<th>Calculation</th>
<td>
<input type="submit" name="btn_add" value="+">
<input type="submit" name="btn_sub" value="-">
<input type="submit" name="btn_mul" value="*">
<input type="submit" name="btn_div" value="/">
</td>
</tr>
</table>
</form>

<?php
if(isset($_POST['btn_add'])){
	$num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$num3=$num1+$num2;
	echo"Addition: ".$num3;
}
if(isset($_POST['btn_sub'])){
	$num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$num3=$num1-$num2;
	echo"Subtriction: ".$num3;
}
if(isset($_POST['btn_mul'])){
	$num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$num3=$num1*$num2;
	echo"Multipication: ".$num3;
}
if(isset($_POST['btn_div'])){
	$num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$num3=$num1/$num2;
	echo"Division: ".$num3;
}

?>