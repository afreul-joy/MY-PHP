<!DOCTYPE html>
<html>
<head>
  <title>Order Form</title>
</head>
<body>
  <h1>Order Form</h1>
  <form method="POST" action="process_order.php">
    <label for="category1">Category 1:</label>
    <select name="category1" id="category1">
      <option value="">Select a product</option>
      <option value="Product 1">Product 1</option>
      <option value="Product 2">Product 2</option>
      <option value="Product 3">Product 3</option>
    </select><br>

    <label for="category2">Category 2:</label>
    <select name="category2" id="category2">
      <option value="">Select a product</option>
      <option value="Product 4">Product 4</option>
      <option value="Product 5">Product 5</option>
      <option value="Product 6">Product 6</option>
    </select><br>

    <label for="search">Search:</label>
    <input type="text" name="search" id="search"><br>

    <input type="submit" value="Place Order">
  </form>
</body>
</html>

<?php
/*
Utilize the PHP code that would be saved in the database to process the
order form. The user can order two categories products at a time. You
should display the ordered products list. Your code should also compute the
total cost of the order and shipping cost added to the order .The user can
search from the webpages to the order. If the order is done, also print a
"Thank you for your order!" message at the bottom of your output.
(Note: Don't forget to design a user-friendly form for this particular
scenario). 
*/

if (isset($_POST['submit'])) {
    $category1Quantity = $_POST['category1'];
    $category2Quantity = $_POST['category2'];
    $search = $_POST['search'];

    echo "<h2>Search Results:</h2>";
    
    // Calculate the total cost for each category
    $category1Price = 10.99; // Replace with the actual price for category 1
    $category2Price = 15.99; // Replace with the actual price for category 2
    
    $category1Total = $category1Price * $category1Quantity;
    $category2Total = $category2Price * $category2Quantity;
    
    // Calculate the total order cost
    $totalCost = $category1Total + $category2Total;
    
    // Calculate the shipping cost (example: $5.99 per order)
    $shippingCost = 5.99;
    
    // Display the ordered products list and total cost
    echo '<h2>Ordered Products:</h2>';
    echo '<table>';
    echo '<tr><th>Category</th><th>Quantity</th><th>Cost</th></tr>';
    echo '<tr><td>Category 1</td><td>' . $category1Quantity . '</td><td>$' . $category1Total . '</td></tr>';
    echo '<tr><td>Category 2</td><td>' . $category2Quantity . '</td><td>$' . $category2Total . '</td></tr>';
    echo '<tr class="total"><td colspan="2">Total Cost:</td><td>$' . $totalCost . '</td></tr>';
    echo '</table>';
    
    // Add shipping cost to the total
    $totalCost += $shippingCost;
    
    // Display the total cost with shipping
    echo '<p class="total">Total Cost (including shipping): $' . $totalCost . '</p>';
    
    // Display the "Thank you for your order!" message
    echo '<p class="message">Thank you for your order!</p>';
}
?>