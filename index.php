<?php
         
/*$notes1 =[10,20]; declaration de tableau  avec les crochets [] 
echo $notes[0];
$notes= array(10,20); declaration de tableau avec array 
echo $notes;
*/
/*$eleve = [
    'nom' => 'Doe', 
    'prenom'=>'Marc', 
    "notes" =>[10,20,15] 
];
$eleve['prenom']='jean';

$eleve[]='CM2-A';

print_r($eleve);*/

/*
$classe= [
    [
        'nom' => 'Doe', 
        'prenom'=>'Jean',  // index 0 
        "notes" =>[10,20,15]
    ],
    
    [
        'nom' => 'Doe', 
        'prenom'=>'Marc',    // index 1 *
        "notes" =>[12,15,17] 
    ]

    ]; 

    echo $classe[0]['notes'][1];
    */

   /* $note =  (int)readline("entrez votre note action  : (1: attaquer , 2: defendre,  3: passer");

     if( $action === 1 ) {

       
          echo"j'attaque"; 


     }elseif ($action === 2){

         echo" je défends";
     }
     
     
     else{

         echo"Passer donc v";
     }


     switch($asction) {

     case 1 : echo " j'attaque";
      break;
     case 2: echo " je défends ";
     break;
     case 3: echo" je passe";
     break;

     default: 
     echo"commande inconnu";
     }
     $heure=18;


     if((9 < $heure && $heure<12) OU (14< $heure && $heure<17)){
         echo" la boutique est ouverte";
     }else {
         echo" la boutique est fermé"
     }
     */
/*
     VRAI && VRAI = VRAI 
     VRAI && FAUX = FAUX
     FAUX && FAUX = FAUX


     VRAI OU VRAI = VRAI
     VRAI OU FAUX = VRAI
     FAUX OU FAUX = FAUX 


     $chiffre =null;

     while($chiffre !==10){

            $chiffre = (int)readline('entrez une heure');
            break;

     }

     */
    

     $notes= [ 10, 15, 16, 17, 18];

     $eleves = [

        'cm2'=> ['Jean', 'Marc', 'Jane', 'Marion'],
        'cm1'=> [' Emilie', 'Margot']


        
     ];

   //  for($i = 0; $i<3; $i++){
  //       echo '-' .$notes[$i];
  //   }


     // La classe CM2
         // jean 
         // MArc 
     // La classe CM1
        // Emilie 
        // Margot    

   //  echo'bravo vous avez gagné!'

   foreach( $eleves as $classe => $listEleves){

    echo " la classe $classe <br>";

        foreach ($listEleves as $eleve){
            echo " - $eleve <br>";
        }
   

}

 $nom_de_fonction($param1, $param2)


   function CalculSomme($Variable1, $variable2){
 
    $sresulats=$variable2 + $Variable1
    return $sresulats

 }

 function produit($param1){

    $resultat= $param1*2;

   return echo " le double du nombre que vous m'aviez donné est" $resultat;

    
 }


 produit(10);

?>
