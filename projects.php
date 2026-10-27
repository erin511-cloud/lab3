<?php
include "db.php";

if (isset($_POST['submit'])) {

    $project = $_POST['project'];
    $description = $_POST['description'];

    $sql = "INSERT INTO projects(project_name, description)
            VALUES('$project', '$description')";

    mysqli_query($conn, $sql);

    echo "Project Saved!";
}
?>

<h2>Projects</h2>

<form method="POST">

    <input type="text" name="project"
           placeholder="Project Name" required><br><br>

    <textarea name="description"
              placeholder="Project Description"
              required></textarea><br><br>

    <button type="submit" name="submit">Save</button>

</form>