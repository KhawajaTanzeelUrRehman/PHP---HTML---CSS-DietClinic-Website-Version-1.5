<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {

        $cid = $_POST['cid'];
        $follow = $_POST['follow'];
        $action = $_POST['action'];
        $submit = "true";


        if ($action == 'follow') {
            if ($follow == 0) {
                $follow = 7;
            } else if ($follow == 7) {
                $follow = 15;
            } else {
                $follow += 15;
            }



            $q = "UPDATE package set followup = '" . $follow . "'  where client_id = '" . $cid . "' and package_id = (select max(package_id) from package where client_id = '" . $cid . "');";
            mysqli_query($conn, $q);


            if ($follow > 7) {
                $q1 = "UPDATE client set followup = '" . $follow . "'  where client_id = '" . $cid . "';";
                mysqli_query($conn, $q1);
            }

            header("Location: ../../employee/noman/followup.php");
        } else {
            header("Location: ../../employee/noman/followup.php?submit=$submit");
        }
?>

<?php
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}
?>