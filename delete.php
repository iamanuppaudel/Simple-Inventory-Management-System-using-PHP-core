<?php 
$connect=mysqli_connect('localhost','root','','binaya_inventory');
session_start();
if(isset($_GET['ID'])){
	$id=$_GET['ID'];
	$query="delete from stock where id='$id'";
	$result=mysqli_query($connect, $query);
	if($result){
		$_SESSION['msg'] = "data deleted";
		header('location:stockedit.php');
	}
	else{
		$_SESSION['msg'] = "data couldnot deleted";
		header('location:viewstock.php');
	}
}else{
$_SESSION['msg'] = "no db connection found";
header('location:index.php');
}