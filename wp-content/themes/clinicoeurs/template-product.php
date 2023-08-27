<?php /* Template Name: Products page template */ ?>
<?= get_header()?>
<?php
// Faire une requête en DB pour récupérer
$products = new WP_Query([
    'post_type' => 'product',
]); ?>
    <main class="main">
        <section class="products" aria-labelledby="products__title">
            <h2 class="products__title" id="clinisnoez__title" role="heading" aria-level="2">Nos produits</h2>
            <p class="products__excerpt">Voici un aperçu de nos réalisations.
                Les produits que nous vous proposons sont confectionnés à la main par nos bénévoles.
                Tous les fonds sont utilisés pour améliorer les services que nous mettons à disposition.</p>
            <p class="products__excerpt">Vous pouvez nous envoyer votre commande, demande de personnalisation par <strong>mail</strong>,
                via <strong>notre formulaire de contact</strong> ou, tout simplement, en nous rendant visite dans <strong>notre boutique</strong>.</p>
            <a href="<?=get_permalink(get_page_by_path( 'contact' ))?>" class="products__link">Commander</a>
            <img class="products__img" src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
            <div class="products_container">
                <?php
                // Lancer la boucle pour afficher chaque animal
                if ($products->have_posts()): while ($products->have_posts()): $products->the_post(); ?>
                <div class="product_card">
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