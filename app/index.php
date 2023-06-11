<?php

//zmienne dla połączenia z bazą danych 
$host = 'mysql';
$port = 3306;
$db = 'university';
$user = 'test';
$password = 'test';

//połączenie z bazą danych za pomocą klasy PDO
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("Connection error: " . $e->getMessage());
}

echo "<h1>Information about students: </h1>";

//żądanie do bazy danych
$query = "SELECT * FROM students LIMIT 1";
try {
    $stmt = $pdo->query($query);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query error: " . $e->getMessage());
}

// wyświetlenie informacji
if ($row) {
    echo "<p>Name: " . $row['name'] . "</p>";
    echo "<p>Surname: " . $row['surname'] . "</p>";
    echo "<p>Index Number: " . $row['index_number'] . "</p>";
} else {
    echo "There is no data about students.";
}
?>
