<?php
	// Comment PHP
	/* Comment
	*Nhiều
	*Dòng
	*http://localhost:81/18PHP04-PHP/Session1/index.php
	*/
	// Tổng hai số
	$a = 251;
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
 	echo "<hr>";
	$thang = 1;
	switch ($thang) {
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			echo "Tháng $thang có 31 ngày <br>";
			break;
		case 2:
		case 4:
		case 6:
		case 9:
		case 11:
			if ($thang==2) {
				echo "Tháng $thang có 29 ngày nếu năm nhuận, 28 ngày nếu năm không nhận <br>";
			}else 
				echo "Tháng $thang có 30 ngày <br>";
			break;	
		default:
			echo "Tháng không hợp lệ <br>";
			break;
	}
	// Với kết quả tính tổng của bài 1 , lấy giá trị hàng đơn vị của tổng đó, chỉ lấy khi tổng nhỏ hơn 1000 , thì không thực hiện gì cả,
	// kiểm tra hàng đơn vị là chẳn hay lẽ , nếu lẽ chia hêt cho 3 không',
	// Nghiên cứu form POST and GET
	echo "<hr>";
	echo "Bài tập về nhà <br>";
	$sum = tongHaiSo($a, $b);
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
