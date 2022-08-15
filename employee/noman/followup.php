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
            include '../../home/navbar/navbarnoman.php';
            ?>
</head>

<body>

    <br>

    <h1 style=" margin: auto; width: fit-content; color: blue; ">Follow Up</h1>
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
                    <th scope="col ">Follow Up Type</th>
                    <th scope="col ">Last Follow Up</th>
                    <th scope="col ">Action</th>

                </tr>
            </thead>
            <?php


                    $submit = "";
                    if (!empty($_REQUEST['submit'])) {
                        $submit = $_REQUEST['submit'];
                    }
                    if ($submit == "true") {
                    ?>
            <div class="alert alert-warning" role="alert">
                <p style="text-align: center; font-size: 18px;">
                    ..............................Please update action before updating................................
                </p>
            </div>
            <?php
                    }
                    $query = "select DATEDIFF(CURRENT_TIMESTAMP, package_date) 'days' ,client_id, package_name , package_date,followup from package order by package_date DESC";
                    $result = mysqli_query($conn, $query);
                    while ($rows = mysqli_fetch_assoc($result)) {
                        $days =  $rows['days'];
                        $follow = $rows['followup'];
                        if ($rows['package_name'] == '15 Days Plan') {
                            $daysleft =  15 - $rows['days'];
                            if ((($days >= 7 && $days < 15) && $follow >= 7) || ($days > 15 && $follow >= 15)) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '30 Days Plan') {
                            $daysleft =  30 - $rows['days'];
                            if (
                                (($days >= 7 && $days < 15) && $follow >= 7) ||
                                (($days >= 15 && $days < 30) && $follow >= 15) ||
                                ($days > 30 && $follow >= 30)
                            ) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '60 Days Plan') {
                            $daysleft =  60 - $rows['days'];
                            if (
                                (($days >= 7 && $days < 15) && $follow >= 7) ||
                                (($days >= 15 && $days < 30) && $follow >= 15) ||
                                (($days >= 30 && $days < 45) && $follow >= 30) ||
                                (($days >= 45 && $days < 60) && $follow >= 45) ||
                                ($days > 60 && $follow >= 60)
                            ) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '90 Days Plan') {
                            $daysleft =  90 - $rows['days'];
                            if (
                                (($days >= 7 && $days < 15) && $follow >= 7) ||
                                (($days >= 15 && $days < 30) && $follow >= 15) ||
                                (($days >= 30 && $days < 45) && $follow >= 30) ||
                                (($days >= 45 && $days < 60) && $follow >= 45) ||
                                (($days >= 60 && $days < 75) && $follow >= 60) ||
                                (($days >= 75 && $days < 90) && $follow >= 75) ||
                                ($days > 90 && $follow >= 90)
                            ) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '120 Days Plan') {
                            $daysleft =  120 - $rows['days'];
                            if (
                                (($days >= 7 && $days < 15) && $follow >= 7) ||
                                (($days >= 15 && $days < 30) && $follow >= 15) ||
                                (($days >= 30 && $days < 45) && $follow >= 30) ||
                                (($days >= 45 && $days < 60) && $follow >= 45) ||
                                (($days >= 60 && $days < 75) && $follow >= 60) ||
                                (($days >= 75 && $days < 90) && $follow >= 75) ||
                                (($days >= 90 && $days < 105) && $follow >= 90) ||
                                (($days >= 105 && $days < 120) && $follow >= 105) ||
                                ($days > 120 && $follow >= 120)
                            ) {
                                continue;
                            }
                        } else if ($rows['package_name'] == '180 Days Plan') {
                            $daysleft =  180 - $rows['days'];
                            if (
                                (($days >= 7 && $days < 15) && $follow >= 7) ||
                                (($days >= 15 && $days < 30) && $follow >= 15) ||
                                (($days >= 30 && $days < 45) && $follow >= 30) ||
                                (($days >= 45 && $days < 60) && $follow >= 45) ||
                                (($days >= 60 && $days < 75) && $follow >= 60) ||
                                (($days >= 75 && $days < 90) && $follow >= 75) ||
                                (($days >= 90 && $days < 105) && $follow >= 90) ||
                                (($days >= 105 && $days < 120) && $follow >= 105) ||
                                (($days >= 120 && $days < 135) && $follow >= 120) ||
                                (($days >= 135 && $days < 150) && $follow >= 135) ||
                                (($days >= 150 && $days < 165) && $follow >= 150) ||
                                (($days >= 165 && $days < 180) && $follow >= 165) ||
                                ($days > 180 && $follow >= 180)
                            ) {
                                continue;
                            }
                        } else {
                            continue;
                        }
                        if ($follow < 7) {
                            $type = 'Weekly Follow Up';
                        } else if ($follow < 15) {
                            $type = 'Bi-Weekly Follow Up';
                        } else if ($follow < 30) {
                            $type = 'Monthly Follow Up';
                        } else {
                            $type = "" . $follow . "-days Follow Up";
                        }
                        if ($daysleft < 0) {
                            $daysleft = 'Package Ended';
                        }
                        if ($days < 7) {
                            continue;
                        }



                    ?>
            <tr>
                <form id="myform" method="post" action="../../employee/noman/followupaction.php"
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
                        <input style=" border: none;" value="<?php echo $type; ?>">
                    </td>
                    <td>
                        <input name="follow" style=" border: none;" value="<?php echo $follow; ?>">
                    </td>
                    <td style="width: 120px;">
                        <select style="width: fit-content;" name="action" class="form-select form-select-md"
                            aria-label=".form-select-sm example">
                            <option value="select">Select</option>
                            <option value="follow">Followed</option>
                        </select>
                        <input style="width: fit-content ;margin-top: 10px;" type="submit" value="Select"
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