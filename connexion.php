<?php
//connnexion à la base de données

$pdo= new PDO('mysql:host=localhost;dbname=hotel_booking','root','');
$email="corneluxsociety@gmail.com";

//preparation de la requete pour eviter l'injection sql

$stmt=$pdo->prepare("SELECT * FROM clients where email= :email ");
$stmt->execute(['email'=>$email]);
$client=$stmt->fetch();


// verification du client 

if($client){

}else{
    echo"utilisateur non trouvé";
}