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
        
<h2>Zakładanie konta</h2>
<form class="full-width" action="create-account.html" method="post">
    <div class="text-input-group">
        <label for="email">E-mail*</label>
        <input type="text" id="email" name="email">
    </div>
    <div class="text-input-group">
        <label for="password">Hasło*</label>
        <input type="password" id="password" name="password">
    </div>
    <div class="text-input-group">
        <label for="password-repeat">Powtórz hasło*</label>
        <input type="password" id="password-repeat" name="password-repeat">
    </div>
    <div class="columns-inside">
        <div class="text-input-group column-first-name">
            <label for="first-name">Imię*</label>
            <input type="text" id="first-name" name="first-name">
        </div>
        <div class="text-input-group column-last-name">
            <label for="last-name">Nazwisko*</label>
            <input type="text" id="last-name" name="last-name">
        </div>
    </div>
    <div class="columns-inside">
        <div class="text-input-group column-street">
            <label for="street">Ulica</label>
            <input type="text" id="street" name="street">
        </div>
        <div class="text-input-group column-house-number">
            <label for="house-number">Numer domu*</label>
            <input type="text" id="house-number" name="house-number">
        </div>
        <div class="text-input-group  column-flat-number">
            <label for="flat-number">Numer lokalu</label>
            <input type="text" id="flat-number" name="flat-number">
        </div>
    </div>
    <div class="columns-inside">
        <div class="text-input-group column-postal-code">
            <label for="postal-code">Kod pocztowy*</label>
            <input type="text" id="postal-code" name="postal-code">
        </div>
        <div class="text-input-group column-town">
            <label for="town">Miejscowość*</label>
            <input type="text" id="town" name="town">
        </div>
    </div>
    <div class="text-input-group column-phone-number">
        <label for="phone-number">Telefon</label>
        <input type="text" id="phone-number" name="phone-number">
    </div>
    <div class="checkbox-group">
        <label><input type="checkbox" name="accept-conditions" id="accept-conditions"> Akceptuję regulamin sklepu</label>
    </div>
    <p>* pole obowiązkowe</p>
    <div class="submit-group">
        <button type="submit" name="submit-account">Załóż konto</button>
    </div>
</form>

    </article>
</main>

</body>
</html>

