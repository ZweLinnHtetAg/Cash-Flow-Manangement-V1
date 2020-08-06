<?php

require "../../controllers/ExpenseController.php";
require "../../models/Expense.php";
require "../../helper/validation.php";
require "../../config/connection.php";

$validation = new Validation();
$controller = new ExpenseController($db, $validation);


