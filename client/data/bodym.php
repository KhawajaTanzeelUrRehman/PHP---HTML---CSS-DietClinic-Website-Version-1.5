<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-image: url('bg.jpg');">

    <div class="shadow">
        <table align="center" border="2px" style="width: 80%; line-height: 40px; border-radius: 6px;">
            <tr>
                <th colspan="8" bgcolor="black" style="color: white;">
                    <h1>Body Measurements</h1>
                </th>
            </tr>
            <t>
                <th style="color: white; background-color: rgb(12, 16, 54);">Height</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Current Weight</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Target Weight</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Right Thigh</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Left Thigh</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Hips</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Chest</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Waist</th>
            </t>
            <?php
            $query = "select * from body_measurements where client_id = '" . $_SESSION["id"] . "'";
            $result = mysqli_query($conn, $query);
            while ($rows = mysqli_fetch_array($result)) {
            ?>
            <tr style="background-color: rgb(219, 203, 240);">
                <td>
                    <?php echo $rows[1]; ?>
                </td>
                <td>
                    <?php echo $rows[2]; ?>
                </td>
                <td>
                    <?php echo $rows[8]; ?>
                </td>
                <td>
                    <?php echo $rows[3]; ?>
                </td>
                <td>
                    <?php echo $rows[4]; ?>
                </td>
                <td>
                    <?php echo $rows[5]; ?>
                </td>
                <td>
                    <?php echo $rows[6]; ?>
                </td>
                <td>
                    <?php echo $rows[7]; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>