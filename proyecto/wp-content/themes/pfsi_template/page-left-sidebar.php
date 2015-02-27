<?php
/*
Template Name: Left Sidebar Page
*/
?>

<?php get_header(); ?>
			<div id="content" class="clearfix row">
            	<?php get_sidebar(); // sidebar 1 ?>
				<div id="main" class="col col-sm-9 clearfix" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<header>
							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						</header> <!-- end article header -->
						<div class="row">
							<div class="col-sm-7">
								<section class="post_content">
									<?php the_content(); ?>
								</section> <!-- end article section -->
							</div>
							<div class="col-sm-5">
								<?php dynamic_sidebar( 'sidebar3' ); ?>
							</div>
						</div>
					</article> <!-- end article -->
					<?php //comments_template(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</div> <!-- end #main -->
			</div> <!-- end #content -->
<?php get_footer(); ?>