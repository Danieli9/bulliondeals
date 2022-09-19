<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="footer-wrapper-tesla">

	<div class="container">
        <div class="holder-for-footer-content">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1926.86 1036.7"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#ffb642;}</style></defs><path class="cls-1" d="M369.19,814.06c0,78.5-63.95,129.78-143.08,129.78H40V500.69H213.44c77.25,0,139.91,50,139.91,126.61,0,36.72-14.55,65.84-38.61,86.74C347.66,734.93,369.19,769.11,369.19,814.06ZM141.27,595.64v78.51h72.17c22.8,0,38.62-16.46,38.62-39.26s-15.19-39.25-38.62-39.25ZM267.89,806.47c0-24.7-16.46-42.42-41.78-42.42H141.27v84.83h84.84C251.43,848.88,267.89,831.15,267.89,806.47Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M722.44,627.3V943.84h-95V914.09C610.39,937.51,578.73,952.7,537,952.7c-63.94,0-118.39-45.57-118.39-131V627.3h95V807.73c0,39.25,24.69,57.61,55.07,57.61,34.83,0,58.88-20.26,58.88-65.21V627.3Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M792.09,481.7h95V943.84h-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M956.69,481.7h95V943.84h-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1111.79,542.47c0-31,26-57,57-57s57,26,57,57-26,57-57,57S1111.79,573.49,1111.79,542.47Zm9.5,84.83h95V943.84h-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1270.06,785.57c0-94.33,74.71-167.13,167.77-167.13s167.76,72.8,167.76,167.13-74.7,167.13-167.76,167.13S1270.06,879.9,1270.06,785.57Zm240.57,0c0-45-31.65-74.7-72.8-74.7S1365,740.62,1365,785.57s31.66,74.7,72.81,74.7S1510.63,830.52,1510.63,785.57Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1963.29,749.48V943.84h-95V763.41c0-39.24-24.69-57.6-55.08-57.6-34.82,0-58.88,20.26-58.88,65.2V943.84h-94.95V627.3h94.95v29.75c17.1-23.41,48.75-38.61,90.53-38.61C1908.85,618.44,1963.29,664,1963.29,749.48Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M429,1288c0,125.35-93.07,221.57-215.25,221.57H36.43V1066.38H213.7C335.88,1066.38,429,1162.6,429,1288Zm-97.5,0c0-76-48.11-124.09-117.75-124.09h-76V1412h76C283.34,1412,331.45,1363.92,331.45,1288Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1373.16,1193v316.54h-95v-29.75c-20.89,24.06-51.91,38.62-94.33,38.62-82.94,0-151.31-72.81-151.31-167.13s68.37-167.14,151.31-167.14c42.42,0,73.44,14.56,94.33,38.61V1193Zm-95,158.28c0-47.49-31.65-77.24-75.34-77.24s-75.33,29.75-75.33,77.24,31.65,77.23,75.33,77.23S1278.2,1398.74,1278.2,1351.27Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1442.8,1047.39h95v462.14h-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1849.87,1414.57c0,72.8-63.3,103.83-131.68,103.83-63.3,0-111.42-24.06-136.11-75.34l82.3-46.85c8.23,24.06,25.95,37.36,53.81,37.36,22.79,0,34.19-7,34.19-19.64,0-34.81-155.74-16.45-155.74-126,0-69,58.25-103.83,124.08-103.83,51.28,0,96.86,22.79,123.45,67.74l-81,43.68c-8.86-16.46-21.53-27.85-42.42-27.85-16.45,0-26.58,6.33-26.58,17.72C1694.14,1321.51,1849.87,1297.45,1849.87,1414.57Z" transform="translate(-36.43 -481.7)"/><path class="cls-2" d="M937.93,1101.85l26,95H501.73l26-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-2" d="M937.93,1262.08l26,95H501.73l26-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-2" d="M937.93,1423.44l26,95H501.73l26-95Z" transform="translate(-36.43 -481.7)"/></svg>
            <div class="footer-menu" id="footer-menu">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'footer_menu',
                            'container_class' => '',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav ml-auto mr-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'footer-menu',
                            'depth'           => 1,
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        )
                    );
                ?>
            </div>
            <div class="social-media">
                <a href="https://www.linkedin.com/company/bullion-deals-new-zealand?trk=tyah"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://twitter.com/BullionDealsNZ"><i class="fab fa-twitter"></i></a>
                <a href="https://plus.google.com/u/0/b/106827901015427411878/106827901015427411878"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <div class="text-bottom">
                <p class="left">Copyright © 2021 Bullion Deals NZ. All rights reserved.</p>
                <p class="right">We use encrypted SSL security to ensure that your </br> Order and Information is 100% secured</p>
            </div>
        </div>

		

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
</html>