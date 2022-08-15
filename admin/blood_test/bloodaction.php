<?php
    include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
    $bgroup = $_POST['bgroup'];
    $glucose = $_POST['glucose'];
    $rbc = $_POST['rbc'];
    $wbc = $_POST['wbc'];
    $plate = $_POST['plate'];;
    $protein = $_POST['protein'];
    $vitamin = $_POST['vitamin'];
    $fat = $_POST['fat'];
    $hormone = $_POST['hormone'];
    $lid = $_POST['lid'];
    $submit = "true";
    $le = "false";
    
    $qa = "SELECT * from laboratary_client where lab_id = '".$lid."'";
    $result = mysqli_query($conn,$qa); 
    
    if (empty(mysqli_fetch_assoc($result))){
        header("Location: Blood_test_report.php?le=$le");
    }else{
    $q = "INSERT into blood_test (wbc,blood_group,glucose,rbs,platelets,proteins,vitamins,fats,harmones,lab_id) values ('".$wbc."','".$bgroup."','".$glucose."','".$rbc."','".$plate."','".$protein."','".$vitamin."','".$fat."','".$hormone."','".$lid."')";
    mysqli_query($conn,$q); 
    header("Location: Blood_test_report.php?submit=$submit");
    }
?>