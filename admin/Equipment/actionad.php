<?php
    include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
    $id = $_POST['id'];
    $category = $_POST['category'];
    $name = $_POST['name'];
    $submit = "true";
    $dp = "false";

    $qa = "select * from departments where dept_id = '".$id."'";
    $result = mysqli_query($conn,$qa); 
    
    if (empty($rows=mysqli_fetch_assoc($result))){
        header("Location: Add_equipment.php?dp=$dp");
    }else{
    $q = "INSERT into equipments (dept_id,category,name) values ('".$id."','".$category."','".$name."')";
    mysqli_query($conn,$q); 
    header("Location: Add_equipment.php?submit=$submit");
    }
?>