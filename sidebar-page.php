<?php
/**
 * @package aapcse
 */
?>
<div class="widget-area" role="complementary">
	<h2 class="visuallyhidden">Sidebar</h2>
	<?php if ( !dynamic_sidebar( 'Page Sidebar' ) ) : ?>
  	<aside id="archives" class="widget">
      <h3>Contents</h3>
    	<ul>
      	<?php wp_list_pages('title_li=&depth=2'); ?>
      </ul>
    </aside>
  <?php endif; ?>
</div><!-- .widget-area -->
