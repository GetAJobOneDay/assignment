<?php
    include "../includes/databaseConnection.php";
    $all_q = show_q($pdo);
    include "../templates/all_question.html.php";
?>