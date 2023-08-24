<?php 
include("baglantiekle.php"); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.css"/>
<title>Add Employee</title>
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
            <div class="row" style="opacity:0.9; position: relative; top: 100px; min-height: 650px;">
                <div class="col-3"></div>
                <div class="col-6" style="background-color: #052757; border-radius: 10px; box-shadow: 5px 10px 8px #888888;">
                    <h2 style="text-align: center; position: relative; top: 30px; color: white;">Add Employee Panel</h2>
                    <form action="" method="POST" style="text-align: center; position: relative; top:80px; color: white;">
                        <label for="fname"><b>First Name</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="text" name="fname" required><br><br>
                        <label for="lname"><b>Last Name</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="text" name="lname" required><br><br>
                        <label for="email"><b>E-mail</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="email" name="email"><br><br>
                        <label for="phone"><b>Phone</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="tel" name="phone" maxlength="11" required><br><br>
                        <label for="phone"><b>Company</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="text" name="company"><br><br>
                        <input style="position: relative; top: 15px; border-radius: 10px; width: 100px; border: 0; height: 50px; background-color: white;" type="submit" value="Add">
                      </form> 
                </div>
                <div class="col-3"></div>
             </div>

        </div>

        <?php 

            if ($_POST) {
                $fname = $_POST['fname']; 
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $company = $_POST['company'];

                if ($fname<>"" && $lname<>"" && $phone<>"") { 
                    
                    if ($baglanti->query("INSERT INTO employee (fname, lname, email, phone, company) VALUES ('$fname','$lname','$email','$phone','$company')")) 
                    {
                       // echo "Succesfully added.";
                       header("location:admin1.php");
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