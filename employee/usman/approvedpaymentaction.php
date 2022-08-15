<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {

        if (isset($_POST)) {
            $cid = $_POST['cid'];
            $apid = $_POST['apid'];
            $amount = $_POST['amount'];
            $payment_date = $_POST['payment_date'];
            $payment_method = $_POST['payment_method'];
            $purpose = $_POST['purpose'];
            $insta_id = $_POST['insta_id'];
            $client_type = $_POST['client_type'];
            $remarks = $_POST['remarks'];
            $action = $_POST['action'];
        }
        $submit = "true";


        if ($action == 'download') {

            $q = "SELECT status from payment_approvals where approval_id = '" . $apid . "'";
            $r = mysqli_fetch_array(mysqli_query($conn, $q));
            if ($r[0] == 'approve') {
                $q1 = "UPDATE payment_approvals set status = 'download' where approval_id = '" . $apid . "'";
                mysqli_query($conn, $q1);
            }

            $q2 = "SELECT * from client where client_id = '" . $cid . "'";
            $r2 = mysqli_fetch_array(mysqli_query($conn, $q2));
            $phone = $r2[4];
            $insta_id = $r2[5];

            if ($client_type == 'New' && ($purpose != "Capsules" && $purpose != "Protein Powder")) {
                // Create the size of image or blank image
                $image = imagecreate(500, 900);
                $logo = imagecreatefrompng('../../images/sliplogo.png');
                // Set the background color of image
                $background_color = imagecolorallocate($image, 255, 255, 255);

                // Set the text color of image
                $text_color = imagecolorallocate($image, 0, 0, 0);
                // Function to create image which contains string.
                imagestring($image, 5, 170, 100, "PAYMENT CONFIRMATION", $text_color);
                imagestring($image, 2, 30, 140, "Dt. Mahnoor Obaid", $text_color);
                imagestring($image, 2, 30, 160, "Consultant Nutritionist & Wellness Coach ", $text_color);
                imagestring($image, 2, 30, 200, "Dear Client,", $text_color);
                imagestring($image, 2, 30, 240, "Diet Clinic welcomes you onboard, this is to confirm you that your Payment", $text_color);
                imagestring($image, 2, 30, 260, "has been received, the details pertaining to your package are as follow:", $text_color);
                imagestring($image, 2, 30, 300, "Insta/Facebook ID: " . $insta_id . "", $text_color);
                imagestring($image, 2, 30, 320, "WhatsApp Number: " . $phone . "", $text_color);
                imagestring($image, 2, 30, 340, "Package: " . $purpose . "", $text_color);
                imagestring($image, 2, 30, 360, "Payment Date: " . $payment_date . "", $text_color);
                imagestring($image, 2, 30, 380, "Amount Paid: " . $amount . "", $text_color);
                imagestring($image, 2, 30, 400, "Mode of Payment: " . $payment_method . "", $text_color);
                imagestring($image, 2, 30, 420, "Client Code: DC" . $cid . "", $text_color);
                imagestring($image, 2, 30, 460, "I would like to ask you couple of questions to prepare your plan, you are", $text_color);
                imagestring($image, 2, 30, 480, "requested to fill the below registration form, the link to the form is", $text_color);
                imagestring($image, 2, 30, 500, "mentioned hereunder.", $text_color);
                imagestring($image, 2, 30, 540, "Registration Form: http://dietitianmahnoor.com", $text_color);
                imagestring($image, 2, 30, 560, "User : " . $phone . "", $text_color);
                imagestring($image, 2, 30, 580, "Password : " . $phone . "", $text_color);
                imagestring($image, 2, 30, 620, "The instructions to fill the form are as follow:", $text_color);
                imagestring($image, 2, 30, 640, " 1- Kindly update your password and save it with you", $text_color);
                imagestring($image, 2, 30, 660, " 2- Make sure you share the accurate and complete information", $text_color);
                imagestring($image, 2, 30, 680, " 3- Make sure you share the measurements according to the requested", $text_color);
                imagestring($image, 2, 30, 700, " scale (don not confuse inches with centimeters)", $text_color);
                imagestring($image, 2, 30, 720, "I hope your experience will be really pleasant with Diet Clinic.", $text_color);
                imagestring($image, 2, 30, 760, "Once Again Thank You for Choosing Diet Clinic", $text_color);
                imagestring($image, 2, 30, 800, "Regards,", $text_color);
                imagestring($image, 2, 30, 820, "Team Diet Clinic", $text_color);
                imagecopymerge($image, $logo, 10, 10, 0, 0, 150, 60, 100);
                header('Content-Disposition: attachment; filename="DC' . $cid . '.jpg"');
                imagepng($image);
                imagedestroy($image);
            } else {
                // Create the size of image or blank image
                $image = imagecreate(500, 900);
                $logo = imagecreatefrompng('../../images/sliplogo.png');
                // Set the background color of image
                $background_color = imagecolorallocate($image, 255, 255, 255);

                // Set the text color of image
                $text_color = imagecolorallocate($image, 0, 0, 0);
                // Function to create image which contains string.
                imagestring($image, 5, 170, 100, "PAYMENT CONFIRMATION", $text_color);
                imagestring($image, 2, 30, 140, "Dt. Mahnoor Obaid", $text_color);
                imagestring($image, 2, 30, 160, "Consultant Nutritionist & Wellness Coach ", $text_color);
                imagestring($image, 2, 30, 200, "Dear Client,", $text_color);
                imagestring($image, 2, 30, 240, "Diet Clinic welcomes you onboard, this is to confirm you that your Payment", $text_color);
                imagestring($image, 2, 30, 260, "has been received, the details pertaining to your package are as follow:", $text_color);
                imagestring($image, 2, 30, 300, "Insta/Facebook ID: " . $insta_id . "", $text_color);
                imagestring($image, 2, 30, 320, "WhatsApp Number: " . $phone . "", $text_color);
                imagestring($image, 2, 30, 340, "Package: " . $purpose . "", $text_color);
                imagestring($image, 2, 30, 360, "Payment Date: " . $payment_date . "", $text_color);
                imagestring($image, 2, 30, 380, "Amount Paid: " . $amount . "", $text_color);
                imagestring($image, 2, 30, 400, "Mode of Payment: " . $payment_method . "", $text_color);
                imagestring($image, 2, 30, 420, "Client Code: DC" . $cid . "", $text_color);
                imagestring($image, 2, 30, 460, "I would like to ask you couple of questions to prepare your plan, you are", $text_color);
                imagestring($image, 2, 30, 480, "requested to fill the below registration form, the link to the form is", $text_color);
                imagestring($image, 2, 30, 500, "mentioned hereunder.", $text_color);
                imagestring($image, 2, 30, 540, "Registration Form: http://dietitianmahnoor.com", $text_color);
                imagestring($image, 2, 30, 620, "The instructions to fill the form are as follow:", $text_color);
                imagestring($image, 2, 30, 640, " 1- Kindly update your password and save it with you", $text_color);
                imagestring($image, 2, 30, 660, " 2- Make sure you share the accurate and complete information", $text_color);
                imagestring($image, 2, 30, 680, " 3- Make sure you share the measurements according to the requested", $text_color);
                imagestring($image, 2, 30, 700, " scale (don not confuse inches with centimeters)", $text_color);
                imagestring($image, 2, 30, 720, "I hope your experience will be really pleasant with Diet Clinic.", $text_color);
                imagestring($image, 2, 30, 760, "Once Again Thank You for Choosing Diet Clinic", $text_color);
                imagestring($image, 2, 30, 800, "Regards,", $text_color);
                imagestring($image, 2, 30, 820, "Team Diet Clinic", $text_color);
                imagecopymerge($image, $logo, 10, 10, 0, 0, 150, 60, 100);
                header('Content-Disposition: attachment; filename="DC' . $cid . '.jpg"');
                imagepng($image);
                imagedestroy($image);
            }
        } else if ($action == 'share') {

            $q3 = "SELECT status from payment_approvals where approval_id = '" . $apid . "'";
            $r3 = mysqli_fetch_array(mysqli_query($conn, $q3));

            if ($r3[0] == 'download') {
                $q4 = "UPDATE payment_approvals set status = 'share' where approval_id = '" . $apid . "'";
                mysqli_query($conn, $q4);
                header("Location: ../../employee/usman/approvedpayment.php?");
            } else {
                $submit = 'false';
                header("Location: ../../employee/usman/approvedpayment.php?submit=$submit");
            }
        } else {
            header("Location: ../../employee/usman/approvedpayment.php?submit=$submit");
        }
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}