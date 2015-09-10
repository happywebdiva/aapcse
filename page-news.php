<?php
/* Template Name: News Template
 * @package aapcse
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <?php 
		if( !is_front_page() ) {
	  	if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} 
		}
	?>
  <div class="eleven columns alpha" role="main">
	<?php 
    while ( have_posts() ) : the_post();
	?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <h1 id="page-title"><?php the_title(); ?></h1>
      </header><!-- .entry-header -->
      <div class="entry clearfix">
        <?php
          the_content();
          wp_link_pages( array(
            'before' => '<p class="page-links">Pages: ',
            'after'  => '</p>',
          ) );
        ?>
      </div><!--.entry-->
      <?php 
        $editpage =  sprintf( __('Edit This Page' , 'a11yall') );
        edit_post_link($editpage, '<p class="button editlink">', '</p>'); 
      ?>
    </article>
  <?php
    endwhile;
?>
<?php $the_query = new WP_Query( 'showposts=5' ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <article <?php post_class('blurbing') ?> id="post-<?php the_ID(); ?>">
    	<?php 
      if(has_post_thumbnail()) {
        echo '<figure class="thumbnailsquare">';
        the_post_thumbnail('thumbnail');
        echo '</figure>';
      }
      ?>  
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <?php
        echo '<strong><time datetime="' . date('Y-m-d') . '">';
        the_time('F j, Y');
        echo '</time></strong>';
      ?>	
      <div class="entry clearfix">
        <?php the_excerpt(); ?>
      </div><!--.entry-->  
    </article>
  <?php endwhile;?>
  <?php
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
  ?>
  </div><!--.eleven.columns-->
	<div class="five columns omega">
    <?php get_sidebar(); ?>
  </div><!--.five.columns-->
</div><!--.sixteen.columns-->
<?php get_footer(); ?>