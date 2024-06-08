<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css">
    <title>GESTION STOCK</title>
</head>

<body>
    <h1 align="center">GESTION DE STOCK</h1>
    <fieldset id="formu">
        <form action="insert.php" method="post">
            <input class="case" type="text" name="id_produit" placeholder="id du produit"><br>
            <input class="case" type="text" name="nom_produit" placeholder="nom du produit"><br>
            <input class="case" type="text" name="q_produit" placeholder="quantité du produit"><br>
            <input id='bouton' type="submit" name="valider" value="INSERER">
            <input id='bouton2' type="submit" name="supprimer" value="EFFACER"><br>

        </form>
    </fieldset>
    <div id="tableau">
         <?php include('affiche.php');?>
    </div>
</body>

</html>