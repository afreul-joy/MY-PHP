<!DOCTYPE html>
<html>

<head>
    <title>Student Information</title>
</head>

<body>
    <h1>Student Information</h1>
    <form method="post" action="studentinfo.php">
        <label for="advisor">Advisor Name:</label>
        <input type="text" id="advisor" name="advisor" required>
        <br>
        <label for="semester">Pass Out Semester:</label>
        <input type="text" id="semester" name="semester" required>
        <br>
        <input type="submit" name="submit" value="Search">
    </form>

    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    /*
1. a. Utilize php code for a web page studentinfo. php that searches for student information
under a given advisor name and passes out semester, Assume that there is a provided page
with form where users can type info about advisor name and pass out semester to view
the full details of a particular student. Before searching, insert the data, given in the
following table[ Don't forget to design a user friendly form for this particular scenario)
    */

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve advisor and semester from the form
        $advisor = $_POST["advisor"];
        $semester = $_POST["semester"];

        // Prepare and execute the SQL query
        $sql = "SELECT * FROM students WHERE advisor = '$advisor' AND pass_out_semester = '$semester'";
        $result = $conn->query($sql);

        // Display the student information
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . "Advisor" . $row["advisor"] . "Pass-Out-Semester" . $row["pass_out_semester"];
            }
        } else {
            echo "No student found with the given criteria.";
        }
    }
    ?>

    <?php
/*
Utilize the PHP web seryice name. php that processes girl name data
similar to that seen in the Girl Names assignment. The service reports the
best (lowest) popularity ranking that name has ever held in the Social
Security data. Your service accepts a GET request parameter named
name. Now misert the girl's name and update data if needed and search the
data from the web pages.
(Note: Don't forget to design a user-friendly form for this particular
scenario).
*/
    if (isset($_GET['name'])) {
        $name = $_GET['name'];

        if ($lowestRanking) {
            echo '<p>The lowest popularity ranking for the name ' . $name . ' is ' . $lowestRanking . '</p>';
        } else {
            echo '<p>No data found for the name ' . $name . '</p>';
        }
    }
    ?>

    
</body>

</html>