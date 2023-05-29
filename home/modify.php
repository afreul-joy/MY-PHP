<?php
$con = new mysqli('localhost', 'root', '', 'homeDB');
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
    $education = $_POST['education'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // for update set set SN=SN and where SN=SN 
    $sql = "UPDATE basaTBL set SN=$SN,name='$name',email='$email', education='$education',phone='$phone',address= '$address'
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
</body>

</html>