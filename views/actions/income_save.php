<?php

include '../../helper/general_helper.php';

$IncomeController->save('incomes');

header('location:../income/index.php');