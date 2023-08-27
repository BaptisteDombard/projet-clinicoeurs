<?php /* Template Name: Contact page template */ ?>
<?= get_header()?>
<main class="main">
<section class="contact__section" aria-labelledby="contact__title">
    <h2 class="contact__title" role="heading" aria-level="2" id="contact__title">Contactez-nous</h2>
    <p class="contact__excerpt">Cela vous intéresserait de devenir bénévole, de nous aider ou vous avez simplement une question à nous poser.
        <br>N’hésitez pas à nous contacter, vous pouvez nous téléphoner, nous envoyer un email ou remplir le formulaire ci-dessous</p>
    <section class="contact__form" aria-labelledby="contact__form-title">
        <h3 class="contact__form-title" role="heading" aria-level="3" id="contact__form-title">Formulaire de contact</h3>
        <?php
        $feedback = clinicoeur_session_get('clinicoeur_contact_form_feedback') ?? false;
        $errors = clinicoeur_session_get('clinicoeur_contact_form_errors') ?? [];
        ?>

        <?php if ($feedback):?>
            <div class="success">
                <p>Merci de votre message</p>
                <a href="<?= get_home_url()?>" class="success__link">Revenir à l'acceuil</a>
            </div>
        <?php else:?>


            <?php if ($errors):?>
                <div class="error">
                    <p>Attention&nbsp;! Merci de corriger vos erreurs</p>
                </div>
            <?php endif;?>

            <form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="POST" class="contact">
                <div class="contact__fields">
                    <div class="field">
                        <label for="firstname" class="field__label">Prénom&ast;</label>
                        <input type="text" name="firstname" id="firstname" class="field__input">
                        <?php if ($errors['firstname'] ?? null):?>
                            <p class="field__error"><?= $errors['firstname']; ?></p>
                        <?php endif;?>
                    </div>
                    <div class="field">
                        <label for="lastname" class="field__label">Nom&ast;</label>
                        <input type="text" name="lastname" id="lastname" class="field__input">
                        <?php if ($errors['lastname'] ?? null):?>
                            <p class="field__error"><?= $errors['lastname']; ?></p>
                        <?php endif;?>
                    </div>
                    <div class="field">
                        <label for="email" class="field__label">Adresse mail&ast;</label>
                        <input type="email" name="email" id="email" class="field__input">
                        <?php if ($errors['email'] ?? null):?>
                            <p class="field__error"><?= $errors['email']; ?></p>
                        <?php endif;?>
                    </div>
                    <div class="field">
                        <label for="subject" class="field__label">Sujet&ast;</label>
                        <input type="text" name="subject" id="subject" class="field__input">
                        <?php if ($errors['subject'] ?? null):?>
                            <p class="field__error"><?= $errors['subject']; ?></p>
                        <?php endif;?>
                    </div>
                    <div class="field">
                        <label for="message" class="field__label">Message&ast;</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="field__input"></textarea>
                        <?php if ($errors['message'] ?? null):?>
                            <p class="field__error"><?= $errors['message']; ?></p>
                        <?php endif;?>
                    </div>
                </div>
                <div class="contact__footer">
                    <input type="hidden" name="action" value="clinicoeur_contact_form">
                    <input type="hidden" name="contact_nonce" value="<?= wp_create_nonce( 'clinicoeur_contact_form');?>">
                    <button class="contact__submit" type="submit">Envoyer</button>
                </div>
            </form>
        <?php endif;?>
    </section>
    <section class="contact__info" aria-labelledby="contact__info-title">
        <h3 class="hidden" role="heading" aria-level="3" id="contact__info-title">Coordonnées</h3>
        <ul class="contact__info-list">
            <li class="contact__info-item">
                <p class="contact__info-subtitle">Téléphone</p>
                <a href="tel:+32493718737" class="contact__info-phone">+32 (0)493 71 87 37</a>
            </li>
            <li class="contact__info-item">
                <p class="contact__info-subtitle">Mail</p>
                <a href="mailto:clinicoeurs@gmail.com" class="contact__info-mail">clinicoeurs@gmail.com</a>
            </li>
        </ul>
    </section>
</section>
<section class="shop__section" aria-labelledby="shop__title">
    <h2 class="shop__title" role="heading" aria-level="2" id="shop__title">Notre boutique</h2>
    <p class="shop__excerpt">Vous pouvez également venir nous rendre visite dans notre boutique. </p>
    <p class="shop__excerpt">Pour plus d’informations, n’hésitez pas à regarder notre page “<a href="<?=get_permalink(get_page_by_path( 'nos-produits' ))?>" class="shop__link">Nos produits</a>” .</p>
    <img src="<?= wp_get_attachment_image_url(get_field('image_1'), 'medium_large') ?>" alt="" class="shop__img">
    <section class="shop__info" aria-labelledby="shop__info-title">
        <h3 class="shop__info-title hidden" role="heading" aria-level="3" id="shop__info-title">Coordonnée de la boutique</h3>
        <ul class="shop__info-list">
            <li class="contact__info-item">
                <p class="shop__info-subtitle">Adresse</p>
                <p class="shop__info-adress">Place de Salm, 2 S22
                    <br>B-6690 Vielsalm</p>
            </li>
            <li class="contact__info-item">
                <p class="shop__info-subtitle">Horaire</p>
                <table class="shop__info-schedule">
                    <tbody>
                        <tr>
                            <th scope="row">Mercredi</th>
                            <td>13h30 - 18h00</td>
                        </tr>
                        <tr>
                            <th scope="row">Vendredi</th>
                            <td>10h00 - 18h00</td>
                        </tr>
                        <tr>
                            <th scope="row">Samedi</th>
                            <td>10h00 - 18h00</td>
                        </tr>
                    </tbody>
                </table>
            </li>
            <li class="shop__info-item">
                <p class="shop__info-subtitle">Téléphone pour commande</p>
                <p class="shop__info-phone">Suzanne : <a href="tel:+32493718737" class="shop__info-phonelink">+32 (0)493 71 87 37</a></p>
                <p class="shop__info-phone">Ma Pi : <a href="tel:+32495619099" class="shop__info-phonelink">+32 (0)495 61 90 99</a></p>
            </li>
        </ul>
    </section>
</section>
</main>
<?= get_footer()?>
