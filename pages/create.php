<?php

include_once('classes/employees.php');

$employees = new Employees;

if(isset($_POST['submit']))
{
  $data = array(
    'firstname' => $employees->sanitize($_POST['firstname']),
    'middlename' => $employees->sanitize($_POST['middlename']),
    'lastname' => $employees->sanitize($_POST['lastname'])
  );
  
  if($employees->create($data))
  {
    header('Location: index.php');
  }
}

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
          Create Employee
        </div>
        <div class="divider"></div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Employee List</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Employee</li>
          </ol>
        </nav>
        <div class="mb20">
          <a href="index.php" class="btn btn-danger">
            Cancel
          </a>
        </div>
        <div class="page-content">
          <form method="post" data-parsley-validate>
            <div class="form-group">
              <label for="firstname">Firstname</label>
              <input type="text" 
                     name="firstname" 
                     class="form-control" 
                     placeholder="Firstname"
                     minlength="3"
                     maxlength="50"
                     required>
            </div>
            <div class="form-group">
              <label for="middlename">Middlename</label>
              <input type="text" 
                     name="middlename" 
                     class="form-control" 
                     placeholder="Middlename"
                     minlength="3"
                     maxlength="50"
                     required>
            </div>
            <div class="form-group">
              <label for="lastname">Lastname</label>
              <input type="text" 
                     name="lastname" 
                     class="form-control" 
                     placeholder="Lastname"
                     minlength="3"
                     maxlength="50"
                     required>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block">Create</button>
          </form>
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