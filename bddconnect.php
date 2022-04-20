<?php 
define("DBHOST","office.ntclick.com:33306");
define("DBUSER","root");
define("DBPASS","a15bA4De1f");
define("DBNAME","hypnos");


function ppp ()
{

  $con = mysqli_connect('office.ntclick.com:33306','root','a15bA4De1f','hypnos');
$sql = "insert into user ('prenom','nom','mail','password','radio') values ('q','s','d','f',1) ";

$result = mysqli_query($con, $sql);  
}
?>