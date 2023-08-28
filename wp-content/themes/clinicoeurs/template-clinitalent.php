<?php /* Template Name: Clinitalent page template */ ?>
<?= get_header()?>
    <main class="main">
        <section class="clinitalents" aria-labelledby="clinitalents__title">
            <h2 class="clinitalents__title" role="heading" aria-level="2" id="clinitalents__title">Nos Clinitalents</h2>
            <p class="clinitalents__excerpt">Notre équipe de bénévoles met à contribution leurs talents évoluant au grès des opportunités.
                <br>Voici quelques services qu’elle vous propose.</p>
            <?php
            // Faire une requête en DB pour récupérer
            $talents = new WP_Query([
                'post_type' => 'talent',
            ]);
            // Lancer la boucle pour afficher chaque animal
            if ($talents->have_posts()): while ($talents->have_posts()): $talents->the_post(); ?>
                <section class="clinitalent" aria-labelledby="clinitalent__title">
                    <div class="clinitalent__texts">
                        <h3 class="clinitalent__title" role="heading" aria-level="3" id="clinitalent__title"><?= get_the_title()?></h3>
                        <p class="clinitalent__excerpt"><?= get_the_content()?></p>
                    </div>
                    <?= get_the_post_thumbnail(null, 'medium', ['class'=>'clinitalent__img'])?>
                </section>
            <?php endwhile;endif;
            wp_reset_postdata();?>
            <section class="clinitalent" aria-labelledby="clinitalent__title">
                <div class="clinitalent__texts">
                    <h3 class="clinitalent__title" role="heading" aria-level="3" id="clinitalent__title">Et bien d’autres choses...</h3>
                    <p class="clinitalent__excerpt">Nos clinitalents proposent également tout un tas d’activités.
                        Par exemple, Joëlle organise des sessions de grimage pour faire ressortir notre enfant intérieur.</p>
                </div>

                <img src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="" class="clinitalent__img">
            </section>
            <p class="clinitalents__shop-excerpt">Les Clinitalents réalisent également les articles vendus dans <a href="<?=get_permalink(get_page_by_path( 'nos-produits' ))?>" class="clinitalents__shop-link">notre boutique</a>.</p>
        </section>
        <?php include 'components/support.php'?>
    </main>
<?= get_footer()?>
