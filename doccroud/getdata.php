
<?php
$data=mysqli_connect('localhost','root','','test');
$request_sql="select *  FROM inscripter i,donnes d WHERE d.cin1=i.cin ";
$response_sql=mysqli_query($data , $request_sql);