<?php
require('../../../wp-blog-header.php');
//include 'functions.php';
$p_id=$_POST['p_id'];
$email=$_POST['email'];
echo add_subscriber($email,$p_id);


?>