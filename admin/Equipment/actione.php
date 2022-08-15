<?php
    include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
    $pid = $_POST['pid'];
    $eid = $_POST['eid'];
    $description = $_POST['description'];
    $submit = "true";
    $pp = "false";
    $ep = "false";
    
    
    $qa = "select * from professional_staff where professional_id = '".$pid."'";
    $result = mysqli_query($conn,$qa); 
    
    $qb = "select * from equipments where equipment_id = '".$eid."'";
    $result2 = mysqli_query($conn,$qb); 
    
    if (empty(mysqli_fetch_assoc($result))){
        header("Location: Equipment_user.php?pp=$pp");
    } 
    else if (empty(mysqli_fetch_assoc($result2))){
        header("Location: Equipment_user.php?ep=$ep");
    }else{
    $q = "INSERT into equipment_user(professional_id, equipment_id,description) values ('".$pid."','".$eid."','".$description."')";
    mysqli_query($conn,$q); 
    header("Location: Equipment_user.php?submit=$submit");
    }
?>