<?php
session_start();
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
$text = $_POST['text'];
$client_id = $_SESSION["id"];

$submit = "true";

$query2 = "insert into feedbacks (description,client_id) values ('" . $text . "','" . $client_id . "')  ";
mysqli_query($conn, $query2);

header("Location: feedback.php?submit=$submit");