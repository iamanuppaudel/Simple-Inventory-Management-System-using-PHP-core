<?php 
$connect=mysqli_connect('localhost','root','','binaya_inventory');
session_start();
$query="select * from stock ";
$result=mysqli_query($connect, $query);

?>
<?php include 'header.php'; ?>
<br>
<section>
	<nav aria-label="breadcrumb" style="background-color: white;">
  <ol class="breadcrumb" style="background-color: white;">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit-Stock</li>
  </ol>
</nav>
<div class="container">
<div class="row ">
	<table class="table">
        <thead>
            <tr>
              <th class="card-text font-weight-bold text-monospace text-info">id</th>
              <th class="card-text font-weight-bold text-monospace text-info">Name</th>
              <th class="card-text font-weight-bold text-monospace text-info">Quantity</th>
              
              <th class="card-text font-weight-bold text-monospace text-info">Price</th>
              <th class="card-text font-weight-bold text-monospace text-info">Dealer Name</th>
              <th class="card-text font-weight-bold text-monospace text-info">DealerContact</th>
              <th class="card-text font-weight-bold text-monospace text-info">Entry Date</th>
              <th class="card-text font-weight-bold text-monospace text-info">Options</th>
            </tr>
        </thead>
          
        <tbody>
          	
          	<?php 
          	$i=1;//value initialize
          	while($value=mysqli_fetch_array($result)) //condition
          	{?>
            <tr>
              <td class="card-text font-weight-bold text-monospace "><?php echo $i; ?></td>
              <td class="card-text font-weight-bold text-monospace "><?php echo $value['1']; // print $value row of second columns?></td>
              <td class="card-text font-weight-bold text-monospace "><?php echo $value['2']; ?></td>
              <td class="card-text font-weight-bold text-monospace "><?php echo $value['3']; ?></td>
              <td class="card-text font-weight-bold text-monospace "><?php echo $value['4']; ?></td>
              <td class="card-text font-weight-bold text-monospace "><?php echo $value['5']; ?></td>
              <td class="card-text font-weight-bold text-monospace "><?php echo $value['6']; ?></td>
              <td><a href="singleedit.php?ID=<?php echo $value['0']; ?>" class="btn btn-info">Edit</a><a href="delete.php?ID=<?php echo $value['0']; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php 
            $i++;//$i increment with 1
        		} ?>
          </tbody>
    </table>
</div>
</div>
	
</section>
<?php include 'footer.php'; ?>

