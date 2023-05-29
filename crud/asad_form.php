<?php 

if(isset($_GET['name']) && $_GET['password']){
    $name = $_GET['name'];
    echo "<br/>";
    $password = $_GET['password'];

    if($name =='jon'&& $password =='123') {
        echo"login successfully $name $password ";
    } else {
        echo "login failed";
    }
}
?>


<!DOCTYPE HTML>
<html>  
<body>

<form action="" method="GET">
Name: <input type="text" name="name"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>

</body>
</html>