<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check it</title>
    <style>
        body {
            background-image: linear-gradient(to right, #89f7fe, #66a6ff);
            background-size: cover;
        }
        form{
            text-align: center;
            margin-top:50px;
        }
    </style>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" name="name" placeholder="Username"><br><br>
    <input type="text" name="password" placeholder="Password"><br>
    <input type="submit" value="Log in">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (($_POST["name"] == "Master") && $_POST["password"] == "12345") {
        echo "Welcome,Master!";
        echo '<br>';
        echo '<a href ="task2cont.php">Click here to add products</a>';
        echo '<br>';
        echo '<a href ="t222.php">Click here to update products</a>';
    } else {
        echo 'Try again!';
    }
}
?>
</body>
</html>