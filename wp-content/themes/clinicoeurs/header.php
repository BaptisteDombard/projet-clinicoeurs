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
        <div class="header__nav-home">
            <svg class="header__nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.81 109.42">
                <defs>
                    <style>.cls-1,.cls-2{letter-spacing:0;}.cls-3,.cls-4{fill:#cf6299;}.cls-5,.cls-6{fill:#ee8941;}.cls-4,.cls-6,.cls-7,.cls-8{stroke-width:0;}.cls-9{font-family: Quicksand-Medium, Quicksand, sans-serif;font-size:36px;font-weight:500;}  .cls-10{letter-spacing:0;}  .cls-10,.cls-7{fill:#97ccd2;}  .cls-8,.cls-2{fill:#b2cc51;}</style>
                </defs>
                <path class="cls-6" d="m33.74,10.79c9.19-21.7,25.62-3.97,25.62-3.97,0,0,18.39-16.55,28.17,3.97,10.11,21.21-26.9,43.45-26.9,43.45,0,0-36.04-21.87-26.9-43.45Z"/>
                <path class="cls-4" d="m33.74,98.63c9.19,21.7,25.62,3.97,25.62,3.97,0,0,18.39,16.55,28.17-3.97,10.11-21.21-26.9-43.45-26.9-43.45,0,0-36.04,21.87-26.9,43.45Z"/>
                <path class="cls-7" d="m10.79,81.74c-21.7-9.19-3.97-25.62-3.97-25.62,0,0-16.55-18.39,3.97-28.17,21.21-10.11,43.45,26.9,43.45,26.9,0,0-21.87,36.04-43.45,26.9Z"/>
                <path class="cls-8" d="m110.17,81.94c21.7-9.19,3.97-25.62,3.97-25.62,0,0,16.55-18.39-3.97-28.17-21.21-10.11-43.45,26.9-43.45,26.9,0,0,21.87,36.04,43.45,26.9Z"/>
                <text class="cls-9" transform="translate(136.62 66.03)">
                    <tspan class="cls-5" x="0" y="0">Clinicoeurs</tspan>
                    <tspan x="182.41" y="0"> </tspan>
                    <tspan class="cls-2" x="192.31" y="0">de</tspan>
                    <tspan class="cls-1" x="235.04" y="0"> </tspan>
                    <tspan class="cls-3" x="244.94" y="0">la</tspan>
                    <tspan class="cls-1" x="275.79" y="0"> </tspan>
                    <tspan class="cls-10" x="285.69" y="0">Salm</tspan>
                </text>
            </svg>
            <a href="<?= get_home_url()?>" class="header__nav-homelink">Acceuil</a>
        </div>
        <div class="header__nav-links">
            <ul class="header__nav-list">
            <?php foreach(clinicoeur_get_menu('main') as $link): ?>
                <li class="header__nav-item">
                    <a href="<?= $link->href; ?>" class="header__nav-link">
                        <span class="header__nav-label"><?= $link->label; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
                <li class="header__nav-item header__nav-menuitem">
                    <a href="#" class="header__nav-word">Nos services</a>
                    <ul class="header__nav-sublist">
                        <?php foreach(clinicoeur_get_menu('services') as $link): ?>
                            <li class="header__nav-subitem">
                                <a href="<?= $link->href; ?>" class="header__nav-link">
                                    <span class="header__nav-label"><?= $link->label; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="header__nav-item header__nav-menuitem">
                    <a href="#" class="header__nav-word">Nos services</a>
                    <ul class="header__nav-sublist">
                        <?php foreach(clinicoeur_get_menu('support') as $link): ?>
                            <li class="header__nav-subitem">
                                <a href="<?= $link->href; ?>" class="header__nav-link">
                                    <span class="header__nav-label"><?= $link->label; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="header__nav-burger">
            <div class="header__nav-buregerline line1"></div>
            <div class="header__nav-buregerline line2"></div>
            <div class="header__nav-buregerline line3"></div>
        </div>
    </nav>
</header>
