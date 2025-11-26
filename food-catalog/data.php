<?php
$host = 'localhost';
$db   = 'postgres'; 
$user = 'jvjd';    
$pass = ''; // no password set for local dev

$dsn = "pgsql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// 3. FETCH DATA FROM DATABASE
// We get all foods from the table
$stmt = $pdo->query("SELECT * FROM foods ORDER BY food_id ASC");
$db_results = $stmt->fetchAll();

$foods = [];

foreach($db_results as $row) {
    $id = $row['food_id'];
    
    $foods[$id] = [
        'id'           => $row['food_id'],
        'name'         => $row['food_name'],
        'desc'         => $row['description'], // Mapping DB 'description' to UI 'desc'
        'recipe'       => $row['recipe'],
        'instructions' => $row['instructions'],
        'image'        => $row['image_url'],    // Mapping DB 'image_url' to UI 'image'
        'favorites'    => $row['favorites']
    ];
}
?>