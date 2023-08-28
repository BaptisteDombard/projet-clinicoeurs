<?php /* Template Name: Donation page template */ ?>
<?= get_header()?>
    <main class="main">
        <section class="donations" aria-labelledby="donations__title">
            <h2 class="donations__title" role="heading" aria-level="2" id="donations__title">Vous voulez nous aider en faisant un don ?</h2>
            <p class="donations__excerpt">Il n’y a pas qu’une seule manière de nous faire un don.
                <br>Voici comment vous pouvez nous aider.</p>
            <div class="donation__container">
                <section class="donation" aria-labelledby="donation__money-title">
                    <h3 class="donation__title" role="heading" aria-level="3" id="donation__money-title">Don d’argent</h3>
                    <p class="donation__excerpt">Vous pouvez nous faire un don du montant que vous souhaitez sur le compte en banque suivant :
                        <span class="donation__account">BE 59 0018 4105 2926</span>
                    </p>
                </section>
                <section class="donation" aria-labelledby="donation__material-title">
                    <h3 class="donation__title" role="heading" aria-level="3" id="donation__material-title">Don de matériel</h3>
                    <p class="donation__excerpt">Vous pouvez nous faire un don de matériel en nous contactant par mail, téléphone ou via
                        <a href="<?=get_permalink(get_page_by_path( 'contact' ))?>" class="donation__link">notre formulaire</a>.
                    </p>
                </section>
                <section class="donation" aria-labelledby="donation__legs-title">
                    <h3 class="donation__title" role="heading" aria-level="3" id="donation__legs-title">Legs en duo</h3>
                    <p class="donation__excerpt">Le Legs est la transmission à titre gratuit d'un ou plusieurs biens du défunt,
                        faite de son vivant par testament, mais qui ne prendra effet qu'à son décès.
                        <br>Le Legs en duo, quand à lui, se constitue de 2 legs. Une somme ou un pourcentage
                        est légué à un héritier via un testament et une autre somme ou pourcentage est destiné à une bonne cause : l’ASBL. </p>
                    <a href="https://www.dons-legs.be/v2/legs-en-duo/" class="donation__link" target="_blank">Plus d'information</a>
                </section>
            </div>
        </section>
        <section class="fiscal" aria-labelledby="fiscal__title">
            <h2 class="fiscal__title" role="heading" aria-level="2" id="fiscal__title">Déduction fiscale</h2>
            <p class="fiscal__excerpt">En plus de faire une bonne action, vous aurez droit à une réduction d’impôt.
                Pour plus d’informations, veuillez consulter le site de
                <a href="https://finances.belgium.be/fr/particuliers/avantages_fiscaux/dons" class="fiscal__link" target="_blank">SPF Finance</a>.
            </p>
        </section>
    </main>
<?= get_footer()?>