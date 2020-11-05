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
    
<main>
    <article class="single-column-layout <?php echo htmlentities($singleColumnClass, ENT_QUOTES, 'UTF-8') ?>">
        
<h2>Koszyk</h2>
<table class="cart-table">
    <?php foreach($productsInCart as $product): ?>
    <tr>
        <td><img src="<?php echo htmlentities(PRODUCT_PICTURE_PATH .  $product['_picture'], ENT_QUOTES, 'UTF-8') ?>"></td>
        <td><?php echo htmlentities($product['_name'], ENT_QUOTES, 'UTF-8') ?></td>
        <td><input type="text" value="<?php echo htmlentities($product['_count'], ENT_QUOTES, 'UTF-8') ?>" class="input-number-in-cart" data-product-id="<?php echo htmlentities($product['_idProduct'], ENT_QUOTES, 'UTF-8') ?>"> szt</td>
        <td><button class="button-delete button-delete-cart" title="Usuń" data-product-id="<?php echo htmlentities($product['_idProduct'], ENT_QUOTES, 'UTF-8') ?>"></button></td>
        <td><?php echo htmlentities($product['_totalPrice'], ENT_QUOTES, 'UTF-8') ?> zł</td>
    </tr>
    <?php endforeach; ?>
</table>
<div class="cart-summary">
    Razem: <span class="cart-total-price"><?php echo htmlentities($totalPrice, ENT_QUOTES, 'UTF-8') ?> zł</span>
</div>
<div class="submit-group">
    <a href="?controller=MainPageController" class="button-like">Kontynuuj zakupy</a>
    <a href="?controller=CheckoutController" class="button-like">Do kasy</a>
</div>

    </article>
</main>

</body>
</html>

