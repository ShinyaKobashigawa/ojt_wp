<!-- 単一記事用のファイル -->
<?php get_header(); ?>

<main id="margin-for-fixed">
<?php if (hve_post()) { ?>


<?php the_post(); ?>
<h1><?php the_title(); ?></h1>
<hr>
<p>
<?php the_content(); ?>
</p>
<?php } else { ?>
<p>お探しの記事は見つかりませんでした</p>
<?php } ?>

</main>
<?php get_footer(); ?>