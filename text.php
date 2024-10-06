<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["Name"];
    $phone = $_POST["Phone No."];
    $email = $_POST["E-Mail"];
    $pinCode = $_POST["City Pin Code"];
    $tagline = $_POST["tagline"];
    $color = $_POST["color"];
    $size = $_POST["size"];
    $quantity = $_POST["quantity"];
    $deliveryDate = $_POST["delivery-date"];
    $deliveryAddress = $_POST["delivery-Address"];

    // Perform server-side validation if needed

    // Generate a receipt
    $receipt = "Receipt\n\n";
    $receipt .= "Name: " . $name . "\n";
    $receipt .= "Phone No.: " . $phone . "\n";
    $receipt .= "Email: " . $email . "\n";
    $receipt .= "City Pin Code: " . $pinCode . "\n";
    $receipt .= "Tagline: " . $tagline . "\n";
    $receipt .= "Color: " . $color . "\n";
    $receipt .= "Size: " . $size . "\n";
    $receipt .= "Quantity: " . $quantity . "\n";
    $receipt .= "Delivery Date: " . $deliveryDate . "\n";
    $receipt .= "Delivery Address: " . $deliveryAddress . "\n";
    $receipt .= "Order Date: " . date("Y-m-d H:i:s"); // Current date and time

    // Send the receipt back to the client
    echo $receipt;
} else {
    // Redirect to the form page if accessed directly
    header("Location: index.html");
}
?>
