<?php /* Template Name: Clinisnoez page template */ ?>
<?= get_header()?>
    <main class="main">
        <section class="clinisnoez" aria-labelledby="clinisnoez__title">
            <h2 class="clinisnoez__title" id="clinisnoez__title" role="heading" aria-level="2">Qu’est ce que le Snoezelen ?</h2>
            <p class="clinisnoez__excerpt">Le snoezelen consiste à proposer des activités dans un environnement qui va stimuler les 5 sens,
                à travers différents effets lumineux, jeux de couleurs, sons, musiques, parfums et différentes textures de matières, générant plaisir et bien-être.</p>
            <img class="clinisnoez__img" src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
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
    </main>
<?= get_footer()?>