<?php /* Template Name: Volunteers page template */?>
<?= get_header()?>
    <main class="main volunteers">
        <section class="volunteers__section" aria-labelledby="volunteers__title">
            <h2 class="volunteers__title" role="heading" aria-level="2" id="volunteers__title">Le bénévolat vous intéresse ?</h2>
            <p class="volunteers__excerpt">Devenir bénévole est une expérience
                enrichissante qui permet de faire une différence positive dans
                la communauté en donnant du temps et des talents à une cause importante.</p>
            <img src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
            <section class="volunteers__recruit" aria-labelledby="volunteers__recruit-title">
                <h3 class="volunteers__recruit-title" id="volunteers__recruit-title" role="heading" aria-level="3">Vous souhaitez devenir bénévole mais vous ne savez pas comment vous rendre utile ?</h3>
                <p class="volunteers__recruit-excerpt">Pas d’inquiétude, nous pouvons vous former aux différents postes dont nous avons besoin.
                    Vous pouvez postuler via notre formulaire de contact, en nous faisant une petite description de vos compétences.</p>
                <a href="<?=get_permalink(get_page_by_path( 'contact' ))?>" class="volunteers__recruit-link">Postuler</a>
            </section>
        </section>
    </main>
<?= get_footer()?>