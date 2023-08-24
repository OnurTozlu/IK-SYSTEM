<?php 
include("baglantiekle.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Employee Detail</title>
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="style.css"/>
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

<?php 

$sorgu = $baglanti->query("SELECT * FROM employee WHERE id =".(int)$_GET['id']); 

$sonuc = $sorgu->fetch_assoc(); 

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
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
  <center>
  <div style="background-color: #FEA514; position: relative; top: 100px; width:300px; height:60px; border-radius: 10px;">  
  <h2 style="color: white; position: relative; top:10px; text-align: center;"><?php echo $sonuc['fname']; ?> <?php echo $sonuc['lname']; ?></h2>
  </div>
</center>



<div class="container">
<div style="position: relative; top:200px; left:270px; background-color: #052757; opacity:0.7;" class="col-6">

<form action="" method="POST">
    
    <table style="color: white;" class="table">
        
        <tr>
            <td>First Name</td>
            <td>: <?php echo $sonuc['fname']; ?></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td>: <?php echo $sonuc['lname']; ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td>: <?php echo $sonuc['email']; ?></td>
        </tr>

        <tr>
            <td>Phone</td>
            <td>: <?php echo $sonuc['phone']; ?></td>
        </tr>

        <tr>
            <td>Company</td>
            <td>: <?php echo $sonuc['company']; ?></td>
        </tr>

    </table>

</form>
</div>
<div>
<?php 

if ($_POST) { 
    
    $fname = $_POST['fname']; 
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    }

?>
</body>
</html>