<?php
    include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
    $paymentmethod = $_POST['paymentmethod'];
    $amount = $_POST['amount'];
    $submit = "true";
    
    $q = "INSERT into payment (amount,payment_method) values ('".$amount."','".$paymentmethod."')";
    mysqli_query($conn,$q); 
    header("Location: payment.php?submit=$submit");
?>