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
    $nodept = "";
    if (!empty($_REQUEST['nodept'])) {
        $nodept = $_REQUEST['nodept'];
    }
    if ($nodept == "true") {
    ?>
    <div class="alert alert-danger" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Department Not
            Found..............................................................
        </p>
    </div>
    <?php
    }
    ?>

    <img src="labour.jpg" alt="" style="width: 100%;opacity: .3;z-index: -1;position: absolute;height:120%">
    <div class="container my-4">
        <form id="myform1" action="labouraction.php" method="post" class="fw-bold">
            <div class="mb-3">
                <label for="input-group-text" class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Contact No</label>
                <input type="text" name="phone" class="form-control" aria-label="Sizing example input"
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
                <label for="input-group-text" class="form-label">Salary</label>
                <input type="text" name="salary" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Designations</label>
                <input type="text" name="designation" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Department ID</label>
                <input type="number" name="did" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Highest Qualification</label>
                <select name="hqualification" class="form-select form-select-md" aria-label=".form-select-sm example">
                    <option value="Middle">Middle</option>
                    <option value="Matric">Matric</option>
                    <option value="Inter">Inter</option>
                    <option value="Bachelor's">Bachelor's</option>
                </select>
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>