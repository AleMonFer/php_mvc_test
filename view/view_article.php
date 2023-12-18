<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding An Article</title>
</head>
<body>

    <form action="index.php" method="POST">
        <input type="text" name="nameArt" placeholder="Le nom d'article">
        <input type="number" name="prixArt" step="0.01" placeholder="Le prix d'article">
        <input type="submit" value="Ajouter" name="submitArt">
    </form>

    <p><?php echo $message ?></p>

</body>
</html>