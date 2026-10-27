<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(name, email, message)
            VALUES('$name', '$email', '$message')";

    mysqli_query($conn, $sql);

    echo "Message Saved Successfully!";
}
?>

<h2>Contact Form</h2>

<form method="POST">

    <input type="text" name="name" placeholder="Name" required><br><br>

    <input type="email" name="email" placeholder="Email" required><br><br>

    <textarea name="message" placeholder="Message" required></textarea><br><br>

    <button type="submit" name="submit">Send</button>

</form>