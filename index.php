<?php include __DIR__ . '/db/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP Dischi</title>
    </head>
    <body>
        <header>
            <img src="img/vinyl.png" alt="logo">
            <h1>I miei dischi</h1>
        </header>
        <main class="container">
            <!-- foreach album -->
            <?php foreach ($albums as $album) { ?>
                <div class="album">
                    <img src="<?= $album["poster"]?>" alt="<?= $album["author"].'-'.$album["title"]?>">
                    <h2><?= $album["title"]?></h2>
                    <h3><?= $album["author"]?></h3>
                    <span><?= $album["year"]?></span>
                </div>
            <?php } ?>
            <!-- /foreach album -->
        </main>
    </body>
</html>