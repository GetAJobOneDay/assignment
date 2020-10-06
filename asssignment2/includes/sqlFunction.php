<?php
    function add_q($pdo,$query){
        $arg = "insert into question(qno,qtopic,qdetail,qname,qcount) values(:qno,:qtopic,:qdetail,:qname,:qcount)";
        $pdo->prepare($arg)->execute($query);
    }
    function show_q($pdo){
        $args = "select qtopic,qname,qcount,qno from question";
        return $pdo->query($args)->fetchAll(PDO::FETCH_ASSOC);
    }
    function select_q($pdo,$query){
        $arg = "select *
        from question 
        left join answer on  answer.ano=question.qno 
        where question.qno=";
        return $pdo->query($arg.$query)->fetchAll(PDO::FETCH_ASSOC);
    }
    function insert_ans($pdo,$query){
        $arg = "insert into answer(aqno,ano,adetail,aname) values(:aqno,:ano,:adetail,:aname)";
        $pdo->prepare($arg)->execute($query);
        $arg = "update question set qcount=qcount+1 where qno=:ano";
        $update = array("ano"=>$query["ano"]);
        $pdo->prepare($arg)->execute($update);
    }
?>