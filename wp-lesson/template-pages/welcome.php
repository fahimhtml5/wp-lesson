<?php
/*
    Template Name: Welcome
*/
get_header(); ?>
<main>
    <!-- Section-2 Header Content -->
    <section class="bg1 header-padding">
        <div class="container">
            <div class="hero-content">
                <div class="hero-img">
                    <?php
                    $hero_image = get_field('hero_image');
                    if (!empty($hero_image)): ?>
                        <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
                    <?php endif; ?>

                    <div class="card">
                        <?php if (have_rows('courses_info')): ?>
                            <?php while (have_rows('courses_info')): the_row();
                                $courses_icon = get_sub_field('courses_icon');
                                $courses_text = get_sub_field('courses_text');
                            ?>
                                <div class="course-1">
                                    <img src="<?php echo esc_url($courses_icon['url']); ?>" alt="<?php echo esc_attr($courses_icon['alt']); ?>" />
                                    <div class="course-text">
                                        <?php echo $courses_text; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <?php
                $hero_title = get_field('hero_title') ?>
                <div class="hero-text">
                    <?php echo $hero_title; ?>

                    <div class="hero-btns">
                        <a href="/courses" class="btn1"><?php echo esc_html(get_field('see_courses')); ?></a>
                        <button class="btn2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
                                <g filter="url(#filter0_d_4_204)">
                                    <circle cx="36" cy="28" r="20" fill="white" />
                                </g>
                                <path d="M41.9861 28L32.9741 33.1753L32.9982 22.783L41.9861 28Z" fill="#FFB900" />
                                <defs>
                                    <filter id="filter0_d_4_204" x="0" y="0" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="8" />
                                        <feGaussianBlur stdDeviation="8" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4_204" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4_204" result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                            Watch Video
                        </button>
                    </div>
                    <h6><?php echo esc_html(get_field('recent_engagement')); ?></h6>

                    <div class="engagements">
                        <?php if (have_rows('engagement')): ?>
                            <?php while (have_rows('engagement')): the_row();
                                $engagement_info = get_sub_field('engagement_info');
                            ?>
                                <div class="single-engagement">
                                    <?php echo $engagement_info; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section-3 Swiper-1 -->
    <section>
        <div class="pt-200">
            <div class="container">
                <div class="popular-courses">
                    <div class="popular-courses-text">
                        <?php the_field('popular_courses_text'); ?>
                    </div>
                    <div class="popular-courses-btns">
                        <div class="prev-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </div>
                        <div class="next-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">

                        <?php if (have_rows('popular_courses_swiper')): ?>
                            <?php while (have_rows('popular_courses_swiper')): the_row();
                                $swiper_image = get_sub_field('swiper_image');
                                $swiper_heading = get_sub_field('swiper_heading');
                                $swiper_rating = get_sub_field('swiper_rating');
                                $swiper_text = get_sub_field('swiper_text');
                                $swiper_price = get_sub_field('swiper_price');
                                $swiper_button = get_sub_field('swiper_button');
                            ?>
                                <div class="swiper-slide">
                                    <div class="single-swiper-slide swiper-border">
                                        <div class="swiper-img">
                                            <img src="<?php echo esc_url($swiper_image['url']); ?>" alt="<?php echo esc_attr($swiper_image['alt']); ?>">
                                        </div>
                                        <div class="swiper-text">
                                            <div class="rating">
                                                <h5><?php echo $swiper_heading; ?></h5>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                        <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B" />
                                                    </svg>
                                                    <span><?php echo $swiper_rating; ?></span>
                                                </div>
                                            </div>
                                            <p><?php echo $swiper_text; ?></p>
                                            <div class="price">
                                                <h6><?php echo $swiper_price; ?></h6>
                                                <button><?php echo $swiper_button; ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-4 Swiper-2 -->
    <section>
        <div class="pt-200">
            <div class="bg2 swiper-2">
                <div class="container">
                    <div class="carousel-wrapper">
                        <?php
                        $swiper_image_2 = get_field('swiper_image_2');
                        if (!empty($swiper_image_2)): ?>
                            <div class="carousel-img">
                                <img src="<?php echo esc_url($swiper_image_2['url']); ?>" alt="<?php echo esc_attr($swiper_image_2['alt']); ?>" />
                            <?php endif; ?>
                            <?php the_field('swiper2_heading'); ?>
                            <div class="swiper-dots1"></div>
                            </div>
                            <div class="carousel-text">
                                <div class="swiper mySwiper2">
                                    <div class="swiper-wrapper">

                                        <?php if (have_rows('peter_moor_swiper')): ?>
                                            <?php while (have_rows('peter_moor_swiper')): the_row();
                                                $swiper2_text = get_sub_field('swiper2_text');
                                            ?>
                                                <div class="swiper-slide">
                                                    <div class="single-swiper-slide">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28" viewBox="0 0 30 28" fill="none">
                                                            <path d="M12.9168 1.23505V6.26199C12.9168 6.94407 12.3663 7.49652 11.6875 7.49652C9.26544 7.49652 7.94779 9.99114 7.76491 14.9155H11.6875C12.3662 14.9155 12.9168 15.4688 12.9168 16.1501V26.7647C12.9168 27.4465 12.3663 27.999 11.6875 27.999H1.22938C0.550795 27.999 1.90735e-06 27.4459 1.90735e-06 26.7647V16.15C1.90735e-06 13.7896 0.237282 11.6235 0.703081 9.71055C1.1816 7.74949 1.91613 6.035 2.8858 4.61422C3.88306 3.15417 5.13161 2.00845 6.59457 1.21054C8.06863 0.407543 9.78211 0 11.688 0C12.3662 0.000516891 12.9168 0.553486 12.9168 1.23505ZM28.771 7.49696C29.4496 7.49696 30 6.94407 30 6.26294V1.23497C30 0.553488 29.4496 0.000951767 28.771 0.000951767C26.866 0.000951767 25.1517 0.408579 23.6785 1.21149C22.2148 2.00931 20.9664 3.15408 19.9693 4.61517C18.999 6.03595 18.2645 7.75052 17.786 9.71254C17.32 11.6255 17.0832 13.7917 17.0832 16.151V26.7657C17.0832 27.4476 17.6341 28 18.3125 28H28.771C29.4496 28 30 27.447 30 26.7657V16.151C30 15.4693 29.4496 14.9165 28.771 14.9165H24.9035C25.0841 9.99165 26.3828 7.49696 28.771 7.49696Z" fill="#634700" />
                                                        </svg>
                                                        <p><?php echo $swiper2_text; ?></p>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-5 -->
    <section>
        <div class="pt-200">
            <div class="container">
                <div class="learner-wrapper">
                    <div class="learner-img">
                        <?php
                        $learner_image1 = get_field('learner_image1');
                        if (!empty($learner_image1)): ?>
                            <div class="person-1">
                                <img src="<?php echo esc_url($learner_image1['url']); ?>" alt="<?php echo esc_attr($learner_image1['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        <?php
                        $learner_image2 = get_field('learner_image2');
                        if (!empty($learner_image2)): ?>
                            <div class="person-2">
                                <img src="<?php echo esc_url($learner_image2['url']); ?>" alt="<?php echo esc_attr($learner_image2['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="learner-take-text learner-text-area">
                        <?php the_field('learner_text'); ?>
                        <button class="btn"><?php echo esc_html(get_field('learner_button')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-6 -->
    <section>
        <div class="pt-200">
            <div class="container">
                <div class="take-wrapper">
                    <div class="learner-take-text">
                        <?php the_field('take_text'); ?>
                        <button class="btn"><?php echo esc_html(get_field('take_button')); ?></button>
                    </div>
                    <?php
                    $take_image = get_field('take_image');
                    if (!empty($take_image)): ?>
                        <div class="take-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/person-2.jpg" alt="">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-7 Swiper-3 -->
    <section>
        <div class="pt-200">
            <div class="bg1 swiper-3">
                <div class="container">
                    <div class="blog-text">
                        <?php the_field('our_blog_heading'); ?>
                    </div>
                    <div class="swiper mySwiper3">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('our_blog_s3')): ?>
                                <?php while (have_rows('our_blog_s3')): the_row();
                                    $swiper3_image = get_sub_field('swiper3_image');
                                    $swiper3_date = get_sub_field('swiper3_date');
                                    $swiper3_text = get_sub_field('swiper3_text');
                                    $swiper3_button = get_sub_field('swiper3_button');
                                ?>
                                    <div class="swiper-slide">
                                        <div class="single-swiper-slide blog-swiper">
                                            <div class="swiper3-img">
                                                <img src="<?php echo esc_url($swiper3_image['url']); ?>" alt="<?php echo esc_attr($swiper3_image['alt']); ?>">
                                            </div>
                                            <div class="swiper3-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                                    <circle cx="3" cy="3" r="3" fill="#FFB900" />
                                                </svg>
                                                <span><?php echo $swiper3_date; ?></span>
                                                <hr class="divider1">
                                                <h4><?php echo $swiper3_text; ?></h4>
                                                <button><?php echo $swiper3_button; ?></button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="swiper-dots2"></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>