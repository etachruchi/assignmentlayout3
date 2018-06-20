<?php

error_reporting(0);
$con = mysqli_connect('localhost', 'excelarf', '**T0y*6z8e0c', 'excelarf_rohit');
if($con){
	if(isset($_POST['data'])){
		$decode = json_decode($_POST['data']);
		$name = $decode['name'];
    	$email = $decode['email'];
    	$message = $decode['message'];
		$date = $decode['date'];
		
		$sql = "insert into table1 set name = '$name', email = '$email', message = '$message', date = '$date'";
		mysqli_query($con, $sql);
		print_r($decode);
	}
	$query = "select name,email,message,date from table1 order by id desc limit 5";
	$result = mysqli_query($con, $query);
	$rows = array();
	while($row = mysqli_fetch_array($result)){
		$rows[] = $row;
	}
	echo json_encode($rows);
}

?>
