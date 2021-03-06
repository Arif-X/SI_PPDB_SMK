<?php
include "../../server/connection.php"; 

$search = $_POST['search']['value']; 
$limit = $_POST['length']; 
$start = $_POST['start']; 

$sql = mysqli_query($connection, "SELECT id_jurusan FROM kapasitas WHERE kapasitas>0"); 
$sql_count = mysqli_num_rows($sql); 

$query = "SELECT jurusan.nama_jurusan, sekolah.nama_sekolah, kapasitas.* FROM kapasitas INNER JOIN jurusan ON jurusan.id_jurusan=kapasitas.id_jurusan INNER JOIN sekolah ON sekolah.id_sekolah=jurusan.id_sekolah  WHERE kapasitas.kapasitas!=0 AND (nama_sekolah LIKE '%".$search."%' OR nama_jurusan LIKE '%".$search."%')";
$order_index = $_POST['order'][0]['column']; 
$order_field = $_POST['columns'][$order_index]['data']; 
$order_ascdesc = $_POST['order'][0]['dir']; 
$order = " ORDER BY ".$order_field." ".$order_ascdesc;

$sql_data = mysqli_query($connection, $query.$order." LIMIT ".$limit." OFFSET ".$start); 
$sql_filter = mysqli_query($connection, $query); 
$sql_filter_count = mysqli_num_rows($sql_filter); 

$datas = mysqli_query($connection, "SELECT id_jurusan FROM kapasitas WHERE kapasitas>0");
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