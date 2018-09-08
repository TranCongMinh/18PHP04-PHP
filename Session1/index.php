<?php
	// Comment PHP
	/* Comment
	*Nhiều
	*Dòng
	*http://localhost:81/18PHP04-PHP/Session1/index.php
	*/
	// Tổng hai số
	$a = 4;
	$b = 9;
	function tongHaiSo($a = 0, $b = 0){//lấy giá trị mặc định của hàm
		return $a + $b;
	}
	echo "Hai biến ".$a." và ".$b."<br>";
	echo "Tổng hai biến là ".tongHaiSo($a, $b)."<br>";
	if (tongHaiSo($a,$b) % 2 == 0 ){
		echo "Tổng chẵn <br>";
	} else if (tongHaiSo($a,$b) % 3 == 0) {
		echo "Tổng lẽ và chia hết cho 3 <br>";
	} else 
		echo "Tổng này lẽ";
  ?>
