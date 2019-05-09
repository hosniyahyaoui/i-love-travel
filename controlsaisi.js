      
function conrole(){
    var y=document.f.nbp.selectedIndex+2;
      
      var x = document.f.cin1.value;
    
      
      var fe = document.f.cin2.value;
     
      
      var i = document.f.cin3.value;
     
      
      var l = document.f.cin4.value;
     
      
    var u = document.f.cin5.value; 
                   

      if(y==2){
       if(x.length!=8  ){
     alert('verifier le cin1 ');
            return false;
       }
          if(fe.length!=8  ){
     alert('verifier le cin2 ');
              return false;
       }
         
       } if(y==3){
      if(x.length!=8  ){
     alert('verifier le cin1 ');
           return false;
       }if(fe.length!=8  ){
     alert('verifier le cin2 ');
            return false;
       }if(i.length!=8  ){
     alert('verifier le cin3 ');
            return false;
       }
         
       }
    if(y==4){
      if(x.length!=8  ){
     alert('verifier le cin1 ');
           return false;
       }if(fe.length!=8  ){
     alert('verifier le cin2 ');
            return false;
       }if(i.length!=8  ){
     alert('verifier le cin3 ');
            return false;
       }if(l.length!=8  ){
     alert('verifier le cin4 ');
            return false;
       }
         
       
     }
    else if(y==5){
      if(x.length!=8  ){
     alert('verifier le cin1 ');
           return false;
       }if(fe.length!=8  ){
     alert('verifier le cin2 ');
            return false;
       }if(i.length!=8  ){
     alert('verifier le cin3 ');
            return false;
       }if(l.length!=8  ){
     alert('verifier le cin4 ');
            return false;
       }if(u.length!=8  ){
     alert('verifier le cin5 ');
            return false;
       }
         
       }
    
      
    };