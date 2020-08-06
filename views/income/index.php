<?php
    
    include '../../helper/general_helper.php';
    $incomes     = $GeneralController->getAll("incomes"); 
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Incomes</title>
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

        <h2 class="mb-4">Incomes</h2>
        <p><?php echo date("jS \of F Y ( l )"); ?></p>
        <br>
        <table class="table table-light text-center mt-5" id="myTable" >
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Assigned By</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                     foreach($incomes as $income)
                     {
                        ?>
                    <tr>
                        <td><?php echo $income['date']; ?></td>
                        <td><?php echo $income['amount']; ?></td>
                        <td>
                          <?php 
                            $category = $GeneralController->getCategory($income['category_id']); 
                            echo $category['name'];
                          ?>
                        <td><?php 
                            $user = $GeneralController->getUser($income['user_id']); 
                            echo $user['name'];
                            ?>
                        </td>
                        <td>
                          <a href="edit.php?id=<?php echo $income['id'] ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="../actions/delete.php" method="POST">
                               <input type="hidden" name="id" value="<?php echo $income['id'];  ?>">
                               <input type="hidden" name="table" value="incomes">
                               <input type="submit" class="btn btn-danger" value="Delete" />
                            </form>  
                        </td>
                    </tr>    
                    <?php
                     }
                    ?>  
            </tbody>
        </table>

         <!-- end of row -->
                     
         <a href="addnew.php" class="btn btn-primary float-right mt-5 ml-3"> Add New </a>
        
        
      </div>

      
		</div>

    <?php  include('../components/javascript.php'); ?>
  </body>
</html>
