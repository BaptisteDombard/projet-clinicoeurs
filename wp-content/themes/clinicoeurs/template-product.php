<?php /* Template Name: Products page template */ ?>
<?= get_header()?>
<?php
// Faire une requête en DB pour récupérer
$products = new WP_Query([
    'post_type' => 'product',
]); ?>
    <main class="main">
        <section class="products" aria-labelledby="products__title">
            <div class="products__info-container">
                <div class="products__info-texts">
                    <h2 class="products__info-title" id="products__title" role="heading" aria-level="2">Nos produits</h2>
                    <p class="products__info-excerpt">Voici un aperçu de nos types de réalisations.
                        <br> Les produits que nous vous proposons sont confectionnés à la main par nos bénévoles.</p>
                    <p class="products__info-excerpt">Tout nos articles sont disponible plus en détails sur notre page
                        <a href="https://www.facebook.com/clinicoeurs.asbl" class="products__info-social" target="_blank">Facebook</a></p>
                    <p class="products__info-excerpt">Vous pouvez nous envoyer votre commande, demande de personnalisation par mail,
                        via notre formulaire de contact ou, tout simplement, en nous rendant visite dans notre boutique.</p>
                    <a href="<?=get_permalink(get_page_by_path( 'contact' ))?>" class="products__info-link">Nous contacter</a>
                </div>
                <img class="products__info-img" src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
            </div>
            <div class="products__container">
                <?php
                // Lancer la boucle pour afficher chaque animal
                if ($products->have_posts()): while ($products->have_posts()): $products->the_post(); ?>
                <div class="product__card">
                    <figure class="product__card-fig">
                        <figcaption class="product__card-title"><?= get_the_title()?></figcaption>
                        <?= get_the_post_thumbnail(null, 'product_size', ['class'=>'product__card-img'])?>
                    </figure>
                </div>
                <?php endwhile;endif;?>
            </div>
        </section>
    </main>
<?= get_footer()?>