
    <link rel="stylesheet" href="accueil.css">
<head></head>

<?php
         $servername='localhost';
         $username='root';
         $password='';
         $database='gestion_stock';
         $connect=mysqli_connect($servername,$username,$password,$database);
        // $affiche="SELECT * FROM produit";

        $result=mysqli_query($connect,"SELECT * FROM produit") or die ('ERREUR');
        echo "<table border=2px id=affichage style=margin:auto;margin-top:20px;color:red;font-size:20pt;text-align:center;padding:5px>";
        echo "<tr style=font-weight:bold>"."<td>"."ID DU PRODUIT"."</td>"."<td>"."NOM DU PRODUIT"."</td>"."<td>"."QUANTITE DU PRODUIT"."</td>"."</tr>";
        while($data=mysqli_fetch_array($result)){
            
            echo "<tr>"."<td>".$data['id_produit']."</td>"."<td>".$data['nom_produit']."</td>"."<td>".$data['quantite']."</td>"."</tr>";
        }
        echo "</table>";
?>