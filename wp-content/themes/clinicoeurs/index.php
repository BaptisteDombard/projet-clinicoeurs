<?= get_header() ?>
<main class="main">
    <section class="onboarding" aria-labelledby="onboarding__title">
        <div class="onboarding__texts">
            <h2 class="hidden onboarding__title" id="onboarding__title" role="heading" aria-level="2">Bienvenue</h2>
            <p class="onboarding__excerpt">Le bonheur, la joie, le réconfort ne sont que
                quelques émotions que nos clinicoeurs ont
                pour mission d’apporter à nos chers
                bénéficiaires.</p>
        </div>
        <img src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="" class="onboarding__img">
    </section>
    <?php include 'components/serviceSection.php'?>
    <?php include 'components/support.php'?>
    <section class="news" aria-labelledby="news__title">
        <h2 class="news__title" id="news__title" role="heading" aria-level="2">Nos actualités</h2>
        <div class="news__container">
            <div class="news__texts">
                <p class="news__excerpt">Vous êtes intéressé par nos actions et notre association.</p>
                <p class="news__excerpt">N’hésitez pas à nous suivre sur les réseaux sociaux.</p>
                <div class="news__socials">
                    <div class="news__social-container">
                        <svg class="news__social-logo" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="96" height="96" viewBox="0 0 48 48">
                            <path fill="#3F51B5" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path>
                            <path fill="#FFF" d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z"></path>
                        </svg>
                        <a href="https://www.facebook.com/clinicoeurs.asbl" class="news__social-link" target="_blank">Facebook</a>
                    </div>
                    <div class="news__social-container">
                        <svg class="news__social-logo" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="96" height="96" viewBox="0 0 48 48">
                            <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fd5"></stop>
                                <stop offset=".328" stop-color="#ff543f"></stop>
                                <stop offset=".348" stop-color="#fc5245"></stop>
                                <stop offset=".504" stop-color="#e64771"></stop>
                                <stop offset=".643" stop-color="#d53e91"></stop>
                                <stop offset=".761" stop-color="#cc39a4"></stop>
                                <stop offset=".841" stop-color="#c837ab"></stop>
                            </radialGradient>
                            <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                            <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#4168c9"></stop>
                                <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                            </radialGradient>
                            <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                            <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                            <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                        </svg>
                        <a href="https://instagram.com/clinicoeurs_de_la_salm_asbl_" class="news__social-link" target="_blank">Instagram</a>
                    </div>
                </div>
            </div>
            <img src="<?=wp_get_attachment_image_url(get_field('image_2'), 'medium')?>" alt="" class="news__img">
        </div>
    </section>
    <section class="testimony" aria-labelledby="testimony__title">
        <h2 class="testimony__title" id="testimony__title" role="heading" aria-level="2">Témoignages</h2>
        <p class="testimony__excerpt">Si vous le souhaité, vous pouvez nous donner votres avis via
        <a href="<?=get_permalink(get_page_by_path( 'contact' ))?>" class="testimony__link">notre formulaire de contact</a>.</p>
        <div class="testimony__cards">
            <?php
            // Faire une requête en DB pour récupérer les témoignages
            $testimonies = new WP_Query([
                'post_type' => 'testimony',
                'post_per_page' => 3,
            ]);
            // Lancer la boucle pour afficher chaque animal
            if ($testimonies->have_posts()): while ($testimonies->have_posts()): $testimonies->the_post(); ?>
                <div class="testimony__card">
                    <p class="testimony__card-title"><?= get_the_title()?></p>
                    <p class="testimony__card-excerpt">"<?= get_the_content()?>"</p>
                </div>
            <?php endwhile;endif;
            wp_reset_postdata();?>
        </div>
    </section>
</main>
<?= get_footer() ?>

