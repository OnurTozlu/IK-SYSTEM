<?php
$username= 'admin@admin.com';
$password= 'admin';

if ($_POST['email'] != $username && $_POST['password'] == $password) {
    echo "Email or Password incorrect.";
    include 'index.php';
}

elseif ($_POST['email'] == $username && $_POST['password'] != $password) {
    echo "Email or Password incorrect.";
    include 'index.php';
}

elseif ($_POST['email'] != $username && $_POST['password'] != $password) {
    echo "Email or Password incorrect.";
    include 'index.php';
}

else {
    include 'admin.php';
}


?>