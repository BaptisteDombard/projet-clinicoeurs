<?php /* Template Name: About page template */ ?>
<?= get_header()?>
    <main class="main">
        <section class="about" aria-labelledby="about__title">
            <div class="about__texts">
                <h2 class="about__title hidden" role="heading" aria-level="2" id="about__title">Qui somme nous ?</h2>
                <p class="about__excerpt">Notre A.S.B.L. a pour mission d'apporter une dose de bonne humeur et un
                    élan de tendresse à toutes les personnes qui en ressentent le besoin. Nous croyons que chacun mérite
                    d'être entendu et soutenu, et nous nous engageons à offrir une présence stable et un soutien constant à ceux qui en ont le plus besoin.</p>
            </div>
            <img class="about__img" src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
        </section>
        <?php include 'components/serviceSection.php'?>
        <?php include 'components/support.php'?>
        <section class="sponsor" aria-labelledby="sponsor__title">
            <h2 class="sponsor__title" id="sponsor__title" role="heading" aria-level="2">Nous tenons à remercier nos sponsors</h2>
            <div class="sponsor__container">
                <?php
                // Faire une requête en DB pour récupérer
                $sponsors = new WP_Query([
                    'post_type' => 'sponsor',
                    'post_per_page' => -1,
                ]);
                // Lancer la boucle pour afficher chaque animal
                if ($sponsors->have_posts()): while ($sponsors->have_posts()): $sponsors->the_post(); ?>
                    <?= get_the_post_thumbnail(null, 'sponsor_size', ['class'=>'sponsor__img'])?>
                <?php endwhile;endif;
                wp_reset_postdata();?>
            </div>
            <div class="sponsor__texts">
                <p class="sponsor__excerpt">Vous souhaitez faire partie de nos sponsors ?
                    <br>Contactez nous grâce à notre formulaire de contact.</p>
                <a href="<?=get_permalink(get_page_by_path( 'contact' ))?>" class="sponsor__link">Nous contactez</a>
            </div>
        </section>
    </main>
<?= get_footer()?>