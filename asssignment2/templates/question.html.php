<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <?php include "../templates/layout.html.php" ?>
    <form action="../public/add_question.php" method="POST">
       <label for="topic">Topic name:</label>
        <input class="form-control" type="text" name="topic">
        <br>
        <label for="detail">Topic detail</label>
        <textarea class="form-control" type="text" name="detail"></textarea>
        <br>
        <label for="name">your name:</label>
        <input class="form-control" type="text" name="name">
        <br>
        <input class="btn btn-primary" type="submit" value="Submit"> 
        <input class="btn btn-danger" type="button" value="cancel" onclick=window.location.href="../public/index.php">
    </form> 
    </div>
    
    
</body>
</html>