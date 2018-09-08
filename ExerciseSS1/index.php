<form action="" method="GET">
	<p>Nhập số thứ nhất <input type="text" name="a"></p>
	<p>Nhập số thứ hai <input type="text" name="b"></p>
	<input type="submit" name="calculate" value="Calculate">
</form>
<?php
	$result = "" ;
	$a = isset($_GET['a']) ? $_GET['a'] : ''; 
	$b = isset($_GET['b']) ? $_GET['b'] : ''; 
	function mySum($a = 0, $b = 0){
		return $a + $b;
	};
	$sum = mySum($a, $b);
	$dv = 0;
	if ($sum < 1000) {
		echo "Tổng là $sum <br>";
		$dv = $sum % 10;
		echo "Giá trị hàng đơn vị là $dv <br>";
		if ($dv % 2 == 0) {
			echo "Đơn vị này chẵn <br>";
		}elseif ($dv % 3 == 0) {
			echo "Đơn vị lẽ và chia hết cho 3 <br>";
		}else
			echo "Đơn vị lẽ và không chia hết cho 3 ";	
	}
 ?>