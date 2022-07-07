<?php

/**
 * Template Name: Home
 */
get_header(); ?>
<?php require_once __DIR__ . '/template-parts/home-intro.php'; ?>
<?php require_once __DIR__ . '/template-parts/progetto.php'; ?>
<div class="container container--bg">
    <?php require_once __DIR__ . '/template-parts/memberg.php'; ?>
</div>
<div class="container">
    <?php require_once __DIR__ . '/template-parts/programma.php'; ?>
</div>

<?php get_footer(); ?>