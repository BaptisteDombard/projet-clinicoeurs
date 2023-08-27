<?php /* Template Name: Clinijunior page template */ ?>
<?= get_header()?>
<main class="main">
    <section class="clinijunior" aria-labelledby="clinijunior__first-title">
        <div class="clinijunior__texts">
            <h2 class="clinijunior__title" id="clinijunior__first-title" role="heading" aria-level="2">Des petits anges à la rescousse</h2>
            <p class="clinijunior__first-excerpt">Les Clinijuniors rencontrent des personnes âgées dans une atmosphère chaleureuse et détendue pour partager un bon moment ensemble.
                <br>Ces jeunes ainsi que ces personnes âgées profitent de ce moment convivial pour s’échanger des savoirs et savoir-faire.</p>
        </div>
        <img class="clinijunior__img" src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
    </section>
    <section class="clinijunior" aria-labelledby="clinijunior__sec-title">
        <div class="clinijunior__texts">
            <h2 class="clinijunior__title" id="clinijunior__sec-title" role="heading" aria-level="2">Une relation à double sens</h2>
            <p class="clinijunior__excerpt">Les aînés apprennent aux jeunes le tricot, la cuisine, l’histoire et les enfants, quant à eux,
                leur apportent de l’enthousiasme et de la gaieté à travers des petits spectacles de danse, de chant ou tout simplement des échanges amicaux.</p>
        </div>
        <img class="clinijunior__img" src="<?= wp_get_attachment_image_url(get_field('image_2'), 'medium') ?>" alt="">
    </section>
    <?php require 'components/support.php'?>
</main>
<?= get_footer()?>