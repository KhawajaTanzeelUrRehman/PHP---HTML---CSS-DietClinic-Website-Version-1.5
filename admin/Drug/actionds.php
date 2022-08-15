<?php
    include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
    $did = $_POST['did'];
    $pid = $_POST['pid'];
    $no = $_POST['no'];
    $submit = "true";
    
    $pp = "false";
    $ep = "false";
    

    $qa = "select * from drug where drug_id = '".$did."'";
    $result = mysqli_query($conn,$qa); 
    $qb = "select * from payment where payment_id = '".$pid."'";
    $result2 = mysqli_query($conn,$qb); 
    
    
    if (empty(mysqli_fetch_assoc($result))){
        header("Location: Drug_sale.php?pp=$pp");
    }


    else if (empty(mysqli_fetch_assoc($result2))){
        header("Location: Drug_sale.php?ep=$ep");
    } 
    else{



    $q = "INSERT into purchased_drug (drug_id,no_of_items,payment_id) values ('".$did."','".$no."','".$pid."')";
    mysqli_query($conn,$q); 
    header("Location: Drug_sale.php?submit=$submit");
    }
?>