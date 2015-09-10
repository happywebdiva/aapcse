<?php
/**
 * @package aapcse
 */
?>
	</div><!--.container-->
</div><!--.section-->
<div class="section mainmenu">  
  <div class="sixteen columns alpha omega">  
	  <?php 
      wp_nav_menu( array( 
				'theme_location' => 'secondary', 
				'container' => 'nav',
				'container_class' => 'container menus',
				'container_id' => 'footer-navigation',
				'menu_class' => 'mdd-menu',
				'depth' => 2,
			) );
	  ?>
  </div>
</div><!--.section menu-->
<div class="section footer">
  <footer class="container" role="contentinfo">
  	<div class="sixteen columns">
    	<div class="eleven columns alpha">    
          <p>Copyright &copy; <?php echo date("Y"); ?> : 
          <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
          </p>
      </div><!--.eleven.columns-->
      <div class="five columns omega">
      	<?php 
            if ( !dynamic_sidebar('Footer Widget') ) : 
              echo '<p><a href="' . home_url( '/' ) . 'contact-aapcse/">Contact Us</a></p>' ;
            endif; 
          ?>
      </div><!--.five.columns-->
    </div><!--.sixteen.columns-->
  </footer>
</div><!--.section.footer-->
<?php wp_footer(); ?>
</body>
</html>