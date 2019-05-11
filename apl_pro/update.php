<?php
include 'koneksi.php';
if(isset($_POST['nama'])){
	$nama = $_POST['nama'];	
	$query="INSERT INTO users(id, nama) VALUES ('','$nama')";
	if(mysqli_query($con, $query)){
		echo json_encode(array("status" => TRUE));
	}else{
		echo json_encode(array("status" => False));
	}	
}
if(isset($_POST['id'])){
	$id = $_POST['id'];	
	$nama = $_POST['skill'];	
	$query="INSERT INTO skills(id, nama, user_id) VALUES ('','$nama','$id')";
	if(mysqli_query($con, $query)){
		echo json_encode(array("status" => TRUE));
	}else{
		echo json_encode(array("status" => False));
	}	
}
?>