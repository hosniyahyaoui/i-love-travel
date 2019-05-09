
<?php
$data=mysqli_connect('localhost','root','','test');
$request_sql="select *  FROM donnes d WHERE d.cin1=".$_SESSION['cin'] ."";
$response_sql=mysqli_query($data , $request_sql);
//echo "<table  style='width:100%'>";
echo"<table class='table'>";
echo"  <thead class='thead-dark'>";
echo "<tr>";
echo "<th scope='col'>cin1</th>";
echo "<th scope='col'>nom1</th>";
echo "<th scope='col'>prenom1</th>";
echo "<th scope='col'>tel1</th>";
echo "<th scope='col'>adresse1</th>";
echo "<th scope='col'>sexe1</th>";
echo "<th scope='col'>email1</th>";
echo "<th scope='col'>nombre de person</th>";
echo "<th scope='col'>id de place</th>";//place a visite si visite 2 place


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
while($row=mysqli_fetch_assoc($response_sql)){
   // echo"<table><tr>"
   // echo "<td>".$row['cin1']."</td>";
    echo "<tbody>";
        echo "<tr>";

    echo "<td>".$row['cin1']."</td>";
    echo "<td>".$row['nom1']."</td>";
    echo "<td>".$row['prenom1']."</td>";
    echo "<td>".$row['tel1']."</td>";
    echo "<td>".$row['adresse1']."</td>";
    echo "<td>".$row['sexe1']."</td>";
    echo "<td>".$row['email1']."</td>";
        echo "<td>".$row['nombreperson']."</td>";
        echo "<td>".$row['idp']."</td>";


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
    echo "</tbody>";
}

echo "</table>";
?>
<script>
    function printer(){
window.print();    }
    </script>