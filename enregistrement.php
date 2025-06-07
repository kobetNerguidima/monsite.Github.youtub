<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["nom"]) &&isset($_POST["prenom"]) &&isset($_POST["Date de Naissance"]) &&isse($_POST["Nationalité"]) &&isset($_POST["Adresse Postale"]) &&isset($_POST["ville"]) &&isset($_POST[""]))  {
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $email=$_POST["Date Naissance"];
        $Nationalite=$_POST["Nationalité"];

        $host="localhost";
        $user="root";
        $pwd="";
        $db="estm";
        $con=mysqli_connect($host,$user,$pwd,$db);
        if (!$con) {
            die("Error connexion ...".mysqli_connect_error());
        }
        $req="INSERT INTO opinions(nom,prenom,email)VALUES('$nom','$prenom','$email','  $Nationalite', $Adressepostale')";
        if (mysqli_query($con,$req)) {
            echo"<h2>enregistrement a été effectué avec succès</h2>";
        }
    }
?>
<a href="javascript:history.back()">Essayez à nouveau</a><br>
<a href="opinions.php">Voir les autres opinions</a>
</body>
</html>