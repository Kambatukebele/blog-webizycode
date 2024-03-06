<div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
    <?php if(have_posts()): ?>
    <?php while(have_posts()) : the_post() ?>
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
            <p class="bg-purple-700 text-white w-32 absolute top-2 left-2  text-center text-xs py-2 px-4 rounded-lg">
                <?= get_the_date(); ?>
            </p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>