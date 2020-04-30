<?php

$db_host = "localhost";
$db_name = "myydatabase";
$db_user = "myydatabase_admin";
$db_pass = "123456";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
    </style>
</head>
<form method="post">
    <div>
        <label for="First_name">First_name</label>
        <input name="First_name" id="First_name" placeholder="First_name">
    </div>

    <div>
        <label for="Book_title">Book</label>
        <textarea name="Book_title" rows="4" cols="40" id="content" placeholder="Article content"></textarea>
    </div>
    <button>Add</button>
</form>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $First_name = $_POST['First_name'];
    $Book_title = $_POST['Book_title'];
    if (empty($First_name)) {
        echo "Name cannot be empty!";
        return;
    }
    $sql = "INSERT INTO task_1 (First_name, Book_title) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss",$First_name, $Book_title);
    $results = $stmt->execute();
    if ($results === false) {
        echo $stmt->error;
    } else {

        $id = $stmt->insert_id;
        echo "Inserted record with ID: $id";
    }

    $stmt->close();
}
?>
