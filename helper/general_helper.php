<?php

require "../../controllers/IncomeController.php";
require "../../models/Income.php";

require "../../controllers/ExpenseController.php";
require "../../models/Expense.php";

require "../../controllers/UserController.php";
require "../../models/User.php";

require "../../controllers/GeneralController.php";


require "../../helper/validation.php";
require "../../config/connection.php";

$validation = new Validation();

$IncomeController   = new IncomeController($db, $validation);
$ExpenseController  = new ExpenseController($db, $validation);
$IncomeController   = new IncomeController($db, $validation);
$UserController     = new UserController($db, $validation);
$GeneralController  = new GeneralController($db, $validation);


