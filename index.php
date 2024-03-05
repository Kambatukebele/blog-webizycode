<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset')  ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name')  ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open(); ?>
    <header style="background-image: url(<?= get_template_directory_uri() . '/assets/images/bg-image.png'?>);"
        class="w-full h-fit">
        <div class="w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
            <!-- Navigation Big Screen and logo -->
            <?php get_template_part('template-parts/nav-big-screen') ?>
            <!-- end Navigation Big Screen and logo -->
            <!-- Navigation on Small Mobile -->
            <?php get_template_part('template-parts/nav-small-screen') ?>
            <!-- END Navigation on Small Mobile -->
        </div>
        <!-- Header Section -->
        <?php get_template_part('template-parts/header-section') ?>
    </header>


    <!-- Blog list -->
    <section class="w-full h-fit  mb-12 py-10">
        <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
            <!--Upper -->
            <!-- <div class="mb-10">
                <h3 class="text-black font-semibold text-3xl text-center mb-5">
                    Shopify
                </h3>
            </div> -->
            <!-- body section -->
            <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
                <?php if(have_posts()): ?>
                <?php while(have_posts()) : the_post() ?>
                <div
                    class="my-4 pb-5 rounded-lg w-[290px] relative sm:w-[350px] md:w-[400px] xl:w-[380px] mx-auto border hover:shadow-xl">
                    <div class="w-[290px] h-[190px] sm:w-[350px] md:w-[400px] xl:w-[380px]">
                        <?php the_post_thumbnail('post_preview'); ?>
                    </div>
                    <div class="md:max-w-[550px]">
                        <h4 class="text-black text-center px-3 font-semibold text-2xl my-5">
                            <?php the_title(); ?>
                        </h4>
                        <p class="font-base font-normal text-gray-700 px-5 mb-5 text-center">
                            <?= substr(get_the_excerpt(), 0,50); ?>...
                        </p>
                        <p
                            class="block bg-purple-700 text-white w-36 rounded hover:bg-black  py-2 mx-auto text-base font-normal text-center">
                            <a class="block" href="<?php the_permalink(); ?>">
                                Read More
                            </a>
                        </p>
                        <p
                            class="bg-purple-700 text-white w-24 absolute top-2 left-2  text-center text-xs py-2 rounded-md">
                            01-02-23
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- Maybe will be deleted -->
            <div class="flex justify-center items-center">
                <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3"
                    href="{{ route('blog.category',  $shopifyBlog->category) }}">All Posts</a>
            </div>
            <!-- End Maybe will be deleted -->
        </div>
    </section>
    <!-- END Blog list -->
    <!-- Footer -->
    <?php get_template_part('template-parts/footer') ?>
    <?php wp_footer(); ?>
</body>

</html>