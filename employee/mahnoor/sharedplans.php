<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
            include '../../home/navbar/navbarmahnoor.php';
            ?>
</head>

<body>

    <br>

    <h1 style=" margin: auto; width: fit-content; color: blue; ">Active Plans</h1>
    <div style="margin-left: 75px; margin-right: 75px; border:nonepx; align-content: center;">
        <br>
        <table class="table table-bordered">
            <thead style="background-color: rgb(110, 210, 250); align-content: center;">
                <tr>
                    <th scope="col ">Client ID</th>
                    <th scope="col ">Package Type</th>
                    <th scope="col ">Package Date</th>
                    <th scope="col ">Days Passed</th>
                    <th scope="col ">Days left</th>
                    <th scope="col ">Action</th>

                </tr>
            </thead>
            <?php
                    $query = "select DATEDIFF(CURRENT_TIMESTAMP, package_date) 'days' ,client_id, package_name , package_date from package order by package_date DESC";
                    $result = mysqli_query($conn, $query);
                    while ($rows = mysqli_fetch_assoc($result)) {
                        if ($rows['package_name'] == '15 Days Plan') {
                            $daysleft =  15 - $rows['days'];
                            if ($daysleft < 0 || $daysleft > 15) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '30 Days Plan') {
                            $daysleft =  30 - $rows['days'];
                            if ($daysleft < 0 || $daysleft > 30) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '60 Days Plan') {
                            $daysleft =  60 - $rows['days'];
                            if ($daysleft < 0 || $daysleft > 60) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '90 Days Plan') {
                            $daysleft =  90 - $rows['days'];
                            if ($daysleft < 0 || $daysleft > 90) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '120 Days Plan') {
                            $daysleft =  120 - $rows['days'];
                            if ($daysleft < 0 || $daysleft > 120) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '180 Days Plan') {
                            $daysleft =  180 - $rows['days'];
                            if ($daysleft < 0 || $daysleft > 180) {
                                continue;
                            }
                        } else {
                            continue;
                        }


                    ?>
            <tr>
                <form id="myform" method="post" action="../../employee/mahnoor/sharedplanaction.php"
                    enctype="multipart/form-data">
                    <td>
                        <input name="cid" style=" border: none;" value="<?php echo $rows['client_id']; ?>">
                    </td>
                    <td>
                        <input style=" border: none;" value="<?php echo $rows['package_name']; ?>">
                    </td>
                    <td>
                        <input style=" border: none;" value="<?php echo $rows['package_date']; ?>">
                    </td>
                    <td>
                        <input style=" border: none;" value="<?php echo $rows['days']; ?>">
                    </td>
                    <td>
                        <input style=" border: none;" value="<?php echo $daysleft; ?>">
                    </td>
                    <td>
                        <input style="width: fit-content ;margin-top: 10px;" type="submit" value="Details of Client"
                            class="btn btn-primary">
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