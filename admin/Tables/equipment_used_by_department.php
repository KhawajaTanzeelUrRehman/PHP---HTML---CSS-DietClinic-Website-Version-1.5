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
                    <h1>Equipment Used by Department</h1>
                </th>
            </tr>
            <t>
                <th style="color: white; background-color: rgb(12, 16, 54);">Department Name</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Contact Info</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Equipment Name</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Equipment Category</th>
            </t>
            <?php
            $query = "select * from equipments_usedby_department";
            $result = mysqli_query($conn, $query);
            while ($rows = mysqli_fetch_array($result)) {
            ?>
            <tr style="background-color: rgb(219, 203, 240);">
                <td>
                    <?php echo $rows[0]; ?>
                </td>
                <td>
                    <?php echo $rows[1]; ?>
                </td>
                <td>
                    <?php echo $rows[2]; ?>
                </td>
                <td>
                    <?php echo $rows[3]; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>