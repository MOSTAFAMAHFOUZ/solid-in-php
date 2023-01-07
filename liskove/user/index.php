<?php

use Liskove\Employee;
use Liskove\Manager;

include 'Employee.php';
include 'Manager.php';
include 'Supervisor.php';

$emp = new Liskove\Employee;
// $emp = new Liskove\Manager;

function getSalary(Employee $employee){
    $employee->setSalary(10000);
    echo $employee->tax();
}

getSalary($emp);