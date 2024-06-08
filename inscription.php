<?php

    $servername='localhost';
    $username='root';
    $password='';
    $database='pc2';

    $conn=mysqli_connect($servername,$username,$password,$database);

    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo "database connected"."<br>";
    }


    
?>
<?php

if(isset($_REQUEST['valide']))
{
    echo "website connected";
    $nom=$_POST['nomm'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $age=$_POST['age'];
    $mdpp=$_POST['mdpp'];
    
    $result=mysqli_query($conn,"INSERT INTO user(nom, prenom, email, telephone, age, pwd) VALUES ('$nom','$prenom','$email','$tel','$age','$mdpp')");
    
    header('location:inscription.html');

}
else{
    echo "ECHEC";
}

?>