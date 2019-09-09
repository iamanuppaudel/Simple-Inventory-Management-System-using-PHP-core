<?php 
 include 'header.php'; ?>

<div class="container-fluid">
	<nav aria-label="breadcrumb" style="background-color: white;">
  <ol class="breadcrumb" style="background-color: white;">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add-Stock</li>
  </ol>
</nav>
<div class=" container d-flex p-2 bd-highlight card-text font-weight-bold text-monospace text-info" style="background-color: #e3f2fd ; text-align:center;"> Provide stock detail.</div><br>
<div class="container border-left border-right">
<section>

	<form action="addstock_backend.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="card-text font-weight-bold text-monospace text-info">Name of item:</label>
      <input type="text" class="form-control" name="stockname" placeholder="Eg: Hard Disk Drive">
    </div>
    <div class="form-group col-md-6">
      <label class="card-text font-weight-bold text-monospace text-info">Quantity:</label>
      <input type="text" class="form-control" name="stockquantity" placeholder="Eg: 50">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label class="card-text font-weight-bold text-monospace text-info">Price:</label>
    <input type="text" class="form-control" name="stockprice" placeholder="Eg: $60">
  </div>
  <div class="form-group col-md-6">
    <label class="card-text font-weight-bold text-monospace text-info" >Name of Dealer:</label>
    <input type="text" class="form-control" name="stockdealername" placeholder="Eg: Binaya">
  </div></div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="card-text font-weight-bold text-monospace text-info">Contact info:</label>
      <input type="text" class="form-control" name="stockdealercontact" placeholder="Eg: +009573774">
    </div>
     <div class="form-group col-md-6">
      <label class="card-text font-weight-bold text-monospace text-info">Stock Entry Date:</label>
      <input type="Date" class="form-control" name="datetime" placeholder="dcdhbsjb">
    </div>
    </div>
  <button type="submit" name="btnAdd" class="btn btn-info">Add</button>
</form>
</section></div>
</div>


<?php include 'footer.php'; ?> 