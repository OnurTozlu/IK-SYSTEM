<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.css"/>
<title>İndex</title>
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
            <div class="row" style="opacity:0.9; position: relative; top: 200px; min-height: 400px;">
                <div class="col-3"></div>
                <div class="col-6" style="background-color: #052757; border-radius: 10px; box-shadow: 5px 10px 8px #888888;">
                    <h2 style="color: white; text-align: center; position: relative; top: 30px;">HR System Entrance</h2>
                    
                    <form action="process.php" method="POST" style="color: white; text-align: center; position: relative; top:70px;">
                        <label for="email"><b>E-mail</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="email" name="email" required><br><br>
                        <label for="pass"><b>Password</b></label><br>
                        <input style="border: 0; border-radius: 10px; background-color: white;" type="password" name="password" required><br><br>
                        <button type="submit" class="btn btn-light">Log In</button>
                      </form> 
    
                </div>
                <div class="col-3"></div>
             </div>

        </div>





</body>
</html>