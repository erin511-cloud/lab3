<?php
include "db.php";

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO about(title, description)
            VALUES('$title', '$description')";

    mysqli_query($conn, $sql);

    echo "About Saved!";
}
?>

<h2>About</h2>

<form method="POST">

    <input type="text" name="title" placeholder="Title" required><br><br>

    <textarea name="description"
              placeholder="About Description"
              required></textarea><br><br>

    <button type="submit" name="submit">Save</button>

</form>