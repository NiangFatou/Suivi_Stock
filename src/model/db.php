<?php
function getConnection(){
    $host ='';
    $mysqluser='root';
    $mysqlpassword='';
    $dbname ='Gest_Prod';
    $dsn ="mysql:host=$host;dbname=$dbname";
    try{
        $db = new PDO($dsn,$mysqluser,$mysqlpassword);
    }catch(\Trowable $th){

        throw $th;
    }
    return $db;
}
getConnection();
function gesConGraph()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Gest_Prod";

   // $conn = getConnection();
   // unset( $conn ); deconnecter de la bd
    // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }




        $query = "SELECT * FROM produit";
    $result = mysqli_query($conn, $query);
    $chart_data = '';
    while($row = mysqli_fetch_array($result))
    {
    $chart_data .= "{ time:'".$row["nom"]."', humidity:".$row["IdU"].", qtStock:".$row["qtStock"]."}, ";
    }

    return $chart_data;
}


?>