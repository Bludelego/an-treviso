<?php
$memberg = get_field('memberg');
$title = $memberg["title"];
$items = $memberg["items"];
$image = $memberg["image"];
?>
<div class="memberg">
    <div class="memberg__wrap">
        <h2 class="memberg__title"><?php echo $title ?></h2>
        <div class="memberg__content">
            <?php foreach ($items as $item) : ?>
                <div class="memberg__item">
                    <div class="memberg__item-img"> <img src="<?php echo $item["image"]; ?>" alt="<?php echo $item['text'] ?>"></div>
                    <div class="memberg__item-content">
                        <h3 class="memberg__item-title"><?php echo $item["title"]; ?></h3>
                        <div class="memberg__text text"><?php echo $item['text']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>