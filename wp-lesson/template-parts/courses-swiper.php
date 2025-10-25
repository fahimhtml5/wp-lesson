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