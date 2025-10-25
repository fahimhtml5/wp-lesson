<?php
/*
    Template Name: Pricing
*/
get_header(); ?>

<!-- Highly Courses Section -->
<section>
    <div class="pt-100">
        <div class="container">
            <div class="highly-courses-wrapper">
                <?php
                $highly_courses_text = get_field('highly_courses_text');
                $highly_courses_image = get_field('highly_courses_image'); ?>
                <div class="highly-courses-text">
                    <?php echo $highly_courses_text; ?>
                    <button class="btn"><?php echo esc_html(get_field('hct_button')); ?></button>
                </div>
                <?php if (!empty($highly_courses_image)): ?>
                    <div class="highly-courses-img">
                        <img src="<?php echo esc_url($highly_courses_image['url']); ?>" alt="<?php echo esc_attr($highly_courses_image['alt']); ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Courses Pricing Section -->
<section>
    <div class="pt-200">
        <div class="container">
            <div class="our-courses">
                <?php
                $our_courses_heading = get_field('our_courses_heading'); ?>
                <div class="our-courses-heading">
                    <?php echo $our_courses_heading; ?>
                </div>
                <div class="our-courses-wrapper">
                    <?php if (have_rows('our_courses_card')): ?>
                        <?php while (have_rows('our_courses_card')): the_row();
                            $our_courses_image = get_sub_field('our_courses_image');
                            $our_courses_text = get_sub_field('our_courses_text');
                            $our_courses_button = get_sub_field('our_courses_button');
                        ?>
                            <div class="our-courses-card-wrapper">
                                <div class="our-courses-img">
                                    <img src="<?php echo esc_url($our_courses_image['url']); ?>" alt="<?php echo esc_attr($our_courses_image['alt']); ?>">
                                </div>
                                <div class="our-courses-text">
                                    <?php echo $our_courses_text; ?>
                                </div>
                                <a class="our-courses-btn"><?php echo $our_courses_button; ?></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pt-200"></div>

<?php get_footer(); ?>