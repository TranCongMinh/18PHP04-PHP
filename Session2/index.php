<?php
	//Khai báo một mảng
	$arr = [];
	$arr = ['Minh', 'Tai', 'Nhu Y', 'Suong', 'Thang'];
	$arr2 = [1 => 'Minh', 2 => 'Tai', 3 => 'Nhu Y', 4 => 'Suong', 5 => 'Thang'];// key mặc định
	$arr3 = [22 => 'Minh', 20 => 'Tai', 35 => 'Nhu Y', 41 => 'Suong', 78 => 'Thang'];// key mặc tự đặt

	var_dump($arr);
	echo "<br>";
	var_dump($arr2);
	echo "<br>";
	foreach ($arr as $key => $value) {// Vòng lặp foreach dùng để duyệt và in các phần tử trong mảng
		echo "$key =>"."$value";// in ra key and value
		echo "<br>";
		echo "$value";// in ra value
		echo "<br>";
	}// In mảng 
	array_push($arr,'Nhi');// Đẩy thêm 1 phần tử vào cuối mảng
	var_dump($arr);
	echo "<br>";
	array_pop($arr);// Bỏ 1 phần tử ở cuối mảng
	var_dump($arr);
	echo "<br>";
	unset($arr['0']);// bỏ 1 phần tử
	var_dump($arr);
	$arr4 = array_merge($arr2, $arr3);
	var_dump($arr3);
	echo "<br>";
	$arrayTwoWay = array (
		'Minh ' => array (
			'name'   => 'Trần Công Minh',
			'age'    => '21',
			'gender' => 'male',
			'phone'	 => '0983960445'
		),
		'Nhi ' => array (
			'name'   => 'Trần Thùy Nhi',
			'age'    => '21',
			'gender' => 'female',
			'phone'	 => '0983966451'
		),
		'Tai' => array (
			'name'   => 'Quang Tai',
			'age'    => '21',
			'gender' => 'orther',
			'phone'	 => '0983960455'
		)

	);
	
	function danhSachLop($arrayTwoWay){
	foreach ($arrayTwoWay as $key => $value) {
		$i=1;
		echo "$i "."$key"."<br>";
		echo $value['name']." Tuổi ";
		echo $value['age']." Giới tính ";
		echo $value['gender']." Số điện thoại  ";
		echo $value['phone']."<br>";
		$i++;
	}// Hàm in mảng
	}
	unset($arrayTwoWay['Tai']); // xóa bạn Tài
	$arrayVuong = array (
		'Vuong' => array (
			'name'   => 'Vuong',
			'age'    => '26',
			'gender' => 'orther',
			'phone'	 => '0983960455'
		)
	);
	$arrayTwoWay = array_merge($arrayTwoWay, $arrayVuong); // Thêm bạn Vương
	$arrayTwoWay['Minh ']['phone'] = '99999999';// Đổi số điện thoại bạn Min
	danhSachLop($arrayTwoWay);


?>