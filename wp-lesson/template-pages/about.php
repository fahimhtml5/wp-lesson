<?php
/*
    Template Name: About Us
*/
get_header(); ?>

<!-- Welcome Section -->
<section>
    <div class="pt-200">
        <div class="container">
            <div class="welcome-wrapper">
                <?php
                $welcome_text = get_field('welcome_text');
                $welcome_image = get_field('welcome_image'); ?>
                <div class="welcome-text">
                    <?php echo $welcome_text; ?>
                </div>
                <?php if (!empty($welcome_image)): ?>
                    <div class="welcome-img">
                        <img src="<?php echo esc_url($welcome_image['url']); ?>" alt="<?php echo esc_attr($welcome_image['alt']); ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section>
    <div class="pt-200">
        <div class="container">
            <div class="our-story-wrapper">
                <?php 
                    $our_story_text = get_field('our_story_text');
                    $our_story_image = get_field('our_story_image'); 
                    if (!empty($our_story_image)): ?>
                    <div class="our-story-img">
                        <img src="<?php echo esc_url($our_story_image['url']); ?>" alt="<?php echo esc_attr($our_story_image['alt']); ?>" />
                    </div>
                <?php endif; ?>
                <div class="our-story-text">
                    <?php echo $our_story_text; ?>
                </div>
                <?php  ?>
            </div>
        </div>
    </div>
</section>

<div class="pt-200"></div>
<?php get_footer(); ?>