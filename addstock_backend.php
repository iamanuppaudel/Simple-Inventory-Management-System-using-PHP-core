<?php 
include_once 'sessioncheck.php';
$connect=mysqli_connect('localhost','root','','binaya_inventory');
session_start();
if(isset($_POST['btnAdd'])){

	$name=$_POST['stockname'];
	$quantity=$_POST['stockquantity'];
	$price=$_POST['stockprice'];
	$Dealer_Name=$_POST['stockdealername'];
	$Dealer_Contact=$_POST['stockdealercontact'];
	$date=$_POST['datetime'];


	$query="insert into stock (stockname, stockquantity, stockprice, stockdealername, stockdealercontact, date) values ('$name','$quantity','$price', '$Dealer_Name','$Dealer_Contact','$date')";

	$result= mysqli_query($connect, $query);//run the query
	if($result){//if $result was right then print data recorded and if wrong print not recorded 
		$_SESSION['msg'] = "data recorded";
		header('location:viewstock.php');
	}
	else{
		$_SESSION['msg'] = "data couldnot be recorded";
		header('location:addstock.php');

	}
}else{
	$_SESSION['msg'] = "no db connection found";
		header('location:login.php');

}

?>