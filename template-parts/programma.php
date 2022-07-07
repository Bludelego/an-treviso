<?php
$programma = get_field('programma');
$title = $programma["title"];
$text = $programma["text"];
$image_before = $programma["image_top"];
$image_after = $programma["image_bottom"];
$btn_text = $programma["btn_text"];
$btn_url = $programma["btn_url"];
?>
<div class="programma">
    <div class="programma__wrap">
        <div class="programma__img">
            <img src="<?php echo $image_before ?>" alt="">
        </div>

        <div class="programma__content">
            <h2 class="programma__title"><?php echo $title ?></h2>
            <div class="programma__text text"><?php echo $text ?></div>
            <a class="programma__link link" href="<?php echo $btn_url ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/static/link.svg" alt="">
                <span><?php echo $btn_text ?></span>
            </a>
        </div>

        <div class="programma__after">
            <img src="<?php echo $image_after ?>" alt="">
        </div>
    </div>
</div>