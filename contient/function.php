<?php 


   $var=mysqli_connect("localhost","root","","test"); 
    
    $cin1 = $_GET['cin1'] ;
 

        if ($var) {
          $sql_request = "SELECT cin1 FROM donnes WHERE cin1 =$cin1" ;
            
          $sql_response = mysqli_query($var  , $sql_request  ) ;  // execution de la requet SQL ..
          $cin1 = mysqli_fetch_assoc($sql_response)['cin1'] ;
            
          $sql_request = "DELETE FROM donnes WHERE cin1 =$cin1" ;
          $sql_response = mysqli_query($var  , $sql_request  ) ;  // execution de la requet SQL ..

            if ($sql_response) { 
                $d = "success" ;
              include "echec.php" ; 
            }
                                else if (!$sql_response){
                                    $d="echec";
            include "echec.php";
 }else{
                                    echo "not found !";
                                }
            
        }else {
            echo 'error au niveaux de connection .. ';
        }
?>