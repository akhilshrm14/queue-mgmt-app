<!DOCTYPE html>
<html>
<head>
    <style>
        table {
        border: 1;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
        }
        th {
        background-color: #588c7e;
        color: white;
        }
          tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
<body>

<?php

include 'config.php';

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect($servername, $username, $password ,$dbname);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



 
// Close connection
mysqli_close($conn);
?>

   
</body>
</html>







   