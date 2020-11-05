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
        
<h2 class="shop-list-header">Wybierz sklep</h2>
<ul class="shop-list">
    <?php foreach ($shops as $shop): ?>
    <li>
        <a href="MainPageController?shop=<?php echo htmlentities($shop['_idShop'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlentities($shop['_name'], ENT_QUOTES, 'UTF-8') ?></a>
    </li>
    <?php endforeach; ?>
</ul>

    </article>
</main>

</body>
</html>

