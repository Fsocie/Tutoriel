
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="/submit.php" method="post">
<label for="name">Nom :</label>
<input type="text" id="name" name="name" placeholder=" votre nom de famille" autofocus required> 

<label for="name">Celibataire :</label>

<input type="radio" name="checkbox" id="checkbox">

<label for="name">marié :</label>
<input type="radio" name="checkbox" id="checkbox">

<label for="date"> choississez une date : </label>
<input type="date" name="date" id="date">

<label for="email"> entrez votre mail</label>
<input type="email" name="" id="" placeholder=" exemple@gmai.com">

<input type="submit" value="Envoyer">
</form>

</body>
</html>