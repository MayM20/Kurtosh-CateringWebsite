<?php

include('autoloader.php');


//create an instance of database class
$database = new Database();
$connection = $database -> connection;

$query = 'SELECT * FROM products';

//send the query to database
$statement = $connection -> prepare($query);

//execute query
$statement -> execute();

//get query results
$result = $statement -> get_result();

//check if there are results

if ($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc() ){
        $id = $row["id"];
        $name = $row["name"];
        $price = $row["price"];
        
        echo "<h1>$name</h1>";
        echo "<p>$price</p>";
        echo "<p>Product ID: $id</p>";
    }
}

?>