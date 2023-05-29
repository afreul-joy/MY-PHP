<?php
$con = new mysqli('localhost', 'root', '', 'finDB');
if ($con) {
    echo "connection successfully setup ";
} else {
    echo (mysqli_error($con));
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO finTBL (name, email, password, phone,address) VALUES ('$name','$email','$password','$phone','$address') ";

    mysqli_query($con, $sql);
    echo "Success insert data";

    //header("refresh:2, url=add.php");
}
// DELETE
$sql2 = "DELETE FROM finTBL WHERE SN=2";
    if ($con->query($sql2) === TRUE) {
        echo "Record deleted Successfully";
    } else {
        echo "Error Delleting Record: " . $con->error;
    }

// READ
// $sql3 = "SELECT * FROM finTBL";
// $result = mysqli_query($con, $sql3);
// // Process and display the retrieved data
//     if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "ID: " . $row["SN"] . "<br>";
//         echo "Name: " . $row["name"] . "<br>";
//         echo "Email: " . $row["email"] . "<br>";
//         echo "City: " . $row["city"] . "<br>";
//         echo "<br>";

//     }
//     } else {
//     echo "No records found";
//     }


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
    <form action="add.php" method="POST">
        <table align="center" cellspacing="0" border="0">
            <tr>
                <th>Name</th>
                <td> <input type="text" name="name"> </td>
            </tr>
            <tr>
                <th>Email</th>
                <td> <input type="text" name="email" id=""> </td>
            </tr>
            <tr>
                <th>Password</th>
                <td> <input type="text" name="password" id=""> </td>
            </tr>
            <tr>
                <th>Phone</th>
                <td> <input type="number" name="phone" id=""> </td>
            </tr>
            <tr>
                <th>Address</th>
                <td> <input type="text" name="address" id=""> </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="submit" id=""></td>
            </tr>

        </table>
    </form>

    <table  align="center" cellspacing="0" border="0">
    <tr>
                    <th scope="col">sl No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Operation</th>
                </tr>
    <?php
                // connect to database
                $con = new mysqli('localhost', 'root', '', 'finDB');
                echo "connection successfully setup ";

                $sql = "SELECT * FROM finTBL";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $SN = $row['SN'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $mobile = $row['phone'];
                        echo '<tr>
                    <th scope="row">' . $SN . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $password . '</td>
                    <td>' . $mobile . '</td>
                    <td>
                    <button type="button" class=""> <a href="edit.php?SN='.$SN.'" >Update</a></button>
                    <button type="button" class=""> <a href="delete.php?SN='.$SN.'" >Delete</a></button>
                </td>
                </tr> ';
                    }
                }

                ?>

    </table>
</body>

</html>