<?php
$con = new mysqli('localhost', 'root', '', 'diu');
echo "connection successfully setup ";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    // Insert data into table
    $sql = "INSERT INTO student (name, email,city) VALUES ('$name', '$email','$city')";
    mysqli_query($con, $sql);
    echo "Successfully inserted";
}

$sql2 = "DELETE FROM student WHERE SN=1";
if ($con->query($sql2) === TRUE) {
    echo "Successfully deleted";
} else {
    echo "Failed to delete";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CLASS</title>
</head>

<body>
    <form action="" method="POST">
        Name : <input type="text" name="name">
        Email : <input type="text" name="email">
        City: <input type="text" name="city">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html