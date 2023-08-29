<footer class="footer">
    <nav class="footer__nav">
        <h2 class="hidden">Navigation secondaire</h2>
        <ul class="footer__links">
            <?php foreach(clinicoeur_get_menu('footer') as $link): ?>
                <li class="footer__item">
                    <a href="<?= $link->href; ?>" class="footer__link"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <ul class="footer__links">
            <?php foreach(clinicoeur_get_menu('services') as $link): ?>
                <li class="footer__item">
                    <a href="<?= $link->href; ?>" class="footer__link"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <address class="footer__contacts">
        <p class="footer__address">
            Place de Salm, 2 S22
            <br>B-6690 Vielsalm
        </p>
        <a href="tel:+32493718737" class="footer__tel">+32 (0)493 71 87 37</a>
        <a href="mailto:clinicoeurs@gmail.com" class="footer__mail">clinicoeurs@gmail.com</a>
    </address>
</footer>
<script type="application/javascript" src="<?= clinicoeur_mix('/js/script.js')?>"></script>
</body>
</html>
