<?php
$db_host = "localhost";
$db_name = "myydatabase";
$db_user = "myydatabase_admin";
$db_pass = "123456";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully.";}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        input[type=text],input[type = datetime-local]{
            vertical-align: middle;
        }
    </style>
</head>
<form method="post">
    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title">
    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"></textarea>
    </div>

    <div>
        <label for="published_at">Publication date and time</label>
        <input type="datetime-local" id="published_at" name="published_at">
    </div>

    <button>Add</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    if (empty($title)) {
        echo "Title cannot be empty!";
        return;
    }

    $sql = "INSERT INTO article (title, content,published_at) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $title, $content, $published_at);
    $results = $stmt->execute();

    if ($results === false) {
        echo $stmt->error;
    } else {

        $id = $stmt->insert_id;
        echo "Inserted record with ID: $id";
    }

    $stmt->close();

    /*if (isset($_POST['content'])) {
        $sql = "UPDATE article SET content = '$content' WHERE title = '$title' ";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();*/

    if(isset($_POST['content'])){
        $sql ="DELETE FROM article SET content WHERE title = '$title'";
    }
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();

    ?>