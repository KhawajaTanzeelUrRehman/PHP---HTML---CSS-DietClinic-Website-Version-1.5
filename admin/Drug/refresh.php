<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
        $pid = $_POST['pid'];
        $paymentmethod = $_POST['paymentmethod'];
        $qa = "select * from purchased_drug where purchased_drug_id = '".$pid."'";
        $result = mysqli_query($conn,$qa); 
        $row = mysqli_fetch_array($result);
        $did = $row[1];
        $no = $row[3];
        $ppid = $row[4]; 
        
?>