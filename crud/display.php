<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <button type="button" class="btn btn-primary"> <a href="user.php" class="text-light">Add Info</a></button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">sl No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // connect to database
                $con = new mysqli('localhost', 'root', '', 'crud_operation');
                echo "connection successfully setup ";

                $sql = "SELECT * FROM crud";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $SN = $row['SN'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $mobile = $row['mobie'];
                        echo '<tr>
                    <th scope="row">' . $SN . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $password . '</td>
                    <td>' . $mobile . '</td>
                    <td>
                    <button type="button" class="btn btn-secondary"> <a href="update.php?SN='.$SN.'" class="text-light">Update</a></button>
                    <button type="button" class="btn btn-danger"> <a href="delete.php?SN='.$SN.'" class="text-light">Delete</a></button>
                </td>
                </tr> ';
                    }
                }

                ?>

            </tbody>
        </table>

    </div>



</body>

</html>