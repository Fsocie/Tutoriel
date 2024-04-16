
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="search.php" method="get">
<br>
<input type="text" name="search" id="search">
<input type="submit" value="rechercher">
</form>

<form action="recuperation.php" method="post">
   <br>
   <label for="nom"> nom </label> 
   <input type="text" name="nom" id="nom">
   <br>
   <label for="prenom"> prenom</label>
   <input type="text" name="prenom" id="prenom">

   <label for="age">age</label>
   <input type="number" name="" id="age">

   <input type="submit" value="envoyez">

</form>

</body>
</html>

