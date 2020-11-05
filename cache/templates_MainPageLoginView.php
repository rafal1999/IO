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
        
<h2>Logowanie</h2>
<form action="?controller=LoginController&and;idshop=<?php echo htmlentities($idShop, ENT_QUOTES, 'UTF-8') ?>" method="post" class="full-width">
    <div class="text-input-group">
        <label for="login">E-mail</label>
        <input type="text" id="login" name="login">
    </div>
    <div class="text-input-group">
        <label for="password">Hasło</label>
        <input type="password" id="password" name="password">
    </div>
    <?php if($incorrect): ?>
    <p class="incorrect">
        Nieprawidłowa nazwa użytkownika lub hasło.
    </p>
    <?php endif; ?>
    <div class="submit-group">
        <button type="submit" name="submit-login">Zaloguj się</button>
    </div>
</form>

    </article>
</main>

</body>
</html>

