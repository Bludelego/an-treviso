<?php $footer = get_field('main_footer', 'option'); ?>
<footer class="main-footer">
    <div class="container">
        <div class="main-footer__wrap">
            <div class="main-footer__item">
                <?php if (get_field('opening_times', 'options')) : ?>
                    <?php require_once __DIR__ . '/template-parts/hours.php'; ?>
                <?php endif; ?>
            </div>
            <div class="main-footer__item">
                <?php require_once __DIR__ . '/template-parts/contacts.php'; ?>
            </div>
            <div class="main-footer__item">
                <?php require_once __DIR__ . '/template-parts/form.php'; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="map" id="map"></div>
        <?php require_once __DIR__ . '/template-parts/footer-bottom.php'; ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>
