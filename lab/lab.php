<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'lab';

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $sql = "INSERT INTO student1 (name, email, mobile, city) values('$name', '$email', '$mobile', '$city')";
    mysqli_query($conn, $sql);
    echo "Record successfully";
}

$sql2 = "DELETE FROM student1 WHERE ID=2";
if ($conn->query($sql2) === TRUE) {
    echo "Record deleted Successfully";
} else {
    echo "Error Delleting Record: " . $conn->error;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>
    <h2></h2>
    <form action="#" method="POST">

        <p>
            <label>Username : <input type="text" name="name" /></label>
        </p>

        <p>
            <label>Email : <input type="text" name="email" /></label>
        </p>

        <p>
            <label>Mobile : <input type="text" name="mobile" /></label>
        </p>

        <p>
            <label>City : <input type="text" name="city" /></label>
        </p>

        <p>
            <button type="submit" name="submit">Submit</button>
        </p>

    </form>
</body>

</html>