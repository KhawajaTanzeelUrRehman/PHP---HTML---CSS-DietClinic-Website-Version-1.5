<?php
    include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
    $category = $_POST['category'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $submit = "true";

    $q = "INSERT into drug (category,name,price) values ('".$category."','".$name."','".$price."')";
    mysqli_query($conn,$q); 
    header("Location: Add_drug.php?submit=$submit");
?>