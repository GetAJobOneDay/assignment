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
    <p>
        <?php 
            if($q[0]["qcount"]!=0){
                $i=1;
                foreach($q as $ans){
                    echo "Answer #<b>$i</b><p>";
                    echo "<div class='ans'>";
                    echo $ans["adetail"]."</p>";
                    echo "BY <b>".$ans["aname"]."</b>";
                    echo "<br>";
                    $i++;    
                    echo "</div>";
                }
            }
        ?>
    </p>
    <hr>
    <lable>Answer this question: </lable>
    <br>
    <form method="POST" class="box" action="../public/answers.php">
        <textarea class="form-control" name="ans" placeholder="type your answer here..."></textarea>
        <br>
        <label for="ans_name">your name: </label>
        <p>
         <input type="text" name="ans_name">   
         <input type="hidden" name="qno" value="<?php echo $q[0]["qno"];?>">
        </p>
        <input type="submit" value="Submit">
        <input type="button" value="Cancel" onclick=window.location.href="questions.php">
    </form>
    </div>
</body>
</html>