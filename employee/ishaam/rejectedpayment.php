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
            include '../../home/navbar/navbarishaam.php';
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
            if ($submit == "false") {
            ?>
    <div class="alert alert-danger" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................Please try again................................
        </p>
    </div>
    <?php
            }
            if ($submit == "large") {
            ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ...............................Not Submitted / Image Size is greater than 1
            MB.................................
        </p>
    </div>
    <?php
            }
            if ($submit == "type") {
            ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ...............................Not Submitted / Please upload a ('jpg', 'png', 'jpeg',
            'gif') File.................................
        </p>
    </div>
    <?php
            }
            ?>

    <br>

    <h1 style=" margin: auto; width: fit-content; color: blue; ">Rejected Payments</h1>
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
                    <th scope="col ">Action</th>
                </tr>
            </thead>
            <?php
                    $query = "select * from payment_approvals where status='reject' and clienttype = 'Old' order by payment_date ";
                    $result = mysqli_query($conn, $query);
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
            <tr>
                <form id="myform" method="post" action="../../employee/ishaam/rejectedpaymentaction.php"
                    enctype="multipart/form-data">
                    <td style="width: 70px;">
                        <input name="apid" style="width: 50px; border: none;"
                            value="<?php echo $rows['approval_id']; ?>">
                    </td>
                    <td style="width: 70px;">
                        <input name="cid" style="width: 50px; border: none;" value="<?php echo $rows['client_id']; ?>">
                    </td>

                    <td style="width: 80px;">
                        <input style="width: 70px; border:none" name="amount" value=" <?php echo $rows['amount']; ?>">
                    </td>
                    <td style="width: 130px;">
                        <input style="width: 120px; border:none;" name="payment_date"
                            value=" <?php echo $rows['payment_date']; ?>">

                    </td>
                    <td style="width: 160px;">
                        <input style="width: 150px; border:none;" name="payment_method"
                            value="<?php echo $rows['payment_method']; ?>">
                    </td>
                    <td style="width: 170px;">
                        <input style="width: 160px; border:none;" name="purpose"
                            value="<?php echo $rows['purpose']; ?>">
                    </td>
                    <td style="width: 170px;">
                        <input style="width: 160px; border:none;" name="insta_id"
                            value="<?php echo $rows['insta_id']; ?>">
                    </td>
                    <td style="width: 70px;">
                        <input style="width: 50px; border:none;" name="client_type"
                            value="<?php echo $rows['clienttype']; ?>">
                    </td>
                    <td>

                        <img id="paymentslip" style="width: 250px; height: 250px"
                            src="../../paymentslips/<?php echo $rows['payment_slip'] ?>" />

                        <div>
                            <label style="margin-top: 30px;" for="input-group-text" class="form-label fw-bold">Upload
                                Payment Slip</label>
                            <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)">
                        </div>
                    </td>
                    <td style="width: 100px;">
                        <input style="width: 80px; border:none;" name="remarks" value="<?php echo $rows['remarks']; ?>">
                    </td>
                    <td style="width: 120px;">
                        <select style="width: fit-content;" name="action" class="form-select form-select-md"
                            aria-label=".form-select-sm example">
                            <option value="reject">Reject</option>
                            <option value="solve">Solved</option>
                        </select>
                        <input style="width: fit-content ;margin-top: 10px;" type="submit" value="Update"
                            class="btn btn-primary">
                    </td>
                    <script>
                    var loadFile = function(event) {
                        var image = document.getElementById("paymentslip");
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                    </script>
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