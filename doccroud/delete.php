<?php 

if ($_GET['edit'] == 'true') {
    // 
    
}else{
     $sql=mysqli_connect('localhost','root','','test');
$requete_delete="DELETE FROM donnes where cin1=".$_GET['cin1']."";
$execute=mysqli_query($sql,$requete_delete);
if($execute){
    //if($_POST['cin1'])
  
    $loc="http://localhost/testproject/projet1/insert.php";
    $permanent=false;
    header('Location'.$loc,true,$permanent?301:302);

   }else { echo"error"; }
   
}


?>