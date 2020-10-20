<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
?>
    <form action="../public/index.php?action=add" method="POST">
    <input type="hidden", name="name", value='<?php echo $_SESSION["user"]; ?>'>
    <br>
    <label>weight: </label>
    <input type="text", name="w">
    <br>
    <label>height: </label>
    <input type="text", name="h">
    <br>
    <input type="submit" value="Submit">
    </form>

</body>
</html>