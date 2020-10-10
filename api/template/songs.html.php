<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>All songs that we have</h2>
    <?php
        foreach($response as $song){
            $i=$song["songname"];
            echo "$i<br>";
        }
    ?>
</body>
</html>