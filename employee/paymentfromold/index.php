<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="appointment.css">
    <title>Diet Clinic</title>
</head>

<body>

    <?php

            include '../../home/navbar/navbarstaff.php';
            $submit = "";
            if (!empty($_REQUEST['submit'])) {
                $submit = $_REQUEST['submit'];
            }
            if ($submit == "true") {
            ?>
    <div class="alert alert-success" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Form Submitted
            Successfully..............................................................
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
            ?>

    <img src="payment.png" style="position: absolute;z-index: -1;opacity: .4;width: 100%;" alt="">
    <div class="container my-4">
        <form id="myform2" method="post" action="../../employee/paymentfromold/paymentfromold.php"
            enctype="multipart/form-data">

            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Client ID</label>
                <input type="text" name="cid" required="required" class="form-control "
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Amount</label>
                <input type="number" name="amount" required="required" class="form-control "
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Payment Date</label>
                <input type="date" name="date" required="required" class="form-control "
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Payment Method</label>
                <select name="payment_method" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value="EasyPaisa Mahnoor 03130822222">EasyPaisa Mahnoor 03130822222</option>
                    <option value="EasyPaisa Fazal Ur Rehman 03047104889">EasyPaisa Fazal Ur Rehman 03047104889</option>
                    <option value="EasyPaisa Sharjeel Ur Rehman 03240064220">EasyPaisa Sharjeel Ur Rehman 03240064220
                    </option>
                    <option value="EasyPaisa Zunaira Saif 03067009825">EasyPaisa Zunaira Saif 03067009825</option>
                    <option value="JazzCash Mahnoor 03060863022">JazzCash Mahnoor 03060863022</option>
                    <option value="JazzCash Fazal Ur Rehman 03047104889">JazzCash Fazal Ur Rehman 03047104889</option>
                    <option value="JazzCash Sharjeel Ur Rehman 03240064220">JazzCash Sharjeel Ur Rehman 03240064220
                    </option>
                    <option value="JazzCash Tanzeel Ur Rehman 03422330581">JazzCash Tanzeel Ur Rehman 03422330581
                    </option>
                    <option value="MBL Mahnoor 14050103758181">MBL Mahnoor 14050103758181</option>
                    <option value="MBL Tanzeel Ur Rehman 14050103569717">MBL Tanzeel Ur Rehman 14050103569717</option>
                    <option value="Other">Other</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Purpose</label>
                <select name="paymentpurpose" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value="Protein Powder">Protein Powder</option>
                    <option value="Capsules">Capsules</option>
                    <option value="15 Days Plan">15 Days Plan</option>
                    <option value="30 Days Plan">30 Days Plan</option>
                    <option value="60 Days Plan">60 Days Plan</option>
                    <option value="90 Days Plan">90 Days Plan</option>
                    <option value="120 Days Plan">120 Days Plan</option>
                    <option value="180 Days Plan">180 Days Plan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Upload Payment Slip</label>
                <input type="file" id="img" required="required" name="ps" accept="image/*" class="form-control "
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Remarks</label>
                <input type="text" name="remarks" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>

    </div>
    <?php
            include '../../home/navbar/footer.php';
            ?>
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