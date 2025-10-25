<?php
/*
    Template Name: Courses
*/
get_header(); ?>

<!-- Make Online Section -->
<section class="pt-200">
    <div class="container">
        <div class="make-text">
            <?php the_field('make_online_heading'); ?>
        </div>

        <div class="make-card-wrapper">
            <?php if (have_rows('make_online_cards')): ?>
                <?php while (have_rows('make_online_cards')): the_row();
                    $card_image = get_sub_field('card_image');
                    $card_text = get_sub_field('card_text');
                ?>
                    <div class="make-card">
                        <img src="<?php echo esc_url($card_image['url']); ?>" alt="<?php echo esc_attr($card_image['alt']); ?>">
                        <hr>
                        <?php echo $card_text; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Packages Section -->
<section class="pt-200">
    <div class="bg1">
        <div class="container">
            <div class="packages">
                <div class="packages-wrapper">
                    <?php
                    $packages_image = get_field('packages_image');
                    $packages_text = get_field('packages_text');
                    if (!empty($packages_image)): ?>
                        <div class="packages-img">
                            <img src="<?php echo esc_url($packages_image['url']); ?>" alt="<?php echo esc_attr($packages_image['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                    <div class="packages-text">
                        <?php echo $packages_text; ?>
                        <button class="btn"><?php echo esc_html(get_field('packages_button')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/courses-swiper'); ?>

<!-- Join Us Section -->
<section class="pt-200">
    <div class="container">
        <div class="join-us">
            <?php
            $join_us_text = get_field('join_us_text'); ?>
            <div class="join-us-text">
                <?php echo $join_us_text; ?>
            </div>
            <div class="join-us-email">
                <?php
                $form_shortcode = get_field('form_shortcode');
                if ($form_shortcode) {
                    echo do_shortcode($form_shortcode);
                }
                ?>
            </div>
        </div>
    </div>
</section>

<div class="pt-100"></div>
<?php get_footer(); ?>