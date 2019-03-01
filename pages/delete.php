<?php

include_once('classes/employees.php');

$employees = new Employees;

if(isset($_GET['employee_id']) | !empty($_GET['employee_id']))
{
  $employees->deleteById($_GET['employee_id']);
  
  header('Location: index.php');
}
else
{
  header('Location: index.php');
}

?>