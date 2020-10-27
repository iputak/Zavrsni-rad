<?php  
$db_host = "localhost"; 
// Korisničko ime za bazu 
$db_username = "root";  
// Zaporka za bazu
$db_pass = "";  
// Ime baze
$db_name = "strongdor"; 

// Run the actual connection here  
/*mysql_connect("$db_host","root","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");              */

$link = mysqli_connect($db_host, $db_username, $db_pass, $db_name);
$link->set_charset('utf8');
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
/*
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
*/
?>