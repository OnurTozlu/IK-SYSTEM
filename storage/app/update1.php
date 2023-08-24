<?php 
include("baglantiekle1.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Company</title>
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



<div class="container">
<div style="position: relative; top:150px; left:270px;" class="col-6">

<form action="" method="POST">
    
    <table class="table">
        
        <tr>
            <td>Company Name</td>
            <td><input type="text" name="cname" class="form-control" value="<?php echo $sonuc['cname']; ?>">
            </td>
        </tr>

        <tr>
            <td>Address</td>
            <td><textarea name="caddress" class="form-control"><?php echo $sonuc['caddress']; ?></textarea></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><textarea name="email" class="form-control"><?php echo $sonuc['email']; ?></textarea></td>
        </tr>

        <tr>
            <td>Phone</td>
            <td><textarea name="phone" class="form-control"><?php echo $sonuc['phone']; ?></textarea></td>
        </tr>

        <tr>
            <td>Logo</td>
            <td><input type="file" name="logo" class="form-control" min-file-size="100"><?php echo $sonuc['logo']; ?></td>
        </tr>

        <tr>
            <td>Web Site</td>
            <td><textarea name="web" class="form-control"><?php echo $sonuc['web']; ?></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td style="text-align: center;"><input type="submit" class="btn btn-primary" value="Save"> <input action="admin.php" type="submit" class="btn btn-danger" value="Back"></td>
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

    if ($baglanti->query("UPDATE company SET cname = '$cname', caddress = '$caddress', email = '$email', phone = '$phone', logo = '$logo', web = '$web' WHERE id =".$_GET['id'])) {

        header("location:admin.php"); 

    }
    else {
            //echo "Something went wrong."; 
        }
    }

?>
</body>
</html>