<?php 
 include 'header.php'; ?>

<section>
  <div class="jumbotron" style="background-color:white;">
  <h1 class="display-4">Welcom to inventory management!</h1>
  <p class="lead"> Explore different inventory functions like adding, editing or viewing stock.</p>
  <hr class="my-4">
  <p>Managing the inventory made easier.</p>
  
</div>
</section>

<section>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body"style="background-color: #e3f2fd;">
        <h5 class="card-title">Add Stock</h5>
        <p class="card-text">Add new stocks to the inventory easily.</p>
        <a href="addstock.php" class="btn btn-info">Add Now </a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
       <div class="card-body"style="background-color: #e3f2fd;">
        <h5 class="card-title" >View Stock</h5>
        <p class="card-text">View the inventory through view section.</p>
        <a href="viewstock.php" class="btn btn-info">View Now</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body"style="background-color: #e3f2fd;">
        <h5 class="card-title">Edit Stock</h5>
        <p class="card-text">Edit the stocks in the inventory.</p>
        <a href="stockedit.php" class="btn btn-info">Edit Now</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body "style="background-color: #e3f2fd;">
        <h5 class="card-title">Contact </h5>
        <p class="card-text ">For maintainence and other queries.<p class="card-text ">Email: binay@email.com</p></p>
        
      </div>
    </div>
  </div>
</div>
</section>
</div>

<?php include 'footer.php'; ?> 