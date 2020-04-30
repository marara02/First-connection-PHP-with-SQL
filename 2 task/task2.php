<!DOCTYPE html>
<html>
<head>
    <style>
 table{
     text-align: center;
     vertical-align: middle;
     margin:0;
        }
        button{
            float:right;
        }
    </style>
</head>
<button><a href ="task2C.php">Admin</a></button>
</html>
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

$sql = "SELECT id, name, cost FROM laba4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table border=\'1px\', cellpadding=\'7px\',text-align = center;>';
    while($row = $result->fetch_assoc()) {
        echo "<tr style = 'background-color:orange;'><td>". $row["id"]. "</td><td>". $row["name"]."</td><td> " . $row["cost"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

