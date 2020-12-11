<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>American Village</title>
</head>
<body>
    <!-- header -->
    <header>
       <?php 
            wp_nav_menu( array( 
            'menu' => 'Primary Menu',
            'menu_class' => 'header_list' 
            ) );  
        ?> 

        <!-- header sp -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="globalMenuSp">
        <?php 
            wp_nav_menu( array( 
            'menu' => 'Primary Menu',
            ) );  
        ?> 
        </nav>
    </header>
    <!-- headerここまで -->