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

$servername = "queue-mgmt-db.czx8mpocslrz.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "color2021$";
$dbname = "queue_mgmt_db";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect($servername, $username, $password ,$dbname);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$businessType = mysqli_real_escape_string($conn, $_REQUEST['businessType']);
$location = mysqli_real_escape_string($conn, $_REQUEST['location']);

// Retrieve Data for businesses
$sql = "SELECT business_name, address_line1, address_line2, city_id, state_name, phone_no, zipcode FROM BUSINESS 
        LEFT JOIN STATE ON STATE.state_id = BUSINESS.state_id
        WHERE city_id = '$location' 
        AND business_type_id ='$businessType'";

//Execute the query
$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0) {

// Generate the header of the table
echo " <div align=\"right\"><input type=\"button\" name=\"close\" onclick=\"closeSearchResults()\" value=\"Close\"></div>
        <table><thead> 
              <tr>
                <th>Business Name</th>
                <th>Business Address</th>
                <th>Phone Number</th>
                <th>Services Offered -> Estimated Wait Time</th>
                <th>Check-In</th>
              </tr></thead>";

   // Loop through the result set
    while($row = mysqli_fetch_assoc($result)) {

        echo "<tr> <td> " . $row["business_name"]. 
            "</td> <td> " . $row["address_line1"]. " " . $row["address_line2"]. " " . $row["zipcode"]. " " . $row["state_name"]. 
            "</td> <td>"  . $row["phone_no"].
            "</td> <td>"  . $row["phone_no"].
            "</td> <td align =\"center\"><button >Check-In</button></td>";
        }
      } else {
         //echo "<tr> Sorry, No Results found for your Search !! </tr>" 
        echo "no results found";
      }
 
// Close connection
mysqli_close($conn);
?>

   
</body>
</html>







   