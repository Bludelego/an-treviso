<div class="home-intro">
    <?php $home_intro = get_field('home_intro'); ?>
    <?php if ($home_intro) : ?>
        <img class="home-intro__img" src="<?php echo $home_intro['image']; ?>" alt="">
        <div class="home-intro__content">
        </div>
    <?php else : ?>
        <h3>Add home intro from Home -> Home intro tab</h3>
    <?php endif; ?>

    <a href="#" class="home-intro__down">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/static/arrow-intro.svg" alt="">
    </a>
</div>