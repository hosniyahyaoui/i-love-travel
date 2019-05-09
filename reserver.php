<?php include "contient/header.php" ?>
    
<body style=background-color:LightGray>
    <?php include "objetmenu/navbar.php" ?>
  
       <h1> <?php  if (isset($_GET['err'])){
                        echo $_GET['err'] == 'true' ? 'make sure you have a acount' : '' ;    
                    }else {
                        echo '';
                    }
            ?>  </h1>
    <?php 
    
       if (isset($_GET['edit'])){
           $connect=mysqli_connect("localhost","root","","test");
           $data="select * from donnes where cin1=".$_GET['cin'] ;
           
           $ex=mysqli_query($connect,$data);
           if($ex){
               while($row=mysqli_fetch_assoc($ex)){
                
            echo " <form class='col s12' action='/testproject/projet1/modification.php?idp=".$row['idp']."' name='f' method='post' >";
               echo "
                 <div class='input-field col s12'>
        
                     
  
  <select class='browser-default' id='nbp' name='persons'  required>
    <option value='2' selected>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
  </select>
                      
                     
                     
                     
                     
                     
                     

        
        
        <div class='row' id='f1'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input  id='first_name1' type='text' class='validate' name='fir1'  value=".$row['nom1']." required>
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name1' type='text' class='validate' name='last1'  value=".$row['prenom1']." required>
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' name='cin1' type='number' class='validate' name='cin1'  value=".$row['cin1']." required>
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
         <div class='row' id='f2'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input  id='first_name' type='text' class='validate' name='fir2'  value=".$row['nom2']." required>
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name' type='text' class='validate' name='last2'  value=".$row['prenom2']." required>
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='number' class='validate' name='cin2' value=".$row['cin2']." required>
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
         <div class='row' id='f3'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input id='first_name' type='text' class='validate' name='fir3'  value=".$row['nom3']."  >
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name' type='text' class='validate' name='last3'  value=".$row['prenom3']."  >
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='number' class='validate' name='cin3'  value=".$row['cin3']." >
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
         <div class='row' id='f4'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input  id='first_name' type='text' class='validate' name='fir4'  value=".$row['prenom4']."  >
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name' type='text' class='validate' name='last4'  value=".$row['nom4']."  >
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='number' class='validate' name='cin4'  value=".$row['cin4']."  >
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
         <div class='row' id='f5'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input id='first_name' type='text' class='validate' name='fir5'  value=".$row['nom5']." >
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name' type='text' class='validate' name='last5'  value=".$row['prenom5']." >
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='number' class='validate'name='cin5'  value=".$row['cin5']." >
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
        
       
        
      <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='text' class='validate' name='adr1'  value=".$row['adresse1']."  required>
          <label for='adresse'>adresse</label>
        </div>
      </div>
      <div class='row'>
        <div class='col-6'>
          <input id='email' type='email' class='validate' name='mail1'   value=".$row['email1']." required>
          <label for='email'>Email</label>
        </div>
      </div>
      <div class='row'>
        <div class='col-6'>
          
       <div class='input-field'>
          <i class='material-icons prefix'>phone</i>
          <input id='icon_telephone' type='tel' class='validate' name='tel1'  value=".$row['tel1']." required>
          <label for='icon_telephone'>Telephone</label>
        </div>   
     
        </div>
      </div>    
             <div>
                       <h5> <label >sexe</label></h5>    <label>
        <input type='radio' class='filled-in' name='gg' value='h'  ".($row['sexe1'] === 'h' ? "checked" : "")."  required>
        <span>homme</span>
      </label> 
                    
                
        <br/>  
                     <label>
                  
        <input type='radio' class='filled-in' name='gg'  value='f'  ".($row['sexe1'] === 'f' ? "checked" : "")." required>
        <span>femme</span>
      </label> 
             </div>
        
        <h5>payer:<i>remplacer par le moyen de payement</i></h5>
        <div class='row'>
        <div class='col-6'>
          <input id='payer' type='text' class='validate' required>
          <label for='adresse'>payer</label>
        </div>
      </div>
        <center><button type='button'    class='btn btn-primary' onclick='conrole()'>Go to save</button></center>
        </div></form> ";
                            
           }               
      }
           
       }else{
           echo " <form class='col s12' action='/testproject/projet1/modification.php?idp=".$_GET['idp']."' name='f' method='post' onsubmit='return conrole()'>";
               echo "
                 <div class='input-field col s12'>
        
                     
  
  <select class='browser-default' id='nbp' name='persons'  required>
    <option value='2' selected>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
  </select>
                      
                     
                     
                     
                     
                     
                     

        
        
        <div class='row' id='f1'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input  id='first_name1' type='text' class='validate' name='fir1'   required>
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name1' type='text' class='validate' name='last1'  required>
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' name='cin1' type='number' class='validate' name='cin1'   required>
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
         <div class='row' id='f2'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input  id='first_name' type='text' class='validate' name='fir2'  required>
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name' type='text' class='validate' name='last2'  required>
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='number' class='validate' name='cin2' required>
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
         <div class='row' id='f3'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input id='first_name' type='text' class='validate' name='fir3'   >
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name' type='text' class='validate' name='last3'   >
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='number' class='validate' name='cin3'   >
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
         <div class='row' id='f4'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input  id='first_name' type='text' class='validate' name='fir4'   >
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name' type='text' class='validate' name='last4'  >
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='number' class='validate' name='cin4'  >
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
         <div class='row' id='f5'>
    <div class='container'>
        <div class='row'>
        <div class='input-field col s6'>
          <input id='first_name' type='text' class='validate' name='fir5'  >
          <label for='first_name'>First Name</label>
        </div>
        <div class='input-field col s6'>
          <input id='last_name' type='text' class='validate' name='last5' >
          <label for='last_name'>Last Name</label>
        </div>
      </div>
       <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='number' class='validate'name='cin5'   >
          <label for='cin'>cin</label>
        </div>
      </div>
        </div></div>
        
        
        
       
        
      <div class='row'>
        <div class='col-6'>
          <input id='adresse' type='text' class='validate' name='adr1'  required>
          <label for='adresse'>adresse</label>
        </div>
      </div>
      <div class='row'>
        <div class='col-6'>
          <input id='email' type='email' class='validate' name='mail1'   required>
          <label for='email'>Email</label>
        </div>
      </div>
      <div class='row'>
        <div class='col-6'>
          
       <div class='input-field'>
          <i class='material-icons prefix'>phone</i>
          <input id='icon_telephone' type='tel' class='validate' name='tel1'   required>
          <label for='icon_telephone'>Telephone</label>
        </div>   
     
        </div>
      </div>    
             <div>
                       <h5> <label >sexe</label></h5>    <label>
        <input type='radio' class='filled-in' name='gg' value='h'   required>
        <span>homme</span>
      </label> 
                    
                
        <br/>  
                     <label>
                  
        <input type='radio' class='filled-in' name='gg' value='f'   required>
        <span>femme</span>
      </label> 
             </div>
        
        <h5>payer:<i>remplacer par le moyen de payement</i></h5>
        <div class='row'>
        <div class='col-6'>
          <input id='payer' type='text' class='validate' required>
          <label for='adresse'>payer</label>
        </div>
      </div>
        <center><button type='submit'    class='btn btn-primary' >Go to save</button></center>
        </div></form>";

      
      

                 }?>
    <script>
        $(document).ready(function(){
           $('#f2').show();
             $('#f3').hide();
             $('#f4').hide();
             $('#f5').hide();
            $('#nbp').click(function(){
         var nbp = document.f.persons.value ; 
            
            if ( nbp == '3') {
             
             $('#f2').show();
             $('#f3').show();
             $('#f4').hide();
             $('#f5').hide();
         }else if ( nbp == '4') {
             
             $('#f2').show();
             $('#f3').show();
             $('#f4').show();
             $('#f5').hide();
         }else if ( nbp == '5') {
             
             $('#f2').show();
             $('#f3').show();
             $('#f4').show();
             $('#f5').show();
         }else{
             $('#f2').hide();
             $('#f3').hide();
             $('#f4').hide();
             $('#f5').hide();
         }  })
        })
    </script>
    <script src="controlsaisi.js"></script>
  
    
    
   
        <?php include "objetmenu/footermenu.php"?>
   
<?php include "contient/footer.php"?>