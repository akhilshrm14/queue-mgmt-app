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

$business_Type = mysqli_real_escape_string($conn, $_REQUEST['business_type_id']);
$business_id = mysqli_real_escape_string($conn, $_REQUEST['business_id']);
$business_name = mysqli_real_escape_string($conn, $_REQUEST['business_name']);

echo $business_Type;
echo $business_id;
echo $business_name;

// You are checkin in to business_name with a wait time of this

// select query to find all the business_service_rlt id for the business id above

// Please select the services you want to checkin dropdown

// Name, phone number text box

// check in button

// on click of this button

// call a javascipt execute a php code to insert into customer_service_rlt

 
// Close connection
mysqli_close($conn);
?>

   
</body>
</html>







   