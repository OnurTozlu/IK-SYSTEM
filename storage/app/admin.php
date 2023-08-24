<?php 
include("baglantiekle1.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="style.css"/>
<title>Admin Panel</title>
<style> 
body {
  background-image: url("1.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" style="margin-left:60px;" href="">HR System</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Companies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin1.php">Employees</a>
      </li>
    </div>
</nav>


<h2 style="position: relative; top: 100px; text-align: center; color: #052757;">Companies</h2>


<a href="ekle1.php" style="position: relative; top: 50px; left: 60px;" class="btn btn-outline-primary">+ Create New Company</a>

<div class="table1">
      <table class="table">
          
          <tr style="background-color:#052757;">
              <th style="color: white;">ID</th>
              <th style="color: white;">Company Name</th>
              <th></th>
              <th></th>
              <th></th>
          </tr>

          <?php 
              $sorgu = $baglanti->query("SELECT * FROM company LIMIT 10");

              while ($sonuc = $sorgu->fetch_assoc()) { 
              $toplam_icerik = $sonuc['toplam'];
 
              $toplam_sayfa = ceil($toplam_icerik);

              $number = $sonuc['id'];
              $name = $sonuc['cname'];

          ?>                  
                  <tr>
                      <td><b><?php echo $number; ?></b></td>
                      <td><b><?php echo $name; ?></b></td>
                      <td><a href="read1.php?id=<?php echo $number; ?>" class="btn btn-outline-primary">Read</a></td>
                      <td><a href="update1.php?id=<?php echo $number; ?>" class="btn btn-primary">Update</a></td>
                      <td><a href="delete1.php?id=<?php echo $number; ?>" class="btn btn-danger">Delete</a></td>
                  </tr>

          <?php 
              } 
          ?>
  </div>


</body>
</html>