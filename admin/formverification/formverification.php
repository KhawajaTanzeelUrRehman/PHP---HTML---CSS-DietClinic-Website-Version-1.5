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
            include '../../home/navbar/navbaradmin.php';
            ?>
</head>

<body>

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
            if ($submit == 'false') {
            ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................please download the receipt first................................
        </p>
    </div>
    <?php
            }
            ?>

    <br>

    <h1 style=" margin: auto; width: fit-content; color: blue; ">Form Verification</h1>
    <div style="margin-left: 75px; margin-right: 75px; border:nonepx; align-content: center;">
        <br>
        <table class="table table-bordered">
            <thead style="background-color: rgb(110, 210, 250); align-content: center;">
                <tr>
                    <th scope="col ">Approval ID</th>
                    <th scope="col ">Client ID</th>
                    <th scope="col ">Amount</th>
                    <th scope="col ">Payment Date</th>
                    <th scope="col ">Payment Method</th>
                    <th scope="col ">Purpose</th>
                    <th scope="col ">Insta ID</th>
                    <th scope="col ">Client Type</th>
                    <th scope="col ">Payment Slip</th>
                    <th scope="col ">Remarks</th>
                    <th scope="col ">Height</th>
                    <th scope="col ">Current Weight</th>
                    <th scope="col ">Target Weight</th>
                    <th scope="col ">Age</th>
                    <th scope="col ">Right Thigh</th>
                    <th scope="col ">Left Thigh</th>
                    <th scope="col ">Waist Above</th>
                    <th scope="col ">Belly Button</th>
                    <th scope="col ">Chest</th>
                    <th scope="col ">Calves</th>
                    <th scope="col ">Hips</th>
                    <th scope="col ">Food Choices</th>\
                    <th scope="col ">Current Medication</th>
                    <th scope="col ">Food Allergies</th>
                    <th scope="col ">Diseases</th>
                    <th scope="col ">Get Up Time</th>
                    <th scope="col ">Sleep Time</th>
                    <th scope="col ">Physical Activity</th>

                    <th scope="col ">Action</th>
                </tr>
            </thead>
            <?php
                    $query = "select * from payment_approvals where status='codegenerated' and clienttype = 'Old' order by payment_date ";
                    $result = mysqli_query($conn, $query);




                    while ($rows = mysqli_fetch_assoc($result)) {
                        $query1 = "SELECT * FROM body_measurements WHERE client_id = '" . $rows['client_id'] . "' and days = (select max(days) from body_measurements where client_id = '" . $rows['client_id'] . "')";
                        $result1 = mysqli_query($conn, $query1);
                        $rows1 = mysqli_fetch_assoc($result1);
                        $query2 = "SELECT * FROM medical_diagnosis WHERE client_id = '" . $rows['client_id'] . "'";
                        $result2 = mysqli_query($conn, $query2);
                        $rows2 = mysqli_fetch_assoc($result2);

                    ?>
            <tr>
                <form id="myform" method="post" action="../../admin/formverification/formverificationaction.php"
                    enctype="multipart/form-data">
                    <td style="width: 70px;">
                        <input name="apid" readonly style="width: 50px; border: none;"
                            value="<?php echo $rows['approval_id']; ?>">
                    </td>
                    <td style="width: 70px;">
                        <input name="cid" readonly style="width: 50px; border: none;"
                            value="<?php echo $rows['client_id']; ?>">
                    </td>

                    <td style="width: 80px;">
                        <input readonly style="width: 70px; border:none" name="amount"
                            value=" <?php echo $rows['amount']; ?>">
                    </td>
                    <td style="width: 130px;">
                        <input readonly style="width: 120px; border:none;" name="payment_date"
                            value=" <?php echo $rows['payment_date']; ?>">

                    </td>
                    <td style="width: 160px;">
                        <input readonly style="width: 150px; border:none;" name="payment_method"
                            value="<?php echo $rows['payment_method']; ?>">
                    </td>
                    <td style="width: 170px;">
                        <input readonly style="width: 160px; border:none;" name="purpose"
                            value="<?php echo $rows['purpose']; ?>">
                    </td>
                    <td style="width: 170px;">
                        <input readonly style="width: 160px; border:none;" name="insta_id"
                            value="<?php echo $rows['insta_id']; ?>">
                    </td>
                    <td style="width: 70px;">
                        <input readonly style="width: 50px; border:none;" name="client_type"
                            value="<?php echo $rows['clienttype']; ?>">
                    </td>
                    <td>

                        <img style="width: 250px; height: 250px"
                            src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($rows['payment_slip']); ?>" />

                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="remarks" value="<?php echo $rows['remarks']; ?>">
                    </td>
                    <?php
                                if (!empty($rows1)) {
                                ?>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="height" value="<?php echo $rows1['height']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="cweight"
                            value="<?php echo $rows1['current_weight']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="tweight"
                            value="<?php echo $rows1['target_weight']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="age" value="<?php echo $rows1['age']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="rthigh"
                            value="<?php echo $rows1['right_thigh']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="lthigh"
                            value="<?php echo $rows1['left_thigh']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="waist"
                            value="<?php echo $rows1['waist_above']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="bb"
                            value="<?php echo $rows1['belly_button']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="chest" value="<?php echo $rows1['chest']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="calves" value="<?php echo $rows1['calves']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="hips" value="<?php echo $rows1['hips']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="food"
                            value="<?php echo $rows2['food_choices']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="cmedication"
                            value="<?php echo $rows2['current_medication']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="fooda"
                            value="<?php echo $rows2['food_allergies']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="diseases"
                            value="<?php echo $rows2['diseases']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="get_up_time"
                            value="<?php echo $rows2['get_up_time']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="sleep_time"
                            value="<?php echo $rows2['sleep_time']; ?>">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="physical_activity"
                            value="<?php echo $rows2['physical_activity']; ?>">
                    </td>

                    <?php
                                } else {
                                ?>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="height">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="cweight">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="tweight">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="age">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="rthigh">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="lthigh">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="waist">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="bb">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="chest">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="calves">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="hips">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="food">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="cmedication">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="fooda">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="diseases">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="get_up_time">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="sleep_time">
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="physical_activity">
                    </td>

                    <?php
                                }

                                ?>

                    <td style="width: 120px;">
                        <select style="width: fit-content;" name="action" class="form-select form-select-md"
                            aria-label=".form-select-sm example">
                            <option value="edit">Edit</option>
                            <option value="generated">Form Verified</option>
                        </select>
                        <input style="width: fit-content ;margin-top: 10px;" type="submit" value="Update"
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