<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "laylay.html.php";
    ?>
<form action="../public/index.php?action=login" method="POST">
<label for="email">Your email address</label>
<input name="email" id="email" type="text">
<label for="password">Password</label>
<input name="password" id="password" type="password">
<input type="submit" name="submit" value="LOGIN">
</form>
</body>
</html>