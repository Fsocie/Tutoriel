
<?php

session_start();

//Génération d'un token CSRF

if(empty($_SESSION['csrf_token'])){

    $_SESSION['csrf_token']= bin2hex(random_bytes(32));

}

//verification du token CSRF
if(isset($_POST['submit'])){
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('ehec de la vérification');
    }else{
        echo"requete valide";
    }
}

?>

<form method="post">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    <input type="submit" name="submit">

</form>>