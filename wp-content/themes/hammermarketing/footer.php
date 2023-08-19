</main><!-- main -->

<footer>
    <div class="footer container full-width flexbox flex-between flex-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="29.043" height="47.938" viewBox="0 0 29.043 47.938">
            <g id="Group_14" data-name="Group 14" transform="translate(0 0)">
                <g id="Group_2" data-name="Group 2" transform="translate(0 0)">
                <g id="Group_15" data-name="Group 15" transform="translate(0 0)">
                    <path id="Path_14" data-name="Path 14" d="M22.433,21.249A12.094,12.094,0,0,0,14.522,0H0V9.586H5.31V5.31h9.212a6.793,6.793,0,0,1,0,13.585A14.538,14.538,0,0,0,0,33.416V47.934H5.31V33.416a9.211,9.211,0,1,1,9.212,9.212h-.346V28.117a5.67,5.67,0,0,0-5.31,5.333V33.6h0v14.34h5.656a14.515,14.515,0,0,0,7.912-26.689" fill="#caa969"/>
                    <path id="Path_15" data-name="Path 15" d="M5.31,31.234a2.649,2.649,0,1,0-2.649,2.649A2.649,2.649,0,0,0,5.31,31.234" transform="translate(-0.007 -14.713)" fill="#caa969"/>
                </g>
                </g>
            </g>
        </svg>
        <div class="flexbox flex-column">
        <?php
                echo '<nav aria-label="Footer Navigation">';
                if (has_nav_menu('footer')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'container'      => false,
                            'menu_class'     => 'footer-nav nav flexbox flex-end',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        )
                    );
                }
                echo '</nav>';
            ?>
            <p>&copy;<?php echo esc_html(date('Y')); ?>Luxury Company. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>