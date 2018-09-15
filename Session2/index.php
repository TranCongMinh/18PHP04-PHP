<?php

	//Khai báo một mảng
	// $arr = [];
	// $arr = ['Minh', 'Tai', 'Nhu Y', 'Suong', 'Thang'];
	// $arr2 = [1 => 'Minh', 2 => 'Tai', 3 => 'Nhu Y', 4 => 'Suong', 5 => 'Thang'];// key mặc định
	// $arr3 = [22 => 'Minh', 20 => 'Tai', 35 => 'Nhu Y', 41 => 'Suong', 78 => 'Thang'];// key mặc tự đặt

	// var_dump($arr);
	// echo "<br>";
	// var_dump($arr2);
	// echo "<br>";
	// foreach ($arr as $key => $value) {// Vòng lặp foreach dùng để duyệt và in các phần tử trong mảng
	// 	echo "$key =>"."$value";// in ra key and value
	// 	echo "<br>";
	// 	echo "$value";// in ra value
	// 	echo "<br>";
	// }// In mảng 
	// array_push($arr,'Nhi');// Đẩy thêm 1 phần tử vào cuối mảng
	// var_dump($arr);
	// echo "<br>";
	// array_pop($arr);// Bỏ 1 phần tử ở cuối mảng
	// var_dump($arr);
	// echo "<br>";
	// unset($arr['0']);// bỏ 1 phần tử
	// var_dump($arr);
	// $arr4 = array_merge($arr2, $arr3);
	// var_dump($arr3);
	// echo "<br>";
	$Smartphone = array (
		'Iphone X ' => array (
			'name'   => 'Apple iphone X',
			'gia'    => '200000000',
			'image'	 => 'iphone-x-64gb.png'
		),
		'Galaxy J8 ' => array (
			'name'   => 'SamSung Galaxy J8',
			'gia'    => '60000000',
			'image'	 => 'samsung-galaxy-j8.png'
		),
	);
	function danhSmartphone($Smartphone){
	$i=1;
	foreach ($Smartphone as $key => $value) {
		$hinhanh = $value['image'];
		echo "$i "."$key"."<br>";
		echo $value['name']." Giá ";
		echo $value['gia']."<br>";
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
		echo $value['gia']."</br>    Giá bán còn   ";
		echo giamGia($value['gia'],$value['giamgia']);
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
	$Smartphone['Xiaomi ']['gia'] = '130000000';
	$Smartphone['Xiaomi ']['image'] = 'xiaomi-mi-8.png';
	$Smartphone['Xiaomi ']['giamgia'] = '15';
	danhSmartphoneGiamGia($Smartphone);
	// unset($Smartphone['Tai']); // xóa bạn Tài
	// $arrayVuong = array (
	// 	'Vuong' => array (
	// 		'name'   => 'Vuong',
	// 		'age'    => '26',
	// 		'gender' => 'orther',
	// 		'phone'	 => '0983960455'
	// 	)
	// );
	// $Smartphone = array_merge($Smartphone, $arrayVuong); // Thêm bạn Vương
	// $Smartphone['Minh ']['phone'] = '99999999';// Đổi số điện thoại bạn Min
	// danhSachLop($Smartphone);


?>