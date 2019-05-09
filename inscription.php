
<?php include "contient/header.php" ?>
<body style="background-color:#f0f0f0">  
    <?php include "objetmenu/navbar.php" ?>

    


<form method="post" action="gereinscription.php">
<div class="container-fluid">
           <center> 
          <br/>
                <div class="row">
            
                    
                    
    
                <div class=" col-md-6">
                
                        <label >cin <input type="number" name="cin" ></label><br/>
                    <label >name<input type="text" name="nom" ></label><br/>
                <label >prenom  <input type="text" name="prenom" ></label><br/>
                    
          <label >telephone  <input type="tel" name="tel" ></label><br/>
         
       
                
                        </div>
                  
                    <div class="col-md-5">
                   <label >mot de passe <input type="password" name="password" ></label><br/>
                    <label >Adresse <input type="text" name="adresse" ></label><br/>
                     <div class="input-field">
              
                         <div>
                       <h5> <label >sexe</label></h5>   
        <label>
            
        <input type="radio" class="filled-in" name="sexe"  required>
        <span>homme</span>
      </label> 
                    
                
        <br/>  
                    
     <label>  
        <input type="radio" class="filled-in" name="sexe" required>
        <span>femme</span>
      </label> 
             </div>
                       <br/>
                  
                 </div></div>
             
            
              
               </div></center></div>
    <center><input type="submit" name="bouton" value="enregistre" class="btn btn-green" style="background-color:green"></center>
    </form>
    
    
    <?php include "objetmenu/footermenu.php" ?>
     
          <?php include "contient/footer.php" ?>