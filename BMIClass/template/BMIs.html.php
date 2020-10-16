<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        there are <?php echo $number ?> register with us
    </p>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>name</th>
            <th>weight</th>
            <th>height</th>
            <th>BMI</th>
        </tr>
        <?php 
        $i=1;
            foreach($allUser as $user){
                $name= $user["name"];
                $w= $user["weight"];
                $h= $user["height"];
                $bmi= $user["BMI"];
                echo "<tr><td>";
                echo "$i</td>";
                echo "<td>$name</td>";
                echo "<td>$w</td>";
                echo "<td>$h</td>";
                echo "<td>$bmi</td></tr>";
                $i++;
            }
        ?>
    </table>
    <footer>
        <?php 
                    include "../template/footer.html.php";
        ?>
    </footer>
</body>
</html>