<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2> Ajouter un commentaire </h2>
    <form action="submit_comment.php" method="post">

    <input type="text" name="username" id="username" placeholder="votre nom" required>
    <textarea name="comment " placeholder=" votre commentaire" required></textarea>
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'];?>">
    <button type="submit" name="submit">Commenter</button>
    </form>
</body>
</html>