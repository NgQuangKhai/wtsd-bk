<?php

/**
 * Template Name: Homepage
 *
 * @package wtsd*/

get_header(); ?>
<main id="primary">
    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content/content', 'page');
        // If comments are open or we have at least one comment, load up the comment template. 
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
    endwhile; // End of the loop. 
    ?>
    <div>This is the homepage template</div>
    <div class="container">
        <h2 class="text-7xl mt-10 font-bold ">This is tailwind heading</h2>
    </div>
    <!-- HERO SECTION  -->
    <section class="container text-center pt-7 border-b border-solid border-[#E3E7ED] grid xl:grid-cols-[1fr_0.8fr] gap-x-16">
        <div class="xl:text-left">
            <span class="flex flex-col justify-center items-center mb-6 gap-x-3 gap-y-4 md:flex-row xl:justify-start">
                <span class="block w-[14px] h-[2px] bg-foreground"></span>
                <p class="text-sm font-semibold px-[4.25rem] md:p-0">Changing the way you
                    go to healthcare</p>
            </span>

            <h1 class="px-3 mb-6 md:px-11 xl:p-0">Primary Care
                Designed for
                Real Life</h1>
            <p class="px-6 mb-8 md:px-11 xl:p-0">Changing the way you
                go to healthcare</p>

            <form class="rounded-lg w-full bg-white p-2 text-left mb-9 md:relative">
                <input type="email" placeholder="name@youremail.com" class="text-left pl-1 pr-1 mb-4 w-full focus:outline-none md:m-0 md:py-[10px] md:pl-5 md:pr-32">
                <button type="button" class="bg-primary rounded-lg font-bold text-white w-full py-2 right-0 top-0 md:absolute md:w-auto md:py-[18px] md:px-6">Subscribe</button>
            </form>
        </div>
        <img src="/wp-content/uploads/2022/12/header-image.png" alt="" class="w-full aspect-square object-cover" />
    </section>
</main><!-- #main -->
<?php

get_footer();
