<?php
include "db.php";

if (isset($_POST['submit'])) {

    $skill = $_POST['skill'];
    $level = $_POST['level'];

    $sql = "INSERT INTO skills(skill_name, skill_level)
            VALUES('$skill', '$level')";

    mysqli_query($conn, $sql);

    echo "Skill Saved!";
}
?>

<h2>Skills</h2>

<form method="POST">

    <input type="text" name="skill"
           placeholder="Skill Name" required><br><br>

    <input type="text" name="level"
           placeholder="Skill Level" required><br><br>

    <button type="submit" name="submit">Save</button>

</form>