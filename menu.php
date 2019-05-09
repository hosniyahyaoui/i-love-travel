<?php include "contient/header.php" ?>
<body style="background-color:#f0f0f0">    <?php include "objetmenu/navbar.php" ?>

        <script language="JavaScript">
            
            
            

function rechercher() {
 document.form_recherche.submit();
}

</script>
   
 
    <br/>
   
    <div class="container">
        
   <nav>
    <div class="nav-wrapper">
      <form action="outilderecherche.php" method="post">
        <div class="input-field">
          <input id="search" type="search" name="data" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div> 
                <center>          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></center>
      </form>
    </div>
  </nav>
    
    <br/>
    <br/><br/><br/><br/><br/>
    <br/>
    
    

<?php 
$connect=mysqli_connect("localhost","root","","test");
$requet_sql="select * from ville";
$result=mysqli_query($connect,$requet_sql);
if(!$result){
    echo "error de connection";
}
if(mysqli_num_rows($result)>0){
    $i = 0 ; 
    //$j = 1 ;
    while($row = mysqli_fetch_assoc($result)){
        $i++ ;
        $i == 1 ? $j = 1 : null ; 
        if ( $i == $j ){
            $j = $j+3 ; 
            echo "<div class='row'  id='yeah'>" ;
        }
echo "
<div class='col-4'>
    <div   class='card' style='width: 18rem;'>
  <img src='assets/td1.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title' style='color:red'> ".$row['title']." : " . $row['prix'] ." dt </h5>
    <p class='card-text' style='color:green'>".$row['champ']."</p>
    <a href='reserver.php?idp=".$row['id']."' class='btn btn-primary'>Go to Reserve</a>
  </div>
</div>
       </div> " ;
        if ( ($i%3) == 0 ){
            echo "  </div>" ;
        }
   
  
    }
}


?>        
        
        
   
       
    </div>    </div>    <br/>
     
          
    <?php include "objetmenu/footermenu.php" ?>
     
          <?php include "contient/footer.php" ?>