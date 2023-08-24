<?php 
include("baglantiekle1.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Company Detail</title>
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

$sorgu = $baglanti->query("SELECT * FROM company WHERE id =".(int)$_GET['id']); 

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
  <br><br><br><br>
  <div style="position:relative; position: relative; top: 200; height: 200px; width:200px;">
    <img style="position:absolute; left:0; right:0; top:0; bottom:0; margin:auto; border-radius: 100px;" src="<?php echo $sonuc['logo']; ?>">
  </div>
</center>


<div class="container">
<div style="position: relative; top:100px; left:270px; background-color: #052757; opacity:0.7;" class="col-6">

<form action="" method="POST">
    
    <table style="color: white;" class="table">
        
        <tr>
            <td>Company Name</td>
            <td><?php echo $sonuc['cname']; ?></td>
            </td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo $sonuc['caddress']; ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?php echo $sonuc['email']; ?></td>
        </tr>

        <tr>
            <td>Phone</td>
            <td><?php echo $sonuc['phone']; ?></td>
        </tr>

        <tr>
            <td>Web Site</td>
            <td><?php echo $sonuc['web']; ?></td>
        </tr>

    </table>

</form>
</div>
<div>
<?php 

if ($_POST) { 
    
    $cname = $_POST['cname']; 
    $caddress = $_POST['caddress'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $logo = $_POST['logo'];
    $web = $_POST['web'];
    }

?>
</body>
</html>