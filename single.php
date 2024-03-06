<?php get_header();?>
<!-- Single Post -->
<section class="w-full h-fit py-5 bg-gray-100">
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
<section class="w-full h-fit  mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
        <!--Upper -->
        <div class="mb-10">
            <h3 class="text-black font-semibold text-3xl text-center mb-5">Continue Reading</h3>
        </div>
        <!-- body section -->
        <?php get_template_part('template-parts/all-blogs-section'); ?>
    </div>
</section>
<!-- END Section View MOre Post -->
<!-- Footer -->
<?php get_footer();?>