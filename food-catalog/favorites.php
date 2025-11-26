<?php
session_start();

$host = 'localhost';
$db   = 'postgres';
$user = 'jvjd';
$pass = '';

header('Content-Type: text/plain');

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if (!isset($_POST['id'])) { echo "Err"; exit; }
    $id = $_POST['id'];

    // Create the list if it doesn't exist yet
    if (!isset($_SESSION['liked_foods'])) {
        $_SESSION['liked_foods'] = [];
    }

    // Check if ID is already in the list
    if (in_array($id, $_SESSION['liked_foods'])) {
        // --- ALREADY LIKED: WE UNLIKE IT (-1) ---
        
        // Remove ID from session list
        $key = array_search($id, $_SESSION['liked_foods']);
        unset($_SESSION['liked_foods'][$key]);

        // Decrement DB
        $stmt = $pdo->prepare("UPDATE foods SET favorites = GREATEST(favorites - 1, 0) WHERE food_id = ?");
        $stmt->execute([$id]);

    } else {
        
        // Add ID to session list
        $_SESSION['liked_foods'][] = $id;

        // Increment DB
        $stmt = $pdo->prepare("UPDATE foods SET favorites = COALESCE(favorites, 0) + 1 WHERE food_id = ?");
        $stmt->execute([$id]);
    }

    // 3. RETURN NEW COUNT
    $stmt = $pdo->prepare("SELECT favorites FROM foods WHERE food_id = ?");
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo $result['favorites'] ?? 0;

} catch (PDOException $e) {
    echo "Error";
}
?>