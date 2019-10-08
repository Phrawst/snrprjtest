<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "Citiz13499Thai00900214@"; /* Password */
$dbname = "อะไหล่"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
