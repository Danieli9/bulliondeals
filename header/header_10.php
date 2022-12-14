<?php
global $porto_settings, $porto_layout;

$search_size = $porto_settings['search-size'];
?>
<!-- top head bar HC-21june-18-->
<?php if ( is_active_sidebar( 'home-notice-bar' ) ) { ?>
    <div class="col-xs-12 leading-independent-con home_page">
        <div class="container">
            <?php dynamic_sidebar( 'home-notice-bar' ); ?>
        </div>
    </div>
<?php } ?>
<!-- #End top head bar HC-21june-18-->

<header id="header" class="header-corporate header-10 <?php echo $search_size ?><?php echo ($porto_settings['logo-overlay'] && $porto_settings['logo-overlay']['url']) ? ' logo-overlay-header' : '' ?>">
    <?php if ($porto_settings['show-header-top']) : ?>
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <?php
                    // show currency and view switcher
                    $currency_switcher = porto_currency_switcher();
                    $view_switcher = porto_view_switcher();

                    if ($currency_switcher || $view_switcher)
                        echo '<div class="switcher-wrap">';

                    echo $view_switcher;

                    if ($currency_switcher && $view_switcher)
                        echo '<span class="gap switcher-gap">|</span>';

                    echo $currency_switcher;

                    if ($currency_switcher || $view_switcher)
                        echo '</div>';
                    ?>
                </div>
                <div class="header-right">
                    <?php
                    // show welcome message and top navigation
                    $top_nav = porto_top_navigation();

                    if ($porto_settings['welcome-msg'])
                        echo '<span class="welcome-msg">' . do_shortcode($porto_settings['welcome-msg']) . '</span>';

                    if ($porto_settings['welcome-msg'] && $top_nav)
                        echo '<span class="gap">|</span>';

                    echo $top_nav;
                    ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="header-main header-body" style="top: 0px;">
        <div class="header-container container">
            <div class="header-left">
                <?php
                // show logo
                $logo = porto_logo();
                echo $logo;
                ?>
            </div>

            <div class="header-right">
                <div class="header-right-top">
                    <?php
                    // show contact info and top navigation
                    $contact_info = $porto_settings['header-contact-info'];

                    if ($contact_info)
                        echo '<div class="header-contact">' . do_shortcode($contact_info) . '</div>';

                    // show search form
                    echo porto_search_form();

                    // show mobile toggle
					echo porto_header_socials();
                    ?>
                </div>
                <div class="header-right-bottom">
                    <div id="main-menu">
                        <?php
                        // show main menu
                        echo porto_main_menu();
                        ?>
                    </div>
                    <?php
                    // show social links
                    //echo porto_header_socials();

                    // show minicart
                    $minicart = porto_minicart();

                    echo $minicart;
                    ?>

                    <a class="mobile-toggle"><i class="fa fa-reorder"></i></a>
                </div>

                <?php
                get_template_part('header/header_tooltip');
                ?>

            </div>
        </div>

        <?php
            get_template_part('header/mobile_menu');
        ?>
    </div>
</header>