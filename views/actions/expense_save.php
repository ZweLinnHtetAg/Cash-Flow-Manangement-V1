<?php

include '../../helper/general_helper.php';

$ExpenseController->save('expenses');

header('location:../expense/index.php');