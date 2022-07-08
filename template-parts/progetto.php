<div class="progetto" id="js-progetto">
    <?php $progetto = get_field('progetto'); ?>
    <?php if ($progetto) : ?>
        <div class="progetto__wrap">
            <div class="progetto__img">
                <div class="progetto__image" data-stellar-ratio="1.3" data-stellar-vertical-offset="900" style="background-image: url('<?php echo $progetto['image']; ?>');"></div>
                <h2 class="progetto__title"><?php echo $progetto['title']; ?></h2>
            </div>
            <div class="progetto__content">
                <div class="progetto__text text"><?php echo $progetto['text']; ?></div>
            </div>
        </div>
    <?php endif; ?>
</div>