<?php
session_start();
include 'data.php';

$showFavorites = isset($_GET['view']) && $_GET['view'] === 'favorites';
$isSearch    = isset($_GET['q']); // True if ?q= exists (even if empty)
$isHome      = !$showFavorites && !$isSearch; // Home only if NOT searching & NOT favorites

$searchQuery = $isSearch ? strtolower($_GET['q']) : '';

$displayFoods = $foods; // Default to showing everything

if ($isSearch && $searchQuery !== '') {
    $displayFoods = array_filter($foods, function($item) use ($searchQuery){
        return strpos(strtolower($item['name']), $searchQuery) !== false;
    });
} 
elseif ($showFavorites) {
    // Favorites Mode
    $likedIds = $_SESSION['liked_foods'] ?? [];
    $displayFoods = array_filter($foods, function($item) use ($likedIds){
        return in_array($item['id'], $likedIds);
    });
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PH CRAVE</title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>
<body>

    <nav>
        <div class="logo">PH CRAVE</div>
        <div>
            <a href="index.php">Home</a>
            <a href="index.php?q=">Browse</a>
            <a href="index.php?view=favorites">Favorites</a>
        </div>
    </nav>

<div class="container">
    
    <form action="index.php" method="GET">
        <input type="text" name="q" class="search-bar" placeholder="Search..." value="<?php echo $searchQuery; ?>">
    </form>

    <?php if ($showFavorites): ?>
        <h2>My Favorites</h2>
        <?php elseif ($isSearch): ?>
        <h2><?php echo $searchQuery === '' ? 'Browse All' : 'Search Results'; ?></h2>
        <div class="grid-container">
            <?php foreach($displayFoods as $food): ?>
                <a href="details.php?id=<?php echo $food['id']; ?>" class="food-card">
                    <img src="<?php echo $food['image']; ?>" alt="<?php echo $food['name']; ?>">
                    <p><strong><?php echo $food['name']; ?></strong></p>
                </a>
            <?php endforeach; ?>
        </div>

    <?php else: ?>
        <div class="hero">
            <h1>PH CRAVE</h1>
            <p>Satisfy your Filipino food cravings.</p>
        </div>
        <div class="scroll-section">
            <h2>Popular Now</h2>
            <div class="scroll-container">
                <?php foreach($foods as $food): ?>
                    <a href="details.php?id=<?php echo $food['id']; ?>" class="food-card">
                        <img src="<?php echo $food['image']; ?>" alt="<?php echo $food['name']; ?>">
                        <p><strong><?php echo $food['name']; ?></strong></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

</div>
</body>
</html>
