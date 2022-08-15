<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Diet Clinic</title>
</head>

<body>
    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\Admin\navbar2\navbar2.php';
    $emailexist = "";
    $submit = "";
    if (!empty($_REQUEST['email'])) {
        $emailexist = $_REQUEST['email'];
    }
    if (!empty($_REQUEST['submit'])) {
        $submit = $_REQUEST['submit'];
    }
    if ($emailexist == "true") {
    ?>
    <div class="alert alert-danger" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................email already in
            use..............................................................
        </p>
    </div>
    <?php
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
    ?>



    <img src="reg_img.jpg" style="position: absolute;z-index: -1; width: 100%; opacity: .3;height:260%;"
        alt="Image Here">

    <div class="container my-4">
        <h3
            style="text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">
            General Information</h3>
        <form id="myform1" method="post" action="rcaction.php">
            <div class="mb-3">
                <label for="input-group-text" class="form-label">First Name</label>
                <input type="text" required="required" name="fname" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Last Name</label>
                <input type="text" required="required" name="lname" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Address</label>
                <input type="text" required="required" name="address" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Contact Number</label>
                <input type="text" required="required" name="phone" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <h3
                style="text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">
                Client Credentials</h3>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" required="required" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" required="required" name="password" id="inputPassword5" class="form-control"
                    aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                    spaces, special characters, or emoji.
                </div>
            </div>

            <h3
                style="text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">
                Body Measurements</h3>

            <div class="mb-3">
                <label for="input-group-text" class="form-label">Height</label>
                <input type="number" required="required" step="0.1" name="height" class="form-control "
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Current Weight</label>
                <input type="number" required="required" name="cweight" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Target Weight</label>
                <input type="number" required="required" name="tweight" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Left Thigh</label>
                <input type="number" required="required" name="lthigh" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Right Thigh</label>
                <input type="number" required="required" name="rthigh" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Waist</label>
                <input type="number" required="required" name="waist" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Chest</label>
                <input type="number" required="required" name="chest" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Hips</label>
                <input type="number" required="required" name="hips" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <h3
                style="text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">
                Food Choices/Medical Issues</h3>

            <div class="mb-3">
                <label for="input-group-text" class="form-label">Food Choices</label>
                <input type="text" required="required" name="food" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Current Medication</label>
                <input type="text" required="required" name="cmed" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Food Allergies</label>
                <input type="text" required="required" name="fooda" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Diseases</label>
                <input type="text" required="required" name="diseases" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>



    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>