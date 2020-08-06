<?php

require "../../controllers/CategoryController.php";
require "../../models/Category.php";
require "../../helper/validation.php";
require "../../config/connection.php";

$validation = new Validation();
$controller = new CategoryController($db, $validation);


