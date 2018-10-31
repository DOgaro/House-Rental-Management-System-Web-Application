<?php 
include('functions.php');
if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../login/login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/main.js"></script>
    <link href="favicon.gif" rel="icon">
    <title>KejaManage</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="favicon.gif"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="style.css">


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="admin.php"><i class="fas fa-home"></i> KejaManage</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i><?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong><?php endif ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <?php  if (isset($_SESSION['user'])) : ?>
         <small>
            <a href="index.php?logout='1'" style="color: red;">LOGOUT</a>
          </small>
            <?php endif ?>
            <a class="dropdown-item" href="#" name="logout">Logout</a>
          </div>
        </li>
      </ul>

    </nav>
          
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="admin.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addUnit.php">
            <i class="fas fa-home"></i>
            <span>Add Unit</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addHouse.php">
            <i class="fas fa-home"></i>
            <span>Add House</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../adminTT/create_user.php">
            <i class="fas fa-user-plus"></i>
            <span>Add Tenant</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../adminTT/create_caretaker.php">
            <i class="fas fa-user-plus"></i>
            <span>Add Caretaker</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="indexTT.php">
            <i class="fas fa-users"></i>
            <span>Tenants</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-comments"></i>
            <span>Announcements</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tenants.php">
            <i class="fas fa-dollar-sign"></i>
            <span>Payments</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deleteF.php">
            <i class="fas fa-trash-alt"></i>
            <span>Remove User</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">KejaManage</li>
          </ol>
<html lang="en">
<body>
	
	<form action="create_caretaker.php" method="post" class="form-style-9">
		<?php echo display_error(); ?>
<ul>
<li>
    <input type="text" name="name" class="field-style field-split align-left" placeholder="Name" />
    <input type="text" name="username" class="field-style field-split align-right" placeholder="Username" />

</li>
<li>
    <input type="email" name="Email" class="field-style field-split align-left" placeholder="Email" />
    <input type="password" name="password" class="field-style field-split align-right" placeholder="Password" />
</li>
<li>
    <input type="text" name="Contact" class="field-style field-split align-left" placeholder="Phone Number" />
</li>
<li>
<input type="submit" name="register_btn" value="+ Add Caretaker"/>
</li>
</ul>
</form>

</body>
</html>