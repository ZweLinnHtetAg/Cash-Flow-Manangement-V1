<!doctype html>
<html lang="en">
  <head>
  	<title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
        
      <?php include('components/sidebar.php') ?>

      <!-- Page Content  -->

      <div id="content" class="p-4 p-md-5">

        <?php include('components/menu.php');  ?>

        <h2 class="mb-4">Dashboard</h2>
        <span><?php echo date("jS \of F Y ( l )"); ?></span>

        <div class="row mt-5">

        <div class="card border-primary my-3 mx-4" style="max-width: 18rem;">
            <div class="card-header">Today Income</div>
              <div class="card-body">
                <h5 class="card-title"> </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-footer">
                <a href="income/addnew.php" class="btn btn-primary btn-block"> Add New</a>
              </div>
            </div>

            <div class="card border-primary my-3 mx-4" style="max-width: 18rem;">
            <div class="card-header">Today Expand</div>
              <div class="card-body">
              <h5 class="card-title">  </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-footer">
              <a href="expense/addnew.php" class="btn btn-primary btn-block"> Add New</a>
              </div>
            </div>

            <div class="card border-info my-3 mx-4" style="max-width: 18rem;">
            <div class="card-header">Today Transitions</div>
              <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
        </div>  <!-- end of row -->

        
        
      </div>

      
		</div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sidebar.js"></script>
  </body>
</html>