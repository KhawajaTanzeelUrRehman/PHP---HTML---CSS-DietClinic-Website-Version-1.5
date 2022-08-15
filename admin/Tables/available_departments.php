<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Clinic</title>
</head>

<body style="background-image: url('bg.jpg');">

    <div class="shadow">
        <table align="center" border="2px" style="width: 80%; line-height: 40px; border-radius: 6px;">
            <tr>
                <th colspan="4" bgcolor="black" style="color: white;">
                    <h2>Available Department</h2>
                </th>
            </tr>
            <t>
                <th style="color: white; background-color: rgb(12, 16, 54);">Department Name</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Contact Info</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Details</th>
            </t>
            <?php
            $query = "select * from available_departments";
            $result = mysqli_query($conn, $query);
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
            <tr style="background-color: rgb(219, 203, 240);">
                <td>
                    <?php echo $rows['name']; ?>
                </td>
                <td>
                    <?php echo $rows['number']; ?>
                </td>
                <td>
                    <?php echo $rows['description']; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>