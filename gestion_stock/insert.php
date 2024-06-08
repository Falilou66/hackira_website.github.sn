<html>
    <link rel="stylesheet" href="accueil.css">
    <head></head>
    <body>

    <?php

        $servername='localhost';
        $username='root';
        $password='';
        $database='gestion_stock';
        $connect=mysqli_connect($servername,$username,$password,$database);
        if($connect){
        echo "CONNECTE AVEC SUCCES"."<br>";
        }

        if(isset($_POST['valider'])){
            $id=$_POST['id_produit'];
            $nom=$_POST['nom_produit'];
            $quantite=$_POST['q_produit'];
            $result=mysqli_query($connect,"INSERT INTO produit(id_produit,nom_produit,quantite) VALUES ('$id','$nom','$quantite')");
        }
        if(isset($_POST['supprimer'])){
            $id=$_POST['id_produit'];
            $nom=$_POST['nom_produit'];
            $quantite=$_POST['q_produit'];
            $result=mysqli_query($connect,"DELETE FROM produit WHERE id_produit='$id'");
        }
       header('location: accueil.php');
    ?>

    </body>
</html>