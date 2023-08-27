<?php /* Template Name: Clinitalent page template */ ?>
<?= get_header()?>
    <main class="main">
        <section class="clinitalent" aria-labelledby="clinitalent__title">
            <h2 class="clinitalent__title" role="heading" aria-level="2" id="clinitalent__title">Nos Clinitalents</h2>
            <p class="clinitalent__excerpt">Notre équipe de bénévoles met à contribution leurs talents évoluant au grès des opportunités.
                <br>Voici quelques services qu’elle vous propose.</p>
            <section class="clinitalents__animals" aria-labelledby="clinitalent__animals-title">
                <h3 class="clinitalent__animals-title" role="heading" aria-level="3" id="clinitalent__animals-title">Les animaux visiteurs</h3>
                <p class="clinitalent__animals-excerpt">Comme le dit l’expression “ l’animal est le meilleur ami de l’homme”. Alors, pourquoi ne
                    pas les faire se rencontrer pour qu’il partage un moment de bonheur et de convivialité ?</p>
                <img src="<?= wp_get_attachment_image_url(get_field('animal_img'), 'medium') ?>" alt="" class="clinitalents__animals-img">
            </section>
            <section class="clinitalents__makeup" aria-labelledby="clinitalent__makeup-title">
                <h3 class="clinitalent__makeup-title" role="heading" aria-level="3" id="clinitalent__makeup-title">L’esthétique</h3>
                <p class="clinitalent__makeup-excerpt">L’estime de soi passe également par le bien-être. C’est Amélie, Aurélie et Cléo,
                    nos talents de l'esthétisme, qui ont le devoir de s’en assurer.</p>
                <img src="<?= wp_get_attachment_image_url(get_field('makeup_img'), 'medium') ?>" alt="" class="clinitalents__makeup-img">
            </section>
            <section class="clinitalents__craft" aria-labelledby="clinitalent__craft-title">
                <h3 class="clinitalent__craft-title" role="heading" aria-level="3" id="clinitalent__craft-title">Le bricolage</h3>
                <p class="clinitalent__craft-excerpt">Nos ateliers créatifs permettent à nos bénéficiaires de s’évader pendant quelques heures
                    des petits tracas quotidiens et de se libérer l’esprit.</p>
                <img src="<?= wp_get_attachment_image_url(get_field('craft_img'), 'medium') ?>" alt="" class="clinitalents__craft-img">
            </section>
            <section class="clinitalents__dance" aria-labelledby="clinitalent__dance-title">
                <h3 class="clinitalent__dance-title" role="heading" aria-level="3" id="clinitalent__dance-title">La danse assise</h3>
                <p class="clinitalent__dance-excerpt">Pas besoin d’être debout pour se trémousser. Nos danses assises permettent de s’amuser
                    en étant confortablement assis.</p>
                <img src="<?= wp_get_attachment_image_url(get_field('dance_img'), 'medium') ?>" alt="" class="clinitalents__dance-img">
            </section>
            <section class="clinitalents__other" aria-labelledby="clinitalent__other-title">
                <h3 class="clinitalent__other-title" role="heading" aria-level="3" id="clinitalent__other-title">Et bien d’autres choses...</h3>
                <p class="clinitalent__other-excerpt">Nos clinitalents proposent également tout un tas d’activités.
                    Par exemple, Joëlle organise des sessions de grimage pour faire ressortir notre enfant intérieur.</p>
                <img src="<?= wp_get_attachment_image_url(get_field('other_img'), 'medium') ?>" alt="" class="clinitalents__other-img">
            </section>
            <p class="clinitalents__shop-excerpt">Les Clinitalents réalisent également les articles vendus dans <a href="<?=get_permalink(get_page_by_path( 'nos-produits' ))?>" class="clintalents__shop-link">notre boutique</a>.</p>
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
