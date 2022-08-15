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

    <title>Diet Clinic</title>
</head>

<body>
    <?php
            ?>


    <div class="container my-4">
        <h3
            style="text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">
            BASIC INFO</h3>
        <form id="myform1" method="post" action="../../client/basicinfo/basicinfo.php">
            <div class="mb-3">
                <label for="input-group-text" class="form-label">First Name *</label>
                <input type="text" required="required" name="fname" value="<?php if (isset($_SESSION["fname"])) {
                                                                                        echo $_SESSION["fname"];
                                                                                    }  ?>" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Last Name</label>
                <input type="text" name="lname" value="<?php if (isset($_SESSION["lname"])) {
                                                                    echo $_SESSION["lname"];
                                                                }  ?>" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Gender *</label>
                <select name="gender" required="required" value="<?php if (isset($_SESSION["gender"])) {
                                                                                echo $_SESSION["gender"];
                                                                            }  ?>" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label id="#contact" for="input-group-text" class="form-label">Contact Number</label>
                <input readonly type="text" name="phone" value="<?php if (isset($_SESSION["phone"])) {
                                                                            echo $_SESSION["phone"];
                                                                        }  ?>" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label id="#insta" for="input-group-text" class="form-label">Insta Id</label>
                <input readonly type="text" name="iid" value="<?php if (isset($_SESSION["iid"])) {
                                                                            echo $_SESSION["iid"];
                                                                        }  ?>" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Address</label>
                <input type="text" name="address" value="<?php if (isset($_SESSION["address"])) {
                                                                        echo $_SESSION["address"];
                                                                    }  ?>" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">City</label>
                <input type="text" name="city" value="<?php if (isset($_SESSION["city"])) {
                                                                    echo $_SESSION["city"];
                                                                }  ?>" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Profession</label>
                <input type="text" name="profession" value="<?php if (isset($_SESSION["profession"])) {
                                                                        echo $_SESSION["profession"];
                                                                    }  ?>" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Comment</label>
                <input type="text" name="comment" value="<?php if (isset($_SESSION["comment"])) {
                                                                        echo $_SESSION["comment"];
                                                                    }  ?>" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


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