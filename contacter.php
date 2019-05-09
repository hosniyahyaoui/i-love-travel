   <?php 
    $name=mysqli_connect('localhost','root','','test');
$nom=$_POST['nom'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$message=$_POST['message'];
$inser="INSERT INTO contact (nom,tel,email,message) VALUES ('$nom','$tel','$email','$message')";
 $exexcut=mysqli_query($name,$inser);
    
if($exexcut){
   echo"<script>alert('bien envoyer')</script>";
}else {
   echo"<h1><script>alert('echek envoyer')</script></h1>";
}

?>