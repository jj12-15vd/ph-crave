<?php
include 'data.php';

// Get ID from URL, default to 1 if missing
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$food = isset($foods[$id]) ? $foods[$id] : null;

if(!$food) { die("Food not found!"); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $food['name']; ?> - PH CRAVE</title>
    <link rel="stylesheet" href="/styles/styles.css">
    
    <style>
        .fav-btn { cursor: pointer; user-select: none; }
    </style>
</head>
<body>

    <nav>
        <div class="logo">PH CRAVE</div>
        <div>
            <a href="index.php">Home</a>
            <a href="index.php?q=">Browse</a>
            <a href="#">Favorites</a>
        </div>
    </nav>

    <div class="container">
        <div class="detail-layout">
            
            <div class="detail-left">
                <img src="<?php echo $food['image']; ?>" alt="<?php echo $food['name']; ?>">
                <span class="section-title">Description</span>
                <p><?php echo $food['desc']; ?></p>
            </div>

            <div class="detail-right">
                <div class="fav-btn" onclick="addLike(<?php echo $food['id']; ?>)">
                    ♡ <span id="like-count"><?php echo $food['favorites'] ?? 0; ?></span>
                </div>
                
                <h1><?php echo $food['name']; ?></h1>
                
                <span class="section-title">Recipe / Ingredients</span>
                <p><em><?php echo $food['recipe']; ?></em></p>
                
                <hr>

                <span class="section-title">Instructions</span>
                <p><?php echo $food['instructions']; ?></p>
            </div>

        </div>
    </div>

    <script>
    function addLike(foodId) {
        const formData = new FormData();
        formData.append('id', foodId);

        fetch('like_food.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(newCount => {
            document.getElementById('like-count').innerText = newCount;
        })
        .catch(error => console.error('Error:', error));
    }
    </script>

</body>
</html>