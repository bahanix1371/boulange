<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" />
    <title><?php echo $titre ?></title>
</head>

<body >
    <div class="container">
        <h1 class="relief">BOULANGE</h1>
        <h1 class="relief">Projet BTS SIO SLAM<h1>
    </div>

    <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=tab">Aministration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=card">Ordinateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=panier">Commande</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=creer">Créer Ordinateur</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <h2><?php echo $titre ?></h2>
        <?php echo $content ?>
    </div>

    <div class="container">
    <footer>
        <p>Copyright ThomasMoulins© - Tous droits réservés<br />
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Me contacter !</a></p>
    </footer>
    </div>
</body>
</html>