<?php

include_once('classes/employees.php');

$employees = new Employees;
$employee_list = $employees->getData();

?>

<html>
<head>
  <title>PHP CRUD</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/libs/bootstrap/css/bootstrap.min.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb20">
      <a class="navbar-brand" href="#">PHP CRUD</a>
    </nav>
  </header>
  <div class="container mb20">
    <div class="card">
      <div class="card-body">
        <div class="page-title">
          Employee List
        </div>
        <div class="divider"></div>
        <div class="mb20">
          <a href="create.php" class="btn btn-info">
            Create
          </a>
        </div>
        <div class="page-content">
          <table id="employeeTable" class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th class="text-center" width="25%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($employee_list as $employee): ?>
              <tr>
                <td><?= $employee['firstname'].' '.$employee['middlename'].' '.$employee['lastname'] ?></td>
                <td class="text-center">
                  <a href="update.php?employee_id=<?= $employee['employee_id'] ?>" class="btn btn-info">
                    Edit
                  </a>
                  <a onClick="return confirm('Do you want to delete this record?')" href="delete.php?employee_id=<?= $employee['employee_id'] ?>" class="btn btn-danger">
                    Delete
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="text-center">
      &copy; All rights reserved 2019.
    </div>
  </footer>
  <script src="../assets/libs/jquery/jquery-3.3.1.min.js"></script>
  <script src="../assets/libs/popper/popper.min.js"></script>
  <script src="../assets/libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/libs/parsley/js/parsley.min.js"></script>
  <script src="../assets/js/script.js"></script>
</body>
</html>