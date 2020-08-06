<?php

require "../../controllers/IncomeController.php";
require "../../models/Income.php";
require "../../helper/validation.php";
require "../../config/connection.php";

$validation = new Validation();
$controller = new IncomeController($db, $validation);


