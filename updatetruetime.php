<?php


$number = $_REQUEST['number'];

$id = $_REQUEST['id'];

$con = mysqli_connect('localhost','root','','capacha');

$sql = "UPDATE `image` SET `true_time` = $number where `id` = $id " ;

mysqli_query($con,$sql);


echo json_encode('Done');