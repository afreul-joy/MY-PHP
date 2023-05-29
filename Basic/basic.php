
    <?php
    $txt = "Hello world!";
    $x = 5;
    $y = 10;
    $result = $x + $y;

    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo "result is - $result";
    echo "<br>";

    // Odd number printing if else statement
    $num1 = 1;
    echo $num1;
    echo "<br>";

    if ($num1 % 2 == 0) {
        echo "Event number";
    } else {
        echo "Odd Number";
    }

    // Result printing
    $num1 = 95;
    echo "<br>";
    echo "Number is : $num1";
    echo "<br>";

    if ($num1 > 80) {
        echo "A+";
    } else if ($num1 > 75) {
        echo "A-";
    } else if ($num1 > 77) {
        echo "A";
    }
    echo "<br>";
    echo date("Y-m-d H:i:s");
    // Loop through
    $x = 0;
    while ($x <= 10) {
        echo "The number is: $x <br>";
        $x++;
    }
    // Loop with condition print even number only 
    for ($x = 0; $x <= 10; $x++) {
        if ($x % 2 == 0) {
            echo "Even Number is: $x <br>";
        }
    }
    // multiplication table
    $num = 5;
    for ($i = 1; $i <= 10; $i++) {
        $product = $i * $num;
        echo "$num * $i = $product";
        echo '<br>';
    }
    // function 
    function square($number)
    {
        return $number * $number;
    }
    $number = 4;
    echo square($number);
    echo '<br>';

    // Array
    $cars = array("Oneplus", "Iphone", "Samsung");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>



