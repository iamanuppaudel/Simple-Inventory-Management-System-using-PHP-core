<?php include 'header.php'; ?>
<?php 
$con=mysqli_connect('localhost','root','','binaya_inventory');
if(isset($_GET['ID'])){ 
    $id=$_GET['ID'];
    $query="select * from stock where id='$id'";
    $result=mysqli_query($con, $query);
    $value=mysqli_fetch_array($result);
    }

?> <div class="container-fluid">
	<nav aria-label="breadcrumb" style="background-color: white;">
  <ol class="breadcrumb" style="background-color: white;">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update-Stock</li>
  </ol>
</nav>
<div class=" container d-flex p-2 bd-highlight card-text font-weight-bold text-monospace text-info" style="background-color: #e3f2fd ; text-align:center;"> Update stock detail.</div><br>
<div class="container border-left border-right">
<section>

	<form action="editstock_backend.php" method="post">
  <div class="form-row"><div class="form-group">
        <input type="text" value="<?php echo $value['0']; ?>" hidden name="stockid" class="form-control"></div></div>
         <div class="form-row">
    <div class="form-group col-md-6">
      <label class="card-text font-weight-bold text-monospace text-info">Name of item:</label>
      <input type="text" class="form-control" value="<?php echo $value['1']; ?>" required name="stockname" >
    </div>
    <div class="form-group col-md-6">
      <label class="card-text font-weight-bold text-monospace text-info">Quantity:</label>
      <input type="text" class="form-control" value="<?php echo $value['2']; ?>" required name="stockquantity" >
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label class="card-text font-weight-bold text-monospace text-info">Price:</label>
    <input type="text" class="form-control" value="<?php echo $value['3']; ?>" required name="stockprice" >
  </div>
  <div class="form-group col-md-6">
    <label class="card-text font-weight-bold text-monospace text-info" >Name of Dealer:</label>
    <input type="text" class="form-control" value="<?php echo $value['4']; ?>" required name="stockdealername" >
  </div></div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="card-text font-weight-bold text-monospace text-info">Contact info:</label>
      <input type="text" class="form-control" value="<?php echo $value['5']; ?>" required name="stockdealercontact" >
    </div>
     <div class="form-group col-md-6">
      <label class="card-text font-weight-bold text-monospace text-info">Stock Entry Date:</label>
      <input type="Date" class="form-control" value="<?php echo $value['6']; ?>" required name="datetime">
    </div>
    </div> <div class="form-row">
  <button type="submit" name="btnAdd" class="btn btn-info">Update</button></div>
</form>
</section></div>
</div>

<?php include 'footer.php'; ?> 