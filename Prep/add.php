<!DOCTYPE HTML>

<html>

<head>
    <title>Exam add </title>
</head>

<style>
    .tbl {
        background-color: gray;
        padding: 10px;
        color: black;
        font-size: 18px;
        height: 200px;
    }

    .btn {
        background-color: green;
        font-weight: bold;
        padding: 5px;
        width: 100%;
    }
</style>

<body>

    <form action="#" method="POST">
        <table class="tbl" cellspacing='0' align="center">
            <tr class="tbl-rw">
                <td>
                    name : <input type="text" name="name" />
                </td>
            </tr>
            <tr>
                <td>
                    email: <input type="text" name="email" />
                </td>
            </tr>
            <tr>
                <td>
                    phone : <input type="number" name="phone" />
                </td>
            </tr>
            <tr>
                <td><input class="btn" type="submit" name="submit"></td>
            </tr>
        </table>

    </form>
</body>

</html>

<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'DIUDB';
$con = mysqli_connect($host, $user, $password, $dbname);

//CREATE
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO studentTBL(name,email,phone) VALUES ('$name','$email','$phone')";
    mysqli_query($con, $sql);
    echo "successfully inserted";
}

// update 
$ID = $_GET['ID']; // get id 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // for update set set SN=SN and where SN=SN 
    $sql = "UPDATE studentTBL
            set ID=$ID,name='$name',email='$email', 
        where ID=$ID ";

    mysqli_query($con, $sql);
    echo "update successfully";
}

if (isset($_GET['ID'])) {
    $SN = $_GET['ID'];

    $sql = "DELETE FROM studentTBL WHERE ID =$ID";
    mysqli_query($con, $sql);
    echo "Success delete";
}

// READ
$sql = "SELECT  id, name, phone, FROM studentTBL";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . "name: " . $row["name"] . "phone " . $row["phone"] . "<br>";
    }
} else {
    echo "0 results";
}

?>

<?php
// ASAD SIR
if (isset($_GET['name']) && $_GET['password']) {
    $name = $_GET['name'];
    echo "<br/>";
    $password = $_GET['password'];

    if ($name == 'jon' && $password == '123') {
        echo "login successfully $name $password ";
    } else {
        echo "login failed";
    }
}
?>