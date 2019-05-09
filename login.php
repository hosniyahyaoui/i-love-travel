
<?php

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    

$connece=mysqli_connect('localhost','root','','test');

$bb="select cin,password FROM inscripter where cin=".$_POST['cin']."  and password='".$_POST['password']."'" ;
$varr=mysqli_query($connece,$bb);
if($varr){
    session_start();
    $_SESSION['cin']=$_POST['cin'];
    $_SESSION['password']= $_POST['password'];
  //  header('Location : http://localhost/testproject/projet1/insert.php   ');
 $url = 'http://localhost/testproject/projet1/insert.php';
$permanent = false ;

    header('Location: ' . $url, true, $permanent ? 301 : 302);}
else{    
    $url = 'http://localhost/testproject/projet1/login.php?err=true';
$permanent = false ;

    header('Location: ' . $url, true, $permanent ? 301 : 302);
}}

?>

<?php include "contient/header.php" ?>
<body style="background-color:#f0f0f0">  
    <?php include "objetmenu/navbar.php" ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="container" >
<center>
                  <div class="card text-center"  style=background-color:white>
  <div class="card-header">
    <i>Connectez-vous pour gérer votre établissement</i>
  </div>
                      
     <?php if(isset($_GET["err"])){
                if ($_GET["err"]=='true'){
                    echo"<h1 style='color:red'>verifer cin et password</h1>";
                }
}   ?>                 
  <div class="card-body" width="300px" heigth="500px">
   <!-- <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
      
       <div class="form-group ">
                <label >CIN:<br/><input type="text" name="cin"></label>
                    </div>
                <div class="form-group">

                    <label >mot passe:<br/><input type="password" name="password">
</label><!--<a class="js-form-control-show-password form-control-show-password hidden" href="#" data-track-ga="login page, show password, click">
                    <i class="glyphicon glyphicon-eye-open"></i>
                    <span>affiche</span></a>-->
                        </div>
                <div class="form-group"><br/>
                <input type="submit" name="bouton" value="Login" class="btn btn-primary">
                 </div>
   <!-- <a href="#" class="btn btn-succes">Inscription</a>-->
     <a href="inscription.php" class="btn waves-effect waves-light" type="submit" name="action">inscription
    <i class="material-icons right">send</i>
  </a>
  </div>
  <div class="card-footer text-muted">
   <i style="font-size:20px"> click sur boutton inscription si la premier fois</i>
  </div>
    </div>

</center>
</div>
<br/><br/><br/>
    
    
    
    
    
    
            </form>
    <?php include "objetmenu/footermenu.php" ?>
     
          <?php include "contient/footer.php" ?>