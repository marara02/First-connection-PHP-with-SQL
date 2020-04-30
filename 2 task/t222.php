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
    $cost = mysqli_real_escape_string($conn, $_REQUEST['cost']);
    if (isset($_POST['cost'])) {
        $sql = "UPDATE laba4 SET cost = '$cost' WHERE name = '$name' ";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
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
            <label for="name">Product name</label><br>
            <input name="name" id="title" placeholder="Product">
        </div>

        <div>
            <label for="cost">Cost</label><br>
            <input name="cost" id="cost" placeholder="Product Cost">
        </div>

        <button>Add</button>
    </form>
</div>
</body>
</html>