<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql112.epizy.com');
define('DB_USERNAME', 'epiz_23226810');
define('DB_PASSWORD','EkvAtcgZvu');
define('DB_NAME', 'epiz_23226810_VolunteerProjectMatchingDB');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>