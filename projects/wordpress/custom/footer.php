<p>-- Footer Menu --</p>
<?php
if ( !empty( wp_nav_menu() ) ) :
    wp_nav_menu( array(
        'theme_location' => 'footer__menu'
    ) );
endif;
?>
<p>-- Footer Menu --</p>

<?php
    wp_footer();
?>
</body>
</html>