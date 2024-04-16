<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $destination = $_POST["destination"];
    $cost = $_POST["cost"];

    // Store booking details in session or database for further processing
    $_SESSION["booking_details"] = array(
        "name" => $name,
        "email" => $email,
        "number" => $number,
        "destination" => $destination,
        "cost" => $cost
    );

    // Redirect to ticket page with booking details
    header("Location: ticket.php");
    exit;
} else {
    // If form is not submitted, redirect to booking page
    header("Location: booking.php");
    exit;
}
?>
