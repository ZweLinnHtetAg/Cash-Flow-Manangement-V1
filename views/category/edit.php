<?php
    
    include '../../helper/general_helper.php'; 
    $category      = $GeneralController->getData("categories",$_GET['id']);
?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Edit Category</title>
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

        <h2 class="mb-4">Edit Category</h2>
        <span><?php echo date("jS \of F Y ( l )"); ?></span>

        <div class="row mt-5">
        <div class="col-md-4"></div>
        <form class="col-md-8" action="../actions/category_save.php" method="POST">
            <input type="hidden" value="<?php echo $category['id'] ?>" name="id" >
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="enter name here" name="name" value="<?php echo $category['name'] ?>" require>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type_id" id="type_id">
                    <option value="1" <?php if($category['type_id']==1){ echo "selected"; } ?>>Income</option>
                    <option value="2" <?php if($category['type_id']==2){ echo "selected"; } ?>>Expense</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="5" require ><?php echo $category['description']; ?></textarea>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-secondary float-right btn-block">Cancel</button>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary float-right btn-block">Add</button>
                </div>
            </div>
        </form>
        
            
        </div>  <!-- end of row -->

        
        
      </div>

      
		</div>

    <?php  include('../components/javascript.php'); ?>
  </body>
</html>