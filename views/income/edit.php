<?php
    
    include '../../helper/general_helper.php';
    $categories  = $GeneralController->columnFilter("categories","type_id",1); 
    $income      = $GeneralController->getData("incomes",$_GET['id']);
?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Edit Income</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('../components/css.php') ?>
  </head>
  <body>
		
	<div class="wrapper d-flex align-items-stretch">
        
      <?php include('../components/sidebar.php') ?>

      <!-- Page Content  -->

      <div id="content" class="p-4 p-md-5">

        <?php include('../components/menu.php');  ?>

        <h2 class="mb-4">Edit Income</h2>
        <span><?php echo date("jS \of F Y ( l )"); ?></span>

        <div class="row mt-5">
        <div class="col-md-4"></div>
        <form class="col-md-8" action="../actions/income_save.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $income['id']; ?>">
            <input type="hidden" name="date" value="<?php echo $income['date']; ?>">
            <input type="hidden" name="user_id" value="<?php echo $income['user_id']; ?>">
            <div class="form-group">
                <label>Amount</label>
                <input type="number" class="form-control" name="amount" id="amount" value="<?php echo $income['amount']; ?>" placeholder="enter amount here">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" id="category" name="category_id">
                  <?php 
                    foreach($categories as $category)
                    {
                  ?>
                    <option value="<?php echo $category['id']; ?>" <?php if($category['id']==$income['category_id']) {echo "selected";} ?> >
                        <?php echo $category['name']; ?>
                    </option>
                  <?php 
                    }
                  ?>    
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary float-right btn-block">Save</button>
            <!-- <div class="row">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary float-right btn-block">Add</button>
                </div>
            </div> -->
        </form>
        
            
        </div>  <!-- end of row -->

        
        
      </div>

      
		</div>

    <?php  include('../components/javascript.php'); ?>
  </body>
</html>
