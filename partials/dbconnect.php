<?php
$servername = "localhost";
$username = "id18365081_user1";
$password = "CpqQ>VhKyk2Z/q@c";
$database = "id18365081_gca_quora";

$conn = mysqli_connect($servername , $username , $password , $database);
if(!$conn){
    die("Connection was not successful" . mysqli_connect_errno());
}
// else{
//     echo "Connection was successful.";
// }
?>