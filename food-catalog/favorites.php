<?php
$host = 'localhost';
$db   = 'postgres';
$user = 'jvjd';
$pass = '';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
    
    // Gets the ID sent from js script sa details.php
    $id = $_POST['id'];

    // Updates the database: Add +1 to the current fav count
    $stmt = $pdo->prepare("UPDATE foods SET favorites = favorites + 1 WHERE food_id = ?");
    $stmt->execute([$id]);

    // Fetch the new number to send back to the page
    $stmt = $pdo->prepare("SELECT favorites FROM foods WHERE food_id = ?");
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Returns the new number
    echo $result['favorites'];

} catch (PDOException $e) {
    echo "Error";
}
?>