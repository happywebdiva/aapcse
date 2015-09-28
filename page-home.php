<?php
/* Template Name: AAPC-SE Home Template
 * @package aapcse
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main" role="main">
  <div class="eleven columns alpha">
    <?php 
      if ( !dynamic_sidebar('Home Widget 1') ) : 
        echo '<div class="hentry">';
        echo '<h2>Membership</h2>' ;
        echo '<p>Pastoral counselors, pastoral care specialists, and a variety of professional affiliates find that membership in AAPC provides them spiritual, theological, and mental health resources through peer evaluation and supervision, conferences, and a variety of publications and interdisciplinary connections.</p>';
        echo '<p>Information about membership in the American Association of Pastoral Counseling can be found by contacting Barbara Nyman, Membership Services Coordinator at AAPC, at <a href="mailto:membership@aapc.org">email</a> or by phone at (703) 385-6967</p>';
        echo '</div>';
      endif; 
    ?>
  </div><!--.eleven.columns-->
	<div class="five columns omega">
  	<div class="welcome"><p><span class="accentuate">Welcome</span> to the American Association of Pastoral Counselors, Southeast Region. </p>
  	  <p>This site provides information on AAPC membership, conferences, education, professional resources, and more.</p>
  	</div>
  </div><!--.five.columns-->
</div><!--.sixteen-1.columns-->
</div><!--.container-first-->
<div class="container" id="specialcontent">
	<div class="sixteen columns">
	<?php 
    while ( have_posts() ) : the_post();
	?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry">
      <?php
        the_content();
        wp_link_pages( array(
          'before' => '<p class="page-links">' . __( 'Pages: ', 'a11yall' ),
          'after'  => '</p>',
        ) );
      ?>
    </div><!--.entry-->
  </article>
	<?php
    endwhile;
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
  ?>
  </div><!--.sixteen-2.columns-->
</div><!--.container-first-->
<div class="container" id="contentbottom">
<div class="sixteen columns">
  <div class="eight columns alpha">
  	<div class="hentry">
  	<h3>Register Now</h3>
    <p>To gain full access to the exclusive information available in the AAPC Southeast Region website's Members Only section, please <a href="http://aapcsoutheast.org/index.php?/register/entry">register here</a>.</p>
  	<h3>Ready to Join?</h3>
    <p>For information on membership in the American Association of Pastoral Counselors, please click <a href="http://www.aapc.org/membership.aspx" target="_blank">here</a>.</p>
    </div><!--.hentry-->
  </div><!--.eight-1.columns-->
	<div class="eight columns omega">
  	<div class="hentry">
    <blockquote>"Of all the professional organizations with which I am and have been involved, the Southeast Region of AAPC is one of the most supportive and beneficial to both my personal and professional goals. I am proud to be a part of such a warm and welcoming group of colleagues."<br /><br />
-Jean Pruett
</blockquote>
    </div><!--.hentry-->
  </div><!--.eight-2.columns-->
</div><!--.sixteen-3.columns-->
<?php get_footer(); ?>