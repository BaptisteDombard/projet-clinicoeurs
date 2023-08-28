<?php /* Template Name: Clinisnoez page template */ ?>
<?= get_header()?>
    <main class="main">
        <section class="clinisnoez" aria-labelledby="clinisnoez__title">
            <div class="clinisnoez__texts">
                <h2 class="clinisnoez__title" id="clinisnoez__title" role="heading" aria-level="2">Qu’est ce que le Snoezelen ?</h2>
                <p class="clinisnoez__excerpt">Le snoezelen consiste à proposer des activités dans un environnement qui va stimuler les 5 sens,
                    à travers différents effets lumineux, jeux de couleurs, sons, musiques, parfums et différentes textures de matières, générant plaisir et bien-être.</p>
            </div>
            <img class="clinisnoez__img" src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium') ?>" alt="">
        </section>
        <?php include 'components/support.php'?>
    </main>
<?= get_footer()?>