<?php

$con = new mysqli('localhost', 'root', '', 'crud_operation');
if ($con) {
    echo "connection successfully setup ";
} else {
    echo (mysqli_error($con));
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobie = $_POST['mobie'];

    $sql = "INSERT INTO crud (name, email, password, mobie) VALUES ('$name','$email','$password','$mobie') ";

    mysqli_query($con,$sql);
    echo "Success insert data";

    header("refresh:2, url=user.php");
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
        <table align="center" border="0" cellspacing="0">
            <tr>
                <td>Name</td>
                <td> <input type="text" name="name" id=""> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> <input type="text" name="email" id=""> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td> <input type="text" name="password" id=""> </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td> <input type="number" name="mobie" id=""> </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="submit" id=""> </td>
            </tr>
        </table>
    </form>


</body>

</html>