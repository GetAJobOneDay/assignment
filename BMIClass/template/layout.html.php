<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>Document</title>
</head>
<body>
    <nav>
    <a href='index.php?action=home'>Home</a>
    |<a href='index.php?action=list'>Jokes List</a> 
    <?php
        session_start();
        if(isset($_SESSION["auth"])){
            echo "|<a href='index.php?action=add'>Add a new Joke</a>
            ||<a href='index.php?action=logout'>Logout</a>";
        }else{
            echo "|<a href='index.php?action=register'>register</a>
            |<a href='index.php?action=login'>login</a>";
        }
    ?>

    </nav>
</body>
</html>