<?php /* Template Name: Clinijunior page template */ ?>
<?php require 'components/support.php'?>
<?= get_header()?>
<main class="main">
    <section class="clinijunior__first" aria-labelledby="clinijunior__first-title">
        <h2 class="clinijunior__first-title" id="clinijunior__first-title" role="heading" aria-level="2">Des petits anges à la rescousse</h2>
        <p class="clinijunior__first-excerpt">Les Clinijuniors rencontrent des personnes âgées dans une atmosphère chaleureuse et détendue pour partager un bon moment ensemble.
            Ces jeunes ainsi que ces personnes âgées profitent de ce moment convivial pour s’échanger des savoirs et savoir-faire.</p>
        <img class="clinijunior__first-img" src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
    </section>
    <section class="cliniclown__sec" aria-labelledby="cliniclown__sec-title">
        <h2 class="cliniclown__sec-title" id="cliniclown__sec-title" role="heading" aria-level="2">Une relation à double sens</h2>
        <p class="cliniclown__sec-excerpt">Les aînés apprennent aux jeunes le tricot, la cuisine, l’histoire et les enfants, quant à eux,
            leur apportent de l’enthousiasme et de la gaieté à travers des petits spectacles de danse, de chant ou tout simplement des échanges amicaux.</p>
        <img class="cliniclown__sec-img" src="<?= wp_get_attachment_image_url(get_field('image_2'), 'medium') ?>" alt="">
    </section>
    <?= get_template_part('components/support.php')?>
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