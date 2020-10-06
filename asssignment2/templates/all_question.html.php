<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "../templates/layout.html.php" ?>
    <div class="container">
        <h1>All topics</h1>
       <?php
        foreach($all_q as $row){
            $topic =$row["qtopic"];
            $user = $row["qname"];
            $count = $row["qcount"];
            $id = $row["qno"];
            echo "<hr><b><a href='details.php?id=$id'>$topic</a></b>";
            echo "&nbsp;&nbsp;by $user";
            echo "($count) <hr><br>";
        }
    ?>  
    </div>
    
   
</body>
</html>