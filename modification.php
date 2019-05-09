<?php
  // insert 
   $var=mysqli_connect("localhost","root","","test");
  //  $sql_request = "SELECT * FROM users WHERE cin1 = ".$_POST["cin1"]." " ;
 //   $sql_response = mysqli_query($var , $sql_request);
//if ($sql_response) {
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
$id=$_GET['idp'];
$adr1=$_POST['adr1'] ;
$mail1=$_POST['mail1'] ;
$gg=$_POST['gg'] ;
 


/*  // valihh dation ... 
if($nbp==2){
if(strlen($cin2)!=8 && $fir2=="" && $last2 ==""){
  echo" <script>alert('verifier le cin ou nom ou prenom');</script>";

}    
    
}   
    if($nbp==3){
    if($cin2==null && $fir2=="" && $last2 =="" && $cin3==null && $fir3=="" && $last3 ==""){
    echo" <script>alert('verifier le cin ou nom ou prenom');</script>";
}
    
} 
    if($nbp==4){
if($cin2==null && $fir2=="" && $last2 =="" && $cin3==null && $fir3=="" && $last3 =="" &&  $cin4==null && fir4=="" && last4 ==""){
    echo" <script>alert('verifier le cin ou nom ou prenom');</script>";
}    
    
} 
    if($nbp==5){
if($cin2==null && $fir2=="" && $last2 =="" && $cin3==null && $fir3=="" && $last3 =="" &&  $cin4==null && $fir4=="" && $last4 ==""&& $cin5==null && $fir5=="" && $last5==""){
    echo" <script>alert('verifier le cin ou nom ou prenom');</script>";
}    
}
    */

      $sql ="INSERT INTO donnes VALUES ('$cin1','$fir1','$last1','$tel1','$adr1','$gg','$mail1','$cin2','$fir2','$last2','$cin3','$fir3','$last3','$cin4','$fir4','$last4','$cin5','$fir5','$last5','$nbp','$id')" ; 

      $res = mysqli_query($var , $sql ) ;
    if ( $res ) { 
                  // include modifcation 
          $c = $cin1 ;
         include "insert.php";
      }else{
   // header("Location : reserver.php?err=true");
  
       $url = 'http://localhost/testproject/projet1/home.php?err=true';
$permanent = false ;

   header('Location: ' . $url, true, $permanent ? 301 : 302);
       
         
}

        
?>