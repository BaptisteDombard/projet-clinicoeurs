<?php
// Faire une requête en DB pour récupérer
$services = new WP_Query([
    'post_type' => 'service',
]);
$testimonies = new WP_Query([
    'post_type' => 'testimony',
]);
?>
<?= get_header() ?>
<main class="main">
    <section class="onboarding" aria-labelledby="onboarding__title">
        <h2 class="hidden onboarding__title" id="onboarding__title" role="heading" aria-level="2">Bienvenue</h2>
        <p class="onboarding__excerpt">Le bonheur, la joie, le réconfort ne sont que
            quelques émotions que nos clinicoeurs ont
            pour mission d’apporter à nos chers
            bénéficiaires.</p>
        <img src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="" class="onboarding__img">
    </section>
    <section class="services" aria-labelledby="services__title">
        <h2 class="services__title" role="heading" aria-level="2" id="services__title">Notre cœur à quatre feuilles</h2>
        <p class="services__excerpt">Notre grand cœur se sépare en quatre parties que voici.</p>
        <?php
        // Lancer la boucle pour afficher chaque animal
        if ($services->have_posts()): while ($services->have_posts()): $services->the_post(); ?>
            <section class="service services__<?=get_the_title()?>>" aria-labelledby="services__<?=get_the_title()?>-title">
                <h3 class="service__title services__<?=get_the_title()?>-title" role="heading" aria-level="3" id="services__<?=get_the_title()?>-title"><?=get_the_title()?></h3>
                <p class="service__excerpt services__<?=get_the_title()?>-excerpt"><?=get_the_content()?></p>
                <a href="<?=get_permalink(get_page_by_path(get_the_title()))?>" class="service__link services__<?=get_the_title()?>-link">En savoir plus sur les <?=get_the_title()?></a>
            </section>
        <?php endwhile;endif;?>
    </section>
    <section class="support" aria-labelledby="support__title">
        <h2 class="support__title" id="support__title" role="heading" aria-level="2">Vous souhaitez nous aider ?</h2>
        <p class="support__excerpt">
            Retrouver toutes les possibilités pour nous soutenir via les pages
            <a href="<?=get_permalink(get_page_by_path( 'nos-produits' ))?>">Nos produits</a>,
            <a href="<?=get_permalink(get_page_by_path( 'benevolat' ))?>">Bénévolat</a> et
            <a href="<?=get_permalink(get_page_by_path( 'dons' ))?>">Dons</a>.
        </p>
    </section>
    <section class="news" aria-labelledby="news__title">
        <h2 class="news__title" id="news__title" role="heading" aria-level="2">Nos actualités</h2>
        <p class="news__excerpt">Vous êtes intéressé par nos actions et notre association.
            <br>N’hésitez pas à nous suivre sur les réseaux sociaux.</p>
        <img src="<?=wp_get_attachment_image_url(get_field('image_2'), 'medium')?>" alt="" class="news__img">
        <div class="news__socials">
            <a href="https://www.facebook.com/clinicoeurs.asbl" class="news__socials-link" target="_blank">Facebook</a>
            <a href="https://instagram.com/clinicoeurs_de_la_salm_asbl_" class="news__socials-link" target="_blank">Instagram</a>
        </div>
    </section>
    <section class="testimony" aria-labelledby="testimony__title">
        <h2 class="testimony__title" id="testimony__title" role="heading" aria-level="2">Témoignages</h2>
        <?php
        // Lancer la boucle pour afficher chaque animal
        if ($testimonies->have_posts()): while ($testimonies->have_posts()): $testimonies->the_post(); ?>
            <div class="testimony__card">
                <p class="testimony__card-title"><?= get_the_title()?></p>
                <p class="testimony__card-excerpt">"<?= get_the_content()?>"</p>
            </div>
        <?php endwhile;endif;?>
    </section>
</main>
<?= get_footer() ?>

