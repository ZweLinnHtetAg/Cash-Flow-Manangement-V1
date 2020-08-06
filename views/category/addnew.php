



<!doctype html>
<html lang="en">
  <head>
  	<title>New Category</title>
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

        <h2 class="mb-4">New Category</h2>
        <span><?php echo date("jS \of F Y ( l )"); ?></span>

        <div class="row mt-5">
        <div class="col-md-4"></div>
        <form class="col-md-8" action="../actions/category_add.php" method="POST">
            <div class="form-group">
                <label for="amount">Name</label>
                <input type="text" class="form-control" id="amount" placeholder="enter name here" name="name" require>
            </div>
            <div class="form-group">
                <label for="amount">Type</label>
                <select class="form-control" name="type_id" id="type_id">
                    <option value="1">Income</option>
                    <option value="2">Expense</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="5" require ></textarea>
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