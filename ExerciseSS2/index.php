<?php
	$Smartphone = array (
		'Iphone X ' => array (
			'name'   => 'Apple iphone X',
			'gia'    => '999',
			'image'	 => 'iphone-x-64gb.png'
		),
		'Galaxy J8 ' => array (
			'name'   => 'SamSung Galaxy J8',
			'gia'    => '499',
			'image'	 => 'samsung-galaxy-j8.png'
		),
	);
	function danhSmartphone($Smartphone){
	$i=1;
	foreach ($Smartphone as $key => $value) {
		$hinhanh = $value['image'];
		echo "$i "."$key"."<br>";
		echo $value['name']." Giá ";
		echo $value['gia']."$ "."<br>";
		echo "<b>Hình ảnh : </b> <img src=".$hinhanh." />"."<br>";
		$i++;
	}// Hàm in mảng
	}

	$Smartphone['Iphone X ']['giamgia'] = '10'; 
	$Smartphone['Galaxy J8 ']['giamgia'] = '15';

	function danhSmartphoneGiamGia($Smartphone){
		$i=1;
		foreach ($Smartphone as $key => $value) {
			$hinhanh = $value['image'];
			echo "$i "."$key"."<br>";
			echo $value['name']."   Giá  ";
			echo $value['gia']."$ "."</br>    Giá bán còn   ";
			echo giamGia($value['gia'],$value['giamgia'])."$ ";
			echo "   Đã giảm giá  ".$value['giamgia']."  %  </br>";
			echo "<b>Hình ảnh : </b> <img src=".$hinhanh." />"."<br>";
			$i++;
	}// Hàm in mảng
	}
	function giamGia($gia ,$GiamGia){

		return $gia * (100-$GiamGia) / 100;
	}
	echo " ||Giá gốc ||</br>";
	danhSmartphone($Smartphone);
	echo "<hr>";
	echo "|| Thông tin sau khi giảm giá ||</br>";
	danhSmartphoneGiamGia($Smartphone);
	echo "<hr>";
	echo "|| Thay ảnh iphone X bằng iphone Xs-2018 ||</br>";
	$Smartphone['Iphone X ']['name'] = 'Apple Iphone XS - 2018';
	$Smartphone['Iphone X ']['image'] = 'iphone-xs-64gb.jpg';
	danhSmartphoneGiamGia($Smartphone);
	echo "<hr>";
	echo "|| Thêm sản phẩm Xiaomi ||</br>";
	array_push($array,'Xiaomi ');
	$Smartphone['Xiaomi ']['name'] = 'Xiaomi Mi 8';
	$Smartphone['Xiaomi ']['gia'] = '799';
	$Smartphone['Xiaomi ']['image'] = 'xiaomi-mi-8.png';
	$Smartphone['Xiaomi ']['giamgia'] = '15';
	danhSmartphoneGiamGia($Smartphone);

?>