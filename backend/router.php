<?php 

$db = __DIR__ . "/../database/blablacnam.db";

try {
    // Establish a connection to the database
    $pdo = new PDO('sqlite3:' . $dbFile);
    
    // Set error mode to exception for error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Select data from a table
    $query = "SELECT * FROM user;";
    $statement = $pdo->query($query);

    // Fetch the results
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        // Access individual columns using $row['column_name']
        $column1Value = $row['column1'];
        $column2Value = $row['column2'];
        
        // Process the data or display it
        echo "Column 1: $column1Value, Column 2: $column2Value <br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}