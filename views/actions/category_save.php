<?php

include '../../helper/category_helper.php';


$controller->save('categories');

header('location:../category/index.php');