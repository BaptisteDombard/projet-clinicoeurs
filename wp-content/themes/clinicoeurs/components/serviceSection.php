<section class="services" aria-labelledby="services__title">
    <h2 class="services__title" role="heading" aria-level="2" id="services__title">Notre cœur à quatre feuilles</h2>
    <p class="services__excerpt">Notre grand cœur se sépare en quatre parties que voici.</p>
    <div class="services__container">
        <?php
        // Faire une requête en DB pour récupérer les services
        $services = new WP_Query([
            'post_type' => 'service',
        ]);
        // Lancer la boucle pour afficher chaque animal
        if ($services->have_posts()): while ($services->have_posts()): $services->the_post(); ?>
            <section class="service service__<?=strtolower(get_the_title())?>" aria-labelledby="services__<?=strtolower(get_the_title())?>-title">
                <h3 class="service__title" role="heading" aria-level="3" id="services__<?=strtolower(get_the_title())?>-title"><?=get_the_title()?></h3>
                <p class="service__excerpt"><?=get_the_content()?></p>
                <a href="<?=get_permalink(get_page_by_path(get_the_title()))?>" class="service__link service__<?=strtolower(get_the_title())?>-link">En savoir plus sur les <?=get_the_title()?></a>
            </section>
        <?php endwhile;endif;
        wp_reset_postdata();?>
    </div>
</section>