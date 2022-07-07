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
        <img class="programma__img" src="<?php echo $image_before ?>" alt="">

        <div class="programma__content">
            <h2 class="programma__title"><?php echo $title ?></h2>
            <div class="programma__text text"><?php echo $text ?></div>
            <a class="programma__link" href="<?php echo $btn_url ?>">
                <?php echo $btn_text ?>
            </a>
        </div>

        <img src="<?php echo $image_after ?>" alt="">
    </div>
</div>