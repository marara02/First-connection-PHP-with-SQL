<?php
$db_host = "localhost";
$db_name = "labaa4";
$db_user = "sol4";
$db_pass = "123456";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully.";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $major = mysqli_real_escape_string($conn, $_REQUEST['major']);
    $hobbies = mysqli_real_escape_string($conn, $_REQUEST['hobbies']);
    $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
    $sql = "INSERT INTO firstone (name, major, hobbies, age) VALUES ('$name', '$major', '$hobbies', '$age')";
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .main{
            margin-left:auto;
            text-align: center;
        }
    </style>
</head>
<body>
<div class ="main">
    <form method="post">
        <div>
            <label for="name">Name</label><br>
            <input name="name" id="title" placeholder="Your name">
        </div>
<br>
        <div>
            <label for="major">Your Major</label><br>
            <input name="major" id="major" placeholder="Your major">
        </div>
<br>
        <div>
            <label for="hobbies">Your hobbies</label><br>
            <input name="hobbies" id="hobbies" placeholder="Your hobbies">
        </div>
<br>
        <div>
            <label for="major">Your Age</label><br>
            <input type ="number" name="age" id="age" placeholder="Your age">
        </div>
        <br>
        <button>Add</button>
    </form>
    <button><a href = "f2.php">Update</a></button>
    <br><br><br>
    <button><a href = "f3.php">Delete</a></button>
</div>
</body>
</html>


