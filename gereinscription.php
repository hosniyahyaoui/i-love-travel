<?php
$connece=mysqli_connect('localhost','root','','test');
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$password=$_POST['password'];
$adresse=$_POST['adresse'];
$sexe=$_POST['sexe'];
$var="INSERT INTO inscripter(cin,nom,prenom,tel,password,adresse,sexe) VALUES ('$cin','$nom','$prenom','$tel','$password','$adresse','$sexe')";
$gg=mysqli_query($connece,$var);
if(!$gg){
    echo "there are problems";
}else
{
  $url = 'http://localhost/testproject/projet1/login.php';
$permanent = false ;

    header('Location: ' . $url, true, $permanent ? 301 : 302);}



?>