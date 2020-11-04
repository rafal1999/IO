<?php class_exists('Template') or exit; ?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <link href="<?php echo CSS_PATH ?>normalize.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH ?>main.css" rel="stylesheet">
</head>
<body>
    <header class="top-header">
        <h1 class="business-name"><?php echo htmlentities($businessName, ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="motto"><?php echo htmlentities($motto, ENT_QUOTES, 'UTF-8') ?></p>
        <div class="header-buttons">
            <?php foreach ($headerButtons as $button): ?>
                <a href="<?php echo htmlentities($button['url'], ENT_QUOTES, 'UTF-8') ?>" class="button-like"><?php echo htmlentities($button['text'], ENT_QUOTES, 'UTF-8') ?></a>
            <?php endforeach; ?>
        </div>
    </header>
    
<div class="menu-content-container">
    <nav>
        
<h2 class="category-list-header">Kategorie</h2>
<ul class="category-list">
<?php foreach($categories as $category): ?>
    <li>
        <a href="kontroler-sklepu?category=<?php echo htmlentities(urlencode($category['_idCategory']), ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlentities($category['_categoryName'], ENT_QUOTES, 'UTF-8') ?></a>
    </li>
<?php endforeach; ?>
</ul>

    </nav>
    <div class="main-column">
        
<section>
    <form action="kontroler-sklepu" method="get">
        <div class="text-input-group">
            <label for="search">Znajdź produkt</label>
            <input name="search" id="search" type="text">
            <button type="submit">Szukaj</button>
        </div>
        
    </form>
</section>
<section>
    <main>
        
<h2><?php echo htmlentities($resultsHeader, ENT_QUOTES, 'UTF-8') ?></h2>
<?php if(isset($resultsDescription)): ?>
<p>
    <?php echo htmlentities($resultsDescription, ENT_QUOTES, 'UTF-8') ?>
</p>
<?php endif; ?>
<?php foreach($products as $product): ?>
<article class="product">
    <div class="product-image">
        <img src="images/<?php echo htmlentities($product['_picture'], ENT_QUOTES, 'UTF-8') ?>" alt="Ilustracja produktu">
    </div>
    <div class="product-info">
        <h3><a href="productControler?idProduct=<?php echo htmlentities(urlencode($product['_idProduct']), ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlentities($product['_name'], ENT_QUOTES, 'UTF-8') ?></a></h3>
        <p class="product-description"><?php echo htmlentities($product['_description'], ENT_QUOTES, 'UTF-8') ?></p>
        <?php if($product['_discount'] > 0): ?>
            <div class="product-old-price"><?php echo htmlentities($product['_price'], ENT_QUOTES, 'UTF-8') ?> zł</div>
            <div class="product-price"><?php echo htmlentities($product['_price']-$product['_discount'], ENT_QUOTES, 'UTF-8') ?> zł</div>
        <?php else: ?>
            <div class="product-price"><?php echo htmlentities($product['_price'], ENT_QUOTES, 'UTF-8') ?> zł</div>
        <?php endif; ?>
    </div>
    <div class="product-buttons">
        <button type="button" value="<?php echo htmlentities($product['_idProduct'], ENT_QUOTES, 'UTF-8') ?>"  class="add-to-cart">Do koszyka</button>
    </div>
</article>
<?php endforeach; ?>

    </main>
</section>

    </div>
</div>

</body>
</html>



