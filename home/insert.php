<?php

$con = new mysqli('localhost', 'root', '', 'homeDB');
if ($con) {
    echo "connection successfully setup ";
} else {
    echo (mysqli_error($con));
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];
    $address = $_POST['address'];

    $sql = "INSERT INTO basaTBL (name, email, education, phone,address) VALUES ('$name','$email','$education','$phone','$address') ";

    mysqli_query($con, $sql);
    echo "Success insert data";
}

// DELETE
$sql2 = "DELETE FROM basaTBL WHERE SN=1";
    if ($con->query($sql2) === TRUE) {
        echo "Record deleted Successfully";
    } else {
        echo "Error Delleting Record: " . $con->error;
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <table cellspacing="0" border="0" align="center" width="300">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone" id=""></td>
            </tr>
            <tr>
                <td>Education</td>
                <td><input type="text" name="education" id=""></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" id=""></td>
            </tr>
            <tr>
                <td> <input style="background-color: aquamarine;" type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <table  align="center" cellspacing="0" border="0">
    <tr>
                    <th scope="col">sl No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Education</th>
                    <th scope="col">Operation</th>
                </tr>
    <?php
                // connect to database
                $con = new mysqli('localhost', 'root', '', 'homeDB');
                echo "connection successfully setup ";

                $sql = "SELECT * FROM basaTBL";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $SN = $row['SN'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $education = $row['education'];
                        $address = $row['address'];
                        echo '<tr>
                    <th scope="row">' . $SN . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $address . '</td>
                    <td>' . $phone . '</td>
                    <td>' . $education . '</td>
                    <td>
                    <button type="button" class=""> <a href="modify.php?SN='.$SN.'" >Update</a></button>
                    <button type="button" class=""> <a href="delete.php?SN='.$SN.'" >Delete</a></button>
                </td>
                </tr> ';
                    }
                }

                ?>

    </table>

</body>

</html>