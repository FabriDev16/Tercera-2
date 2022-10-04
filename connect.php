<?php 

$conn = new mysqli('tercera2.cluster-cviniojghleo.us-west-2.rds.amazonaws.com', 'admin', '1610Fabri', 'login');

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>