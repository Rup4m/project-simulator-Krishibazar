<?php 
// This include already handles session_start() and authentication logic
include("../php/dashboard.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Krishibazar | Home</title>
</head>
<body style="background-color: #F4F4F4;">
    <?php include("includes/header.php"); ?>

    <div class="dashboard-wrapper">
        <div class="ads-container">
            <div class="ad-box">advertisements</div>
            <div class="ad-stack">
                <div class="ad-box">offers</div>
                <div class="ad-box">advertisements</div>
            </div>
            <div class="ad-box x-large">various shop advertisements</div>
            <div class="customer-care-card">
                <h4>Customer Care</h4>
                <ul>
                    <li>1. Help center</li>
                    <li>2. How to buy</li>
                    <li>3. Return & Refunds</li>
                    <li>4. Contact us</li>
                    <li>5. term & Conditions</li>
                    <li>6. CCMS</li>
                </ul>
            </div>
        </div>

        <h3 class="section-title">Categories</h3>
        <div class="categories-strip">
            <div class="cat-items-row">
                <?php foreach($categories as $cat_name): ?>
                    <div class="cat-circle">
                        <img src="../images/placeholder_icon.png" alt="<?php echo $cat_name; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="#" class="view-more-link">View More categories</a>
        </div>

        <div class="products-grid">
            <?php foreach($products as $product): ?>
                <div class="product-card">
                    <span class="product-label"><?php echo $product['name']; ?></span>
                    <small><?php echo $product['price']; ?></small>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>