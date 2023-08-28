<?php /* Template Name: Cliniclown page template */ ?>
<?= get_header()?>
<main class="main">
    <section class="cliniclown" aria-labelledby="cliniclown__title">
        <img class="cliniclown__img" src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
        <div class="cliniclown__texts">
            <h2 class="cliniclown__title" id="cliniclown__title" role="heading" aria-level="2">Des clowns relationnel</h2>
            <p class="cliniclown__excerpt">Nous sommes des artistes professionnels spécialement formés pour apporter de la joie
                et de l'humour aux enfants hospitalisés, ainsi qu’aux personnes âgées dans les homes et autres personnes dans le besoin.
                Contrairement aux clowns traditionnels qui se concentrent souvent sur les tours de magie et les gags comiques, les Cliniclowns
                ont un rôle très particulier, plus sérieux et important en milieu hospitalier</p>
        </div>
    </section>
    <?php include 'components/support.php'?>
</main>
<?= get_footer()?>
