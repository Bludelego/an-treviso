<div class="progetto">

    <?php $progetto = get_field('progetto'); ?>
    <?php if ($progetto) : ?>

        <div class="progetto__wrap">
            <div class="progetto__img">
                <img src="<?php echo $progetto['image']; ?>" alt="">
                <h2 class="progetto__title"><?php echo $progetto['title']; ?></h2>
            </div>
            <div class="progetto__content">
                <div class="progetto__text text"><?php echo $progetto['text']; ?></div>
            </div>
            
        </div>
    <?php endif; ?>


</div>