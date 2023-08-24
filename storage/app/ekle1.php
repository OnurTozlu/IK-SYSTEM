<?php 
include("baglantiekle1.php"); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.css"/>
<title>Add Company</title>
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

    
        <div class="container">
            <div class="row" style="position: relative; top: 50px; min-height: 750px;">
                <div class="col-3"></div>
                <div class="col-6" style="opacity:0.9; background-color: #052757; border-radius: 10px; box-shadow: 5px 10px 8px #888888;">
                    <h2 style="text-align: center; position: relative; top: 30px; color: white;">Add Company Panel</h2>
                    <form action="" method="POST" style="text-align: center; position: relative; top:80px; color: white;">
                        <label for="cname"><b>Name</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="text" name="cname" required><br><br>
                        <label for="caddress"><b>Address</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="text" name="caddress"><br><br>
                        <label for="email"><b>E-mail</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="email" name="email"><br><br>
                        <label for="phone"><b>Phone</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="tel" name="phone" maxlength="11"><br><br>
                        <label for="web"><b>Web Site</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="text" name="web"><br><br>
                        <label for="logo"><b>Logo</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white; width: 250px;" type="file" name="logo" min-file-size="100"><br><br>
                        <input style="position: relative; top: 25px; border-radius: 10px; width: 100px; border: 0; height: 50px; background-color: white;" type="submit" value="Add">
                      </form> 
                </div>
                <div class="col-3"></div>
             </div>

        </div>

        <?php 

            if ($_POST) {

                $name = $_POST['cname']; 
                $address = $_POST['caddress'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $web = $_POST['web'];
                $logo = $_POST['logo'];

                if ($name<>"") { 
                    
                    if ($baglanti->query("INSERT INTO company (cname, caddress, email, phone, web, logo) VALUES ('$name','$address','$email','$phone','$web','$logo')")) 
                    {
                       // echo "Succesfully added.";
                       header("location:admin.php");
                    }
                    else
                    {
                       // echo "Something went wrong.";
                    }

                }

            }

        ?>

    


</body>
</html>