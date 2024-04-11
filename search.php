<?php

if(isset($_GET['search'])){
    $search_term= htmlspecialchars($_GET['search']);
    $query="select".$search_term."where"
    echo"Resultats pour la recherce : ".$search_term;
}

?>