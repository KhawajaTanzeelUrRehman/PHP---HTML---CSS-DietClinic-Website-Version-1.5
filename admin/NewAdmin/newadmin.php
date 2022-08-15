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
            ..............................................................Admin registered
            successfully..............................................................
        </p>
    </div>
    <?php
    }
    ?>

    <img src="admin.png" style="position: absolute;z-index: -1;opacity: .2;width: 100%;height:100%;" alt="">
    <div class="container my-4">
        <h3
            style="text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">
            Admin Information</h3>
        <form id="myform1" action="adminaction.php" method="post">
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Admin Name</label>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label ">Gender</label>
                <select name="gender" class="form-select form-select-md" aria-label=".form-select-sm example">
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Contact Number</label>
                <input type="text" name="phone" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>

            <h3
                style="text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">
                Admin Credentials</h3>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" required="required" class="form-control login-form"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" required="required" name="password" id="inputPassword5"
                    class="form-control login-form" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                    spaces, special characters, or emoji.
                </div>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>

</body>

</html>