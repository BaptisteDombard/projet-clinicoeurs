<?php /* Template Name: About page template */ ?>
<?php
// Faire une requête en DB pour récupérer
$sponsors = new WP_Query([
    'post_type' => 'sponsor',
]);
$services = new WP_Query([
    'post_type' => 'service',
]);
?>
<?= get_header()?>
    <main class="main">
        <section class="about" aria-labelledby="about__title">
            <h2 class="about__title" role="heading" aria-level="2" id="about__title">Qui somme nous ?</h2>
            <p class="about__excerpt">Notre A.S.B.L. a pour mission d'apporter une dose de bonne humeur et un
                élan de tendresse à toutes les personnes qui en ressentent le besoin. Nous croyons que chacun mérite
                d'être entendu et soutenu, et nous nous engageons à offrir une présence stable et un soutien constant à ceux qui en ont le plus besoin.
            </p>
            <img class="about__img" src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
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
        <section class="sponsor" aria-labelledby="sponsor__title">
            <h2 class="sponsor__title" id="sponsor__title" role="heading" aria-level="2">Nous tenons à remercier nos sponsors</h2>
            <p class="sponsor__excerpt">Vous souhaitez faire partie de nos sponsors ?
                <br>Contactez nous grâce à notre formulaire de contact.</p>
            <a href="<?=get_permalink(get_page_by_path( 'contact' ))?>" class="sponsor__link">Nous contactez</a>
            <div class="sponsor_container">
                <?php
                // Lancer la boucle pour afficher chaque animal
                if ($sponsors->have_posts()): while ($sponsors->have_posts()): $sponsors->the_post(); ?>
                    <?= get_the_post_thumbnail(null, 'sponsor_size', ['class'=>'sponsor__img'])?>
                <?php endwhile;endif;?>
            </div>
        </section>
    </main>
<?= get_footer()?>