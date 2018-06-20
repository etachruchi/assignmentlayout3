
<?php
error_reporting(0);
$con = mysqli_connect('localhost', 'excelarf', '**T0y*6z8e0c', 'excelarf_rohit');
$sql1 = "select * from table1 order by id asc limit 0,5";
$result = mysqli_query($con, $sql1);
$rows = array();
while($row = mysqli_fetch_array($result)){
	$rows[] = $row;
}

if(isset($_REQUEST)){

	if($_REQUEST['r'] == 6){
		$sql2 = "select * from table1 limit 6,5";
		$result = mysqli_query($con, $sql2);
		$rows = array();
		while($row = mysqli_fetch_array($result)){
			$rows[] = $row;
		}
	}

	if($_REQUEST['r'] == 11){
		$sql3 = "select * from table1 limit 11,5";
		$result = mysqli_query($con, $sql3);
		$rows = array();
		while($row = mysqli_fetch_array($result)){
			$rows[] = $row;
		}
	}

	if($_REQUEST['r'] == 16){
		$sql4 = "select * from table1 limit 16,5";
		$result = mysqli_query($con, $sql4);
		$rows = array();
		while($row = mysqli_fetch_array($result)){
			$rows[] = $row;
		}
	}

	if($_REQUEST['r'] == 21){
		$sql4 = "select * from table1 limit 21,5";
		$result = mysqli_query($con, $sql4);
		$rows = array();
		while($row = mysqli_fetch_array($result)){
			$rows[] = $row;
		}
	}

	if($_REQUEST['r'] == 26){
		$sql4 = "select * from table1 limit 26,5";
		$result = mysqli_query($con, $sql4);
		$rows = array();
		while($row = mysqli_fetch_array($result)){
			$rows[] = $row;
		}
	}

}
//print_r($rows); exit();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
	<style>
		li{
			display: inline; 
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Message</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($rows as $record){ ?>
			<tr>
				<td><?php echo $record['name']; ?></td>
				<td><?php echo $record['email']; ?></td>
				<td><?php echo $record['message']; ?></td>
				<td><?php echo $record['date_of_message']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<ul>
	<?php 
	$query = "select * from table1";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	//echo $count; exit();
	$j = 0;
	for($i = 1; $i <= $count; $i+=5){
		$j+=1;
	?>
  		<li><a href="index.php?r=<?=$i?>"><?php echo $j; ?></a></li>
  	<?php } ?>
	</ul>
</body>
</html>