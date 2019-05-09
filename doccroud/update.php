<?php 
 
$cin1= $_POST["cin1"] ;
$fir1=$_POST['fir1'] ;
$last1=$_POST['last1'] ;
$fir2=$_POST['fir2']  ;
$fir3=$_POST['fir3'] ;
$fir4=$_POST['fir4'] ;
$fir5=$_POST['fir5'] ;
$last2=$_POST['last2'] ;
$last3=$_POST['last3'] ;
$last4=$_POST['last4'];
$last5=$_POST['last5'];
$cin2=$_POST['cin2'] ;
$cin3=$_POST['cin3'] ;
$cin4=$_POST['cin4'] ;
$cin5=$_POST['cin5'] ;
$tel1=$_POST['tel1'];
$nbp=$_POST['persons'];
$adr1=$_POST['adr1'] ;
$mail1=$_POST['mail1'] ;
$gg=$_POST['gg'] ;


  $sql=mysqli_connect('localhost','root','','test');
$requete_delete= "UPDATE donnes SET nom1 = '$fir1', prenom1 ='$last1',cin2 = '$cin2',nom2 = '$fir2',prenom2 = '$last2',cin3 = '$cin3',prenom3 = '$last3',nom3= '$fir3',cin4 = '$cin4',prenom4 = '$last4',nom4 = '$fir4',cin5 = '$cin5',prenom5 = '$last5',nom5= '$fir5',adresse1='$adr1',email1='$mail1',sexe1='$gg',nombreperson='$nbp' where cin1='$cin1' "; 
$execute=mysqli_query($sql,$requete_delete);
if($execute){
    
    echo "udated";
}else{echo "not update";}