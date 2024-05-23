<?php
if (isset($_POST['submit'])) {
    $to = "your-email@example.com"; // Specify your email address here
    $subject = "Wedding Dinner Request";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $main_course = $_POST['main-course'];
    $side_dish = $_POST['side-dish'];
    $dessert = $_POST['dessert'];

    $message = "Name: $name\nEmail: $email\nMain Course: $main_course\nSide Dish: $side_dish\nDessert: $dessert\n";

    // Send the email
    mail($to, $subject, $message);

    // Redirect the user to a thank-you page
    header("Location: thank_you.html");
    exit;
}
?>