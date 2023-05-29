<?php
$con = new mysqli('localhost', 'root', '', 'finDB');
if ($con) {
    echo "connection successfully setup ";
} else {
    echo (mysqli_error($con));
}
$SN = $_GET['SN'];// get id 
echo "$SN";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // for update set set SN=SN and where SN=SN 
    $sql = "UPDATE finTBL set SN=$SN,name='$name',email='$email', password='$password',phone='$phone',address= '$address'
    where SN=$SN ";

    mysqli_query($con, $sql);
    echo "update successfully";
   // header("refresh:2, url=user.php");
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
</body>

</html>