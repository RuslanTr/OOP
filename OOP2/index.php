<?php

require __DIR__."/vendor/autoload.php";

use App\User\User;
use App\Employee\Employee;

$user = new User;

$user->setName('Ruslan');
echo $user->getName();

$employee = new Employee;

$employee->setName('Roma');
echo $employee->getName();
