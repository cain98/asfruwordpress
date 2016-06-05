<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
	<nav id="cd-lateral-nav">




		<ul class="cd-navigation cd-single-item-wrapper">
            <li><a href="#0">Home</a></li>
			<li><a class="current" href="#0">Roster</a></li>
			<li><a href="#0">Forums</a></li>
			<li><a href="#0">Gallery</a></li>
			<li><a href="#0">Operations</a></li>
			<li><a href="#0">Donate</a></li>
		</ul> <!-- cd-single-item-wrapper -->
        
        		<ul class="cd-navigation cd-single-item-wrapper">
            <li><a href="#0">Apply Here</a></li>

		</ul> <!-- cd-single-item-wrapper -->


        
        <div>

                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="150" style="" class="img-responsive center-block hidden-md-down">
            <br>
            <br>
        <img src="<?php bloginfo('template_directory'); ?>/images/StrayaGaming.png" width="260" class="img-responsive center-block">
            

        
        </div>

	</nav>
        <img src="<?php bloginfo('template_directory'); ?>/images/logo-s.png" class="img-responsive center-block hidden-lg-up" style="margin:auto;">
        
        <div class="col-xs-12 hidden-lg-up" style="text-align:center;">
                            <a class="btn btn-social-icon btn-pinterest btn-lg" href="#">
                      <span class="fa fa-youtube"></span>
                    </a>
                
                    <a class="btn btn-social-icon btn-github btn-lg" href="#">
                      <span class="fa fa-steam"></span>
                    </a>
                
                <a class="btn btn-social-icon btn-facebook btn-lg" href="#">
                      <span class="fa fa-facebook"></span>
                    </a>
        </div>

        <div class="container  vertical-center hidden-md-down" style="">
        
            <div class="row " style="">
            
                <div class=" col-sm-12 col-lg-4 ">

                    <img src="<?php bloginfo('template_directory'); ?>/images/logo-s-large.png" class="img-responsive center-block" style="margin:auto;">

                </div>
            
                <div class=" col-sm-8" style="padding-top:4%">
                <h1 class="home-header">AUSTRALIAN <span style="color:#c4bc97">SPECIAL FORCES</span> REALISM UNIT</h1>
                
                </div>

            </div>

        </div>
 <div class="container blog hidden-xs-down" >
        

                    
<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				
					
				
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
                    

</div>


		


<?php get_footer(); ?>
