<?php
$con = new mysqli('localhost', 'root', '', 'crud_operation');

    echo "DB connection successfully setup ";


if(isset($_GET['SN'])) {
    $SN= $_GET['SN'];

    $sql = "DELETE FROM crud WHERE SN =$SN";
    mysqli_query($con,$sql);
    echo "Success delete";

}
