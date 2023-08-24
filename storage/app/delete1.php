<?php 

if ($_GET) 
{

include("baglantiekle1.php");

if ($baglanti->query("DELETE FROM company WHERE id =".(int)$_GET['id'])) 
{
    header("location:admin.php"); 
}
}

?>