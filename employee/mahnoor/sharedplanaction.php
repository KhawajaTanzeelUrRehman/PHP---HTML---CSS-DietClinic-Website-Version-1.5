<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {
        if (isset($_POST)) {
            $cid = $_POST['cid'];
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
            include '../../home/navbar/navbarusman.php';
            ?>
</head>

<body>
    <br>

    <h1 style=" margin: auto; width: fit-content; color: blue; ">Client Details</h1>
    <div style="margin-left: 75px; margin-right: 75px; border:nonepx; align-content: center;">
        <br>
        <table class="table table-bordered">
            <thead style="background-color: rgb(110, 210, 250); align-content: center;">
                <tr>
                    <th scope="col ">Client ID</th>
                    <th scope="col ">First Name</th>
                    <th scope="col ">Last Name</th>
                    <th scope="col ">Gender</th>
                    <th scope="col ">Phone</th>
                    <th scope="col ">Insta ID</th>
                </tr>
            </thead>
            <?php
                    $query = "select * from client where client_id = '" . $cid . "'";
                    $result = mysqli_query($conn, $query);
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
            <tr>
                <form id="myform" method="post" action="../../employee/usman/approvedpaymentaction.php"
                    enctype="multipart/form-data">
                    <td>
                        <input name="cid" style=" border: none;" value="<?php echo $rows['client_id']; ?>">
                    </td>
                    <td>
                        <input name="cid" style=" border: none;" value="<?php echo $rows['first_name']; ?>">
                    </td>
                    <td>
                        <input name="cid" style=" border: none;" value="<?php echo $rows['last_name']; ?>">
                    </td>
                    <td>
                        <input name="cid" style=" border: none;" value="<?php echo $rows['gender']; ?>">
                    </td>
                    <td>
                        <input name="cid" style=" border: none;" value="<?php echo $rows['phone']; ?>">
                    </td>
                    <td>
                        <input name="cid" style=" border: none;" value="<?php echo $rows['insta_id']; ?>">
                    </td>
                </form>

            </tr>
            <?php
                    }
                    ?>
        </table>

    </div>

</body>

</html>




<?php
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}
?>