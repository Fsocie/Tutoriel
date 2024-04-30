<?php
session_reset();
session_start();

// génération d'un token CSRF s'il n'existe pas
if(empty($_SESSION['csrf_token'])){
    $_SESSION['csrf_token']=bin2hex(random_bytes(32));
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    // vérification du token 
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('ehec de la vérification');
    }

    //connexion a la base de donnée

    $pdo= new PDO('mysql:host=localhost;dbname=blog','root','');
    $stmt=$pdo->prepare("INSERT INTO comments(username,comment) VALUES (:username, :comment)");

    //nettoyage des entrées pour eviter l'injection SQL et XSS

    $username=htmlspecialchars($_POST['username']);
    $comment=htmlspecialchars($_POST['comment']);

    //Insertion du commentaire dans la base 

    $stmt->execute(['username'=>$username, 'comment'=>$comment]);

    echo"Commentaire ajouté avec succès ";

    $stmt=$pdo->query("SELECT username, comment, created_at FROM comments ODER BY created_at DESC");
    while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
        echo"<p><strong>".htmlspecialchars($row['username'])."</strong>(".$row ['created_at'].")<br>".htmlspecialchars($row['comment'])."</p>";
    }
}

