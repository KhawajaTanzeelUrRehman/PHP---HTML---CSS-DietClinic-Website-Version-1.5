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
                <th colspan="6" bgcolor="black" style="color: white;">
                    <h1>Professional Staff</h1>
                </th>
            </tr>
            <t>
                <th style="color: white; background-color: rgb(12, 16, 54);">First Name</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Last Name</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Gender</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Fee</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Phone</th>
                <th style="color: white; background-color: rgb(12, 16, 54);">Qualification</th>
            </t>
            <?php
            $query = "select * from available_staff";
            $result = mysqli_query($conn, $query);
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
            <tr style="background-color: rgb(219, 203, 240);">
                <td>
                    <?php echo $rows['first_name']; ?>
                </td>
                <td>
                    <?php echo $rows['last_name']; ?>
                </td>
                <td>
                    <?php echo $rows['gender']; ?>
                </td>
                <td>
                    <?php echo $rows['charges_per_visit']; ?>
                </td>
                <td>
                    <?php echo $rows['phone']; ?>
                </td>
                <td>
                    <?php echo $rows['qualification']; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>