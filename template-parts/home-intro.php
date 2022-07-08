<div class="home-intro">
    <?php
    $home_intro = get_field('home_intro');
    $title = $home_intro['title'];
    $image = $home_intro['image'];
    ?>
    <img class="home-intro__img" src="<?php echo $image; ?>" alt="">
    <div class="home-intro__content">
        <h1 class="home-intro__title"><?php echo $title; ?></h1>
    </div>
    <a href="#" class="home-intro__down" id="js-down">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/static/arrow-intro.svg" alt="">
    </a>
</div>