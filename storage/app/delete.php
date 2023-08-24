<?php 

if ($_GET) 
{

include("baglantiekle.php");

if ($baglanti->query("DELETE FROM employee WHERE id =".(int)$_GET['id'])) 
{
    header("location:admin1.php"); 
}
}

?>