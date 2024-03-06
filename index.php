<?php get_header();?>
<!-- Search bar -->
<section class="mt-10 w-[90%] mx-auto">
    <form class="max-w-md mx-auto">
        <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Mockups, Logos..." required />
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Search</button>
        </div>
    </form>
</section>
<!-- END Search bar -->
<!-- Blog list -->
<section class="w-full h-fit  mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
        <!--Upper -->
        <!-- body section -->
        <?php get_template_part('template-parts/all-blogs-section'); ?>
    </div>
</section>
<!-- END Blog list -->
<!-- Pagination -->
<style>
.prev,
.next {
    border: 1px solid black;
    width: 130px;
    display: inline-block;
    text-align: center;
    padding: 5px 0px;
    border-radius: 8px;
    margin: 0px 5px;
    cursor: pointer;
}

.prev:hover,
.next:hover {
    background-color: #7E22CE;
    color: white;
    border: none;
}

.current {
    background-color: #7E22CE;
    color: white;
    padding: 3px 7px;
    border-radius: 5px;
}

.page-numbers {
    margin: 0px 8px;
}
</style>
<div class="w-full h-fit mb-10 flex justify-center items-center font-montserrat">
    <?php the_posts_pagination(); ?>
</div>
<!-- END Pagination -->
<!-- Footer -->
<?php get_footer();?>