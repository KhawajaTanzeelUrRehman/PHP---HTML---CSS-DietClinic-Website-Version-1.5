<?php
    include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $submit = "true";
    
    $q = "INSERT into departments (name,address,number,description) values ('".$name."','".$address."','".$phone."','".$description."')";
    mysqli_query($conn,$q); 
    header("Location: Add Department.php?submit=$submit");
?>