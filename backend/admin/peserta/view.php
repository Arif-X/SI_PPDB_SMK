<?php
include "../../server/connection.php"; 

$search = $_POST['search']['value']; 
$limit = $_POST['length']; 
$start = $_POST['start']; 

$sql = mysqli_query($connection, "SELECT uid FROM user WHERE level='Peserta'"); 
$sql_count = mysqli_num_rows($sql); 

$query = "SELECT * FROM user WHERE level='Peserta' AND (uid LIKE '%".$search."%' OR nama LIKE '%".$search."%' OR nisn='$search')";
$order_index = $_POST['order'][0]['column']; 
$order_field = $_POST['columns'][$order_index]['data']; 
$order_ascdesc = $_POST['order'][0]['dir']; 
$order = " ORDER BY ".$order_field." ".$order_ascdesc;

$sql_data = mysqli_query($connection, $query.$order." LIMIT ".$limit." OFFSET ".$start); 
$sql_filter = mysqli_query($connection, $query); 
$sql_filter_count = mysqli_num_rows($sql_filter); 

$datas = mysqli_query($connection, "SELECT uid FROM user WHERE level='Peserta'");
$allData = mysqli_fetch_all($datas, MYSQLI_ASSOC); 

$data = mysqli_fetch_all($sql_data, MYSQLI_ASSOC); 
$callback = array(
	'draw'=>$_POST['draw'], 
	'recordsTotal'=>$sql_count,
	'recordsFiltered'=>$sql_filter_count,
	'data'=>$data,
	'datas'=>$allData
);

header('Content-Type: application/json');
echo json_encode($callback); 
?>