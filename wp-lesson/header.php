<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson</title>
    <!-- functions.php -->
    <?php wp_head(); ?>
</head>

<body>

    <!-- Section-1 -->
    <header>
        <div class="bg1">
            <div class="container">
                <div class="header-wrapper">
                    <?php $header_logo  = get_field("header_logo", "option");
                    if (!empty($header_logo)) {
                    ?>
                        <div class="logo">
                            <a href="">
                                <img src="<?php echo esc_url($header_logo['url']) ?>" alt="">
                            </a>
                        </div>
                    <?php } ?>
                    <div class="menu">
                        <?php
                        wp_nav_menu(array(
                            'container' => false,
                            'menu' => 'menu-1',
                            'menu_class' => 'navigation'
                        ));
                        ?>
                        <button class="header-btn">Sign Up</button>
                    </div>

                    <div class="mobile-menu-wrapper">
                        <button class="mobile-menu-btn-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile-Menu -->
                <nav class="mobile-menu">
                    <?php
                    wp_nav_menu(array(
                        'container' => false,
                        'menu' => 'menu-1',
                        'menu_class' => 'navigation'
                    ));
                    ?>
                </nav>


            </div>
        </div>
    </header>