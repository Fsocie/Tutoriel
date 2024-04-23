<?php

$nom = trim($_POST['nom']); // la fonction trim ici  supprime des espaces inutiles 

if(isset($nom)){ // verification si le champ soumis n'est pas vide 

  if(strlen($nom)>0 && strlen($nom)<=50){ //  verification de la longueur du nom

      echo"le nom est valide";
  }else{
      echo" Le nom n'est pas valide ou est trop long";
  }
}else {

    echo"le champ est vide ";
}


$email = $_POST['email'];

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo " l'adresse email est valide";
}else {
    echo"l'adresse email n'est pas valide";
}

//$telephone = "06-12-34-56-75";
//if(preg_match("/^0[1-9](-[0-9]{2}{4}$/", $telephone))‘

$age= $_POST['age'];

if(filter_var($age, FILTER_VALIDATE_INT)!== false ){
    echo " l'age est valide.";
}else{
    echo " l'age n'est pas valide";
}

?>
