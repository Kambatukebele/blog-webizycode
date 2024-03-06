<?php get_header();?>
<!-- Single Post -->
<section class="w-full h-fit py-5 font-montserrat bg-white">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px] rounded-xl">
        <div class="my-4 pb-5 rounded-lg min-w-[290px] relative  mx-auto">
            <!-- <div class="min-w-[290px] h-[250px] sm:h-[330px] md:h-[390px]">
                    <img class="w-full h-full rounded-lg object-cover object-center" src="#" alt="">
                </div> -->
            <div class="">
                <h4 class="text-black text-left font-ReadexPro font-semibold text-3xl px-5 my-5">
                    <?php the_title(); ?>
                </h4>
                <!-- Category -->
                <div class="my-5 mx-5 flex justify-start items-center">
                    <p>Category: </p>
                    <!-- <p
                            class="bg-purple-700 uppercase text-white w-32  text-center font-Nunito ml-2 text-xs py-2 rounded-md">
                            <?php the_category(); ?>
                        </p> -->
                    <p class="">
                        <?php the_category(); ?>
                    </p>
                </div>
                <!-- Tags -->
                <div class="px-5 mb-5 lg:flex  lg:items-center">
                    <p>Date Publication: </p>
                    <p class="bg-purple-700 uppercase ml-3 text-white w-36  text-center text-xs py-2 rounded-md">
                        <?= get_the_date(); ?>
                    </p>
                </div>
                <div class="">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Single Post -->

<!-- Section View MOre Post -->
<section class="w-full h-fit  mb-12 py-10 font-montserrat">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
        <!--Upper -->
        <?php
// Get the ID of the current post
$current_post_id = get_the_ID();

// Set up the query arguments to exclude the current post
$args = array(
    'post__not_in' => array($current_post_id), // Exclude the current post
    'posts_per_page' => 6, // Number of posts to display
    'orderby' => 'date', // Order by date (you can change this if you want)
    'order' => 'DESC' // Order in descending order (you can change this if you want)
);

// Query posts
$related_posts = new WP_Query($args);

// Check if there are any posts
if ($related_posts->have_posts()) :
    ?>
        <div class="mb-10">
            <h3 class="text-black font-semibold text-3xl text-center mb-5">Continue Reading</h3>
        </div>
        <!-- body section -->

        <section class="w-full h-fit mb-12 py-10">
            <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
                <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                <div
                    class="my-4 font-montserrat shadow rounded-2xl pb-5 w-[290px] relative sm:w-[350px] md:w-[400px] xl:w-[380px] mx-auto hover:shadow-xl">
                    <div class="rounded-xl">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div class="md:max-w-[550px]">
                        <h4 class="text-black text-center px-3 font-semibold text-2xl my-5">
                            <?php the_title(); ?>
                        </h4>
                        <p class="font-base font-normal text-gray-700 px-5 mb-5 text-center">
                            <?= substr(get_the_excerpt(), 0,50); ?>...
                        </p>
                        <p
                            class="block bg-purple-700 text-white w-36 rounded-lg hover:bg-black  py-2 mx-auto text-base font-normal text-center">
                            <a class="block" href="<?php the_permalink(); ?>">
                                Read More
                            </a>
                        </p>
                        <p
                            class="bg-purple-700 text-white w-32 absolute top-2 left-2  text-center text-xs py-2 px-4 rounded-lg">
                            <?= get_the_date(); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php
    // Restore original post data
    wp_reset_postdata();
endif;
?>
    </div>
</section>

<!-- END Section View MOre Post -->
<!-- Footer -->
<?php get_footer();?>