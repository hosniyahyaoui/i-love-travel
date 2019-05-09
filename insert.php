
<?php

session_start();
//require_once('');
$data=mysqli_connect('localhost','root','','test');
if(!$data){echo "error";}
if(!isset($_SESSION['cin']) || empty($_SESSION['cin'])){
header('Location: http://localhost/testproject/projet1/login.php');
    exit;
    
}

?>
<?php include "contient/header.php" ?>
<body style=background-color:LightGray>
    <?php include "objetmenu/navbar.php" ?>
 
  <center><h2>information personnel</h2></center>
    
        <div class="container">
    <?php include "infoclient.php"; ?>
    </div>
    <br/><br/><br/><br/><br/>
    <center>
    <div class="container">
   <!-- <a href="doccroud/delete.php?cin1=<?php// echo $_SESSION['cin'] ?>&edit=false" class="btn waves-effect waves-light" type="submit" name="action">supprimer
    <i class="material-icons right">send</i>
  </a>-->
       <a href="reserver.php?edit&cin=<?php echo $_SESSION['cin'] ?>" class="btn waves-effect waves-light" type="submit" name="action">modifier
    <i class="material-icons right">send</i>
  </a>
         <a href="doccroud/facture.php?cin=<?php echo $_SESSION['cin'] ?>" class="btn waves-effect waves-light" >imprimr
    <i class="material-icons right">send</i>
  </a>

     
    </div>
   
    </center>
        
    <br/><br/><br/><br/><br/>
        <?php include "objetmenu/footermenu.php"?>
  
    
<?php include "contient/footer.php"?>