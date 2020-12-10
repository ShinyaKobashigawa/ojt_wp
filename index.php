<?php get_header(); ?>
    <!-- mainvisual -->
    <div class="mainvisual">
        <div>
        <!-- <div class="fadein">  -->
            <img class="visual_1" id="targetImage" src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png">
            <!-- <img class="visual_1" id="targetImage" src="img/visual_7_pc.png">
            <img class="visual_1" id="targetImage" src="img\visual_6_pc.png"> -->
        </div>
        <img class="logo1" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
        <img class="logo2" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png">
        <img class="sp_logo" src= "<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png">
    </div>
    <div class="mainvisual_title">
        <p>進化し続ける「街」<br>アメリカンビレッジマガジン</p>
    </div>
    <!-- mainvisualここまで -->

    <!-- main -->
    <section>
    <?php if(have_posts()): ?>
        <h2>Latest Articles</h2>
        <div class="container">
            <?php while(have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" class="blog">
                        <a href="<?php the_permalink(); ?>" class="article_card_link">
                        <?php the_post_thumbnail('', array('class' => 'article_card_thumbnail')); ?>
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_1.png" alt="" class="article_card_thumbnail"> -->
                            <div class="article_card_text">
                                <time class="article_card_date"><?php the_time('Y / m / d'); ?></time>
                                <?php the_title('<h3 class="article_card_title">', '</h3>'); ?>
                                <p class="link_text">READ MORE</p>
                                <p class="line_p"></p>
                            </div>
                        </a>
                </article>
            <?php endwhile; ?>
            <?php else: ?>
                <h2 class="subtitle">投稿はありません</h2>
            <?php endif; ?>
        </div>
    </section>
    <!-- mainここまで -->
<?php get_footer(); ?>