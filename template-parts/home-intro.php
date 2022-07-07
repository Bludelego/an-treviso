<div class="home-intro">
    <?php $home_intro = get_field('home_intro'); ?>
    <?php if ($home_intro) : ?>
        <img src="<?php echo $home_intro['image']; ?>" alt="">
        <div class="home-intro__content">
            <h1 class="home-intro__title"><?php echo $home_intro['title']; ?></h1>
            <!-- <h3 class="home-intro__subtitle"><?php echo $home_intro['sottotitolo']; ?></h3> -->
        </div>
    <?php else : ?>
        <h3>Add home intro from Home -> Home intro tab</h3>
    <?php endif; ?>

    <div class="arrow-down">
        <img src="../arrow-intro.svg" alt="">
    </div>
</div>
