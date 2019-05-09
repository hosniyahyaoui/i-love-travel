
<?php
$data=mysqli_connect('localhost','root','','test');
$request_sql="select *  FROM donnes d WHERE d.cin1='".$_GET['cin']."' ";
$response_sql=mysqli_query($data , $request_sql);
//echo "<table  style='width:100%'>";
echo"<br/>";echo"<br/>";echo"<br/>";
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-2'>";
echo"<table class='table'>";
echo"  <thead class='thead-dark'>";
echo "<tr>";
echo "<th scope='col'>cin1</th>";
echo "</tr>";echo "<tr>";
echo "<th scope='col'>nom1</th>";
echo "</tr>";echo "<tr>";
echo "<th scope='col'>prenom1</th>";
echo "</tr>";echo "<tr>";
echo "<th scope='col'>tel1</th>";
echo "</tr>";echo "<tr>";
echo "<th scope='col'>adresse1</th>";
echo "</tr>";echo "<tr>";
echo "<th scope='col'>sexe1</th>";
echo "</tr>";echo "<tr>";
echo "<th scope='col'>email1</th>";
echo "</tr>";echo "<tr>";
echo "<th scope='col'>nombreperson</th>";
echo "</tr>";echo "<tr>";
echo "<th scope='col'>id de place</th>";//place a visite si visite 2 place
echo "</tr>";echo "<tr>";
echo "<th scope='col'>prix</th>";


/*echo "<th scope='col'>cin2</th>";
echo "<th scope='col'>nom2</th>";
echo "<th scope='col'>prenom2</th>";
echo "<th scope='col'>cin3</th>";
echo "<th scope='col'>nom3</th>";
echo "<th scope='col'>prenom3</th>";
echo "<th scope='col'>cin4</th>";
echo "<th scope='col'>nom4</th>";
echo "<th scope='col'>prenom4</th>";
echo "<th scope='col'>cin5</th>";
echo "<th scope='col'>nom5</th>";
echo "<th scope='col'>prenom5</th>"; */
echo "</tr>";
echo "</thead>";
echo "</table>";
echo"</div>";
while($row=mysqli_fetch_assoc($response_sql)){
   // echo"<table><tr>"
   // echo "<td>".$row['cin1']."</td>";
    echo "<div class='col-2'>";
    echo"<table class='table'>";
    echo"  <thead class='thead-white'>";
 //   echo "<tbody>";
        echo "<tr>";

    echo "<th>".$row['cin1']."</th>";
    echo "</tr>";echo "<tr>";
    echo "<th>".$row['nom1']."</th>";
    echo "</tr>";echo "<tr>";
    echo "<th>".$row['prenom1']."</th>";
    echo "</tr>";echo "<tr>";
    echo "<th>".$row['tel1']."</th>";
    echo "</tr>";echo "<tr>";
    echo "<th>".$row['adresse1']."</th>";
    echo "</tr>";echo "<tr>";
    echo "<th>".$row['sexe1']."</th>";
    echo "</tr>";echo "<tr>";
    echo "<th>".$row['email1']."</th>";
    echo "</tr>";echo "<tr>";
        echo "<th>".$row['nombreperson']."</th>";
    echo "</tr>";echo "<tr>";
        echo "<th>".$row['idp']."</th>";


    /*echo "<td>".$row['cin2']."</td>";
    echo "<td>".$row['nom2']."</td>";
    echo "<td>".$row['prenom2']."</td>";
    echo "<td>".$row['cin3']."</td>";
    echo "<td>".$row['nom3']."</td>";
    echo "<td>".$row['prenom3']."</td>";
     echo "<td>".$row['cin3']."</td>";
    echo "<td>".$row['nom4']."</td>";
    echo "<td>".$row['prenom4']."</td>";
     echo "<td>".$row['cin5']."</td>";
    echo "<td>".$row['nom5']."</td>";
    echo "<td>".$row['prenom5']."</td>";*/
echo "</tr>";
 //   echo "</tbody>";
    echo "</thead>";
    echo "</table>";
echo"</div>";
}
echo"</div>";
echo"</div>";
?>
<script>
    function printer(){
window.print();    }
    </script>