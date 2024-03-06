<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset')  ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>">
    <!-- Google Fonts -->
    <!--Montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- End Google Fonts -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title><?php bloginfo('name')  ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open(); ?>
    <!-- Navigation on Small Mobile -->
    <?php get_template_part('template-parts/nav-small-screen') ?>
    <!-- END Navigation on Small Mobile -->
    <header style="background-image: url(<?= get_template_directory_uri() . '/assets/images/bg-image.png'?>);"
        class="w-full h-fit">
        <div class="w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
            <!-- Navigation Big Screen and logo -->
            <?php get_template_part('template-parts/nav-big-screen') ?>
            <!-- end Navigation Big Screen and logo -->

        </div>
        <!-- Header Section -->
        <?php get_template_part('template-parts/header-section') ?>
    </header>