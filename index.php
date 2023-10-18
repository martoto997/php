<?php
// Connect to MySQL
$mysqlHost = "mysql";
$mysqlUser = "root";
$mysqlPassword = "yourpassword";
$mysqlDatabase = "yourdatabase";
$mysqli = new mysqli($mysqlHost, $mysqlUser, $mysqlPassword, $mysqlDatabase);

if ($mysqli->connect_error) {
    die("MySQL Connection failed: " . $mysqli->connect_error);
}

// Query MySQL for dummy data
$mysqlQuery = "SELECT * FROM your_table_name";
$mysqlResult = $mysqli->query($mysqlQuery);

// Connect to MongoDB
$mongoClient = new MongoDB\Client("mongodb://mongo:27017");

$mongoDatabase = $mongoClient->your_mongodb_database_name;
$mongoCollection = $mongoDatabase->your_mongodb_collection_name;

// Query MongoDB for dummy data
$mongoQuery = [];
$mongoOptions = [];

$mongoCursor = $mongoCollection->find($mongoQuery, $mongoOptions);

// Display data
echo "<h1>MySQL and MongoDB Data</h1>";

echo "<h2>MySQL Data:</h2>";
while ($row = $mysqlResult->fetch_assoc()) {
    echo "Name: " . $row['name'] . "<br>";
}

echo "<h2>MongoDB Data:</h2>";
foreach ($mongoCursor as $document) {
    echo "Title: " . $document['title'] . "<br>";
}
?>