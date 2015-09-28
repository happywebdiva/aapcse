<?php
/* Template Name: Site Map Template
 * @package aapcse
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
	<?php 
    while ( have_posts() ) : the_post();
	?>
	<header class="entry-header"><h1 id="page-title"><?php the_title(); ?></h1></header>
  <div class="eight columns alpha " role="main">
	<?php
    endwhile;
  ?>
    <div class="hentry">
      <h2>List of Pages</h2>
      <ul>
        <?php wp_list_pages('title_li=&depth=2&sort_column=post_title'); ?>
      </ul>
    </div>      
  </div><!--.eight-1.columns-->
	<div class="eight columns omega">
    <div class="hentry">
      <h2>Blog Archives</h2>
      <ul>
        <?php wp_get_archives('type=monthly&limit=12'); ?>
      </ul>
    </div>      
    <div class="hentry" id="searchbox-sitemap" style="margin-top: 49px;"><?php get_search_form(); ?></div>
  </div><!--.eight-2.columns-->
</div><!--.sixteen.columns-->
<?php get_footer(); ?>