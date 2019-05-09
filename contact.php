<?php include "contient/header.php" ?>
<body style=background-color:LightGray>
    <?php include "objetmenu/navbar.php" ?>
 
 <form method="post" action="cc.php">
<div class="container">
    <div class="row">
        <div class="col-6">
    <iframe src="https://www.google.com/maps/embed?pb=" width="350px" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
   
    
    </div>    
   
          <div class="col-6">  
   
                  <div class="card text-center"  style=background-color:white>
  <div class="card-header">
    <i>Connectez-vous pour gérer votre établissement</i>
  </div>
  <div class="card-body" width="300px" heigth="500px">
   <!-- <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
      
       
  
        
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="nom" required>
          <label for="icon_prefix">First Name</label>
        </div>
          
        <div class="input-field">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="tel" required>
          <label for="icon_telephone">Telephone</label>
        </div>   
     
    
        <div class="input-field ">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
   
              
 <div class="input-field ">
          <input id="email" type="text" class="validate" name="message" required>
          <label for="message">message</label>
        </div>
              
                   
               
   <!-- <a href="#" class="btn btn-succes">Inscription</a>-->
     <button href="#" class="btn waves-effect waves-light" type="submit"  name="button">envoyer
    <i class="material-icons right">send</i>
  </button>
  </div>
  <div class="card-footer text-muted">
   <i style="font-size:20px"> click sur boutton envoyer pour envoyer le message</i>
  </div>
    </div>
    </div>
    
    </div>  </div>
     </form>
      <?php include "objetmenu/footermenu.php"?>
    
    
<?php include "contient/footer.php"?>