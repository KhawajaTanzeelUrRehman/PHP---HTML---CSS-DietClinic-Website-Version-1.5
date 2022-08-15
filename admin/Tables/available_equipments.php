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
                    <h2>Available Equipments</h2>
                </th>
            </tr>
            <?php
            $query = "select * from available_equipment";
            $result = mysqli_query($conn, $query);
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
            <tr style="background-color: rgb(219, 203, 240);">
                <td>
                    <?php echo $rows['name']; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>