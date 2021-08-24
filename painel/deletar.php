<?php
    if(isset($_POST['id_membro'])){
        $pdo = new PDO('mysql:host=localhost;dbname=portfolio_projeto','root',''); 
        $sql = $pdo->prepare("DELETE FROM `td_equipe` WHERE id = ?");
        $sql->execute(array($_POST['id_membro']));
    }
?>