<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Baptiste Dombard">
    <meta name="description" content="Site des Clinicoeurs de la Salm">
    <meta name="keyword" content="Clinicoeurs, Cliniclown">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= get_the_permalink()?>>">
    <meta property="og:title" content="<?= get_field('og_title')?>">
    <meta property="og:description" content="<?= get_field('og_description')?>">
    <meta property="og:image" content="">
    <meta property="og:locale" content="fr_BE">
    <title><?= get_the_title()?> - Les Clinicoeurs de la Salm</title>
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/public/css/site.css'; ?>" />
</head>
<body class="body">
<h1 class="hidden" role="heading" aria-level="1"><?= get_the_title()?> - Les Clinicoeurs de la Salm</h1>
<header class="header">
    <nav class="header__nav" aria-labelledby="header__nav-title">
        <h2 class="hidden" role="heading" aria-level="2" id="header__nav-title">Navigation principale</h2>
        <img src="<?= wp_get_attachment_image_url('59') ?>" alt="" class="logo">
        <div class="header__nav-links">
            <?php foreach(clinicoeur_get_menu('main') as $link): ?>
                <a href="<?= $link->href; ?>" class="header__nav-link">
                    <span class="header__nav-label"><?= $link->label; ?></span>
                </a>
            <?php endforeach; ?>
            <p class="header__nav-word">Nos services</p>
            <?php foreach(clinicoeur_get_menu('services') as $link): ?>
                <a href="<?= $link->href; ?>" class="header__nav-link">
                    <span class="header__nav-label"><?= $link->label; ?></span>
                </a>
            <?php endforeach; ?>
            <p class="header__nav-word">Nous soutenir</p>
            <?php foreach(clinicoeur_get_menu('support') as $link): ?>
                <a href="<?= $link->href; ?>" class="header__nav-link">
                    <span class="header__nav-label"><?= $link->label; ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </nav>
</header>
