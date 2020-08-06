<?php

require "../../controllers/UserController.php";
require "../../models/User.php";
require "../../helper/validation.php";
require "../../config/connection.php";

$validation = new Validation();
$controller = new UserController($db, $validation);


