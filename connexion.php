<?php

    $servername='localhost';
    $username='root';
    $password="";
    $db="pc2";
    $connect=mysqli_connect($servername,$username,$password,$db);
    if($connect){
        // echo "database connected";
        // header('location:connexion.html');
    }


    if(isset($_POST['bouton'])){
        $nom=$_POST['nom'];
        $mdp=$_POST['mdp'];
        
        $search=mysqli_query($connect,"SELECT prenom,pwd FROM user");

        
        while($ligne=mysqli_fetch_assoc($search)){
            if($ligne['prenom']==$nom && $ligne['pwd']==$mdp){
                header('location:accueil.html');
            }
        }

        echo "USER OU PASSWORD INCORRECT !!!!!!";

       
    }

?>