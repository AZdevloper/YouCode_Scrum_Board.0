<?php
echo "<script3";

if(isset($_POST['save'])){
    echo "added successfully";

}
    
$servername = "localhost";
$username = "root";
$password= "";
$database = "youcodescrumboard";

    //CONNECT TO MYSQL DATABASE USING MYSQLI

    $connection = new  mysqli($servername,$username,$password,$database) ;
    // check connection

if ($connection->connect_error) {
    
    die("Connection failed: ". $connection->connect_error);
}


//
$sql = "SELECT * FROM youcodescrumboard ";

$result = $connection->query($sql);

?>