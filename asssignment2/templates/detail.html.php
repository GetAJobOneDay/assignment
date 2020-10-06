<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <div class="container">
        <?php include "../templates/layout.html.php" ?>
    <h1>Question: <?php echo $q[0]["qtopic"];
     ?>
    </h1>
    <p class="topic">
        <?php echo $q[0]["qdetail"]; ?>
    </p>
    </div>
    
    
    <?php include "../templates/answer.html.php"; ?>
</body>
</html>