<?php 
$con=mysqli_connect('localhost','root','','binaya_inventory');
session_start();
if(isset($_POST['stockid'])){

	$id=$_POST['stockid'];
	$name=$_POST['stockname'];
	$quantity=$_POST['stockquantity'];
	$price=$_POST['stockprice'];
	$Dealer_Name=$_POST['stockdealername'];
	$Dealer_Contact=$_POST['stockdealercontact'];
	$date=$_POST['datetime'];





	$query="update stock set stockname='$name',stockquantity='$quantity',stockprice='$price',stockdealername='$Dealer_Name',stockdealercontact='$Dealer_Contact', date='$date' where id='$id'" ;
	$result= mysqli_query($con, $query);
	if($result){
		$_SESSION['msg'] = "item Updated";
		header('location:stockedit.php');
	}
	else{
		$_SESSION['msg'] = "item couldnot be Updated";
		header('location:singleedittock.php');

	}
}else{
	$_SESSION['msg'] = "no bd connection found";
		header('location:login.php');

}

?>