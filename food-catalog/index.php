<?php
include 'data.php';

// check if user is searching
$isSearch = isset($_GET['q']);
$searchQuery = $isSearch ? strtolower($_GET['q']) : '';

// filter data if searching
$displayFoods = $foods;
if($isSearch && $searchQuery != ''){
    $displayFoods = array_filter($foods, function($item) use ($searchQuery){
        return strpos(strtolower($item['name']), $searchQuery) !== false;
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
            <a href="favorites.php">Favorites</a>
        </div>
    </nav>

    <div class="container">
        
        <form action="index.php" method="GET">
            <input type="text" name="q" class="search-bar" placeholder="Search for cravings..." value="<?php echo $isSearch ? $_GET['q'] : ''; ?>">
        </form>

        <?php if (!$isSearch): ?>
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

        <?php else: ?>
            <h2>Search Results</h2>
            <div class="grid-container">
                <?php if(empty($displayFoods)): ?>
                    <p>No food found.</p>
                <?php else: ?>
                    <?php foreach($displayFoods as $food): ?>
                        <a href="details.php?id=<?php echo $food['id']; ?>" class="food-card">
                            <img src="<?php echo $food['image']; ?>" alt="<?php echo $food['name']; ?>">
                            <p><strong><?php echo $food['name']; ?></strong></p>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</body>
</html>
