<?php get_header(); ?>

			<div class="main-menu-nav">
				<div class="wrap">
				  <nav class="clearfix" role="navigation">
				    
				    <div class="tencol first">
				    	<?php bones_main_nav(); ?>
				    </div>
				    
				    <div class="twocol">
				    	<?php bones_social_menu(); ?>
					  </div>
				    
				    <a href="#" id="pull">TEDxABQ Menu</a>

				  </nav>
				</div>
			</div>

			<div class="hero frontpage">
				<div class="hero-content">
					<div class="slideshow">
						<?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>
					</div>
					<div class="videos-cont wrap clearfix">

						<?php
				    	$all_curated_videos = array( 
				    		'post_type' => 'curated_video',
				    		'meta_query' => array(
				    			'key' => the_field('community'),
				    			'value' => array( 'tedxabq' ),
				    			'compare' => 'IN'
				    		),
				    		'posts_per_page' => 4, 
				    		'orderby' => 'rand' 
				    	);
				    	$video_collection = new WP_Query( $all_curated_videos );
				    ?>

						<?php while ( $video_collection->have_posts() ) : $video_collection->the_post(); ?>

							<a class="video_thumb" href='<?php the_field('video_url'); ?>'>
							  <?php $image = wp_get_attachment_image_src(get_field('thumbnail'), 'video-thumb-fp'); ?>
							  <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('thumbnail')) ?>" />

							  <p><?php the_field('video_title'); ?></p>
							</a>

						<?php endwhile; ?>

					</div>
				</div>
			</div>
			<div class="video-archives-stripe wrap clearfix">
				<div class="left-col">
					&nbsp;
				</div>
				<div class="right-col">
					<div class="padding-cont">
						<p>
							<a href="http://tedxtalks.ted.com/browse/talks-by-event/tedxabq">> View more videos</a>
						</p>
					</div>
				</div>
			</div>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					
						<div id="main" class="ninecol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard"><?php
										printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
									?></p>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>

								</footer> <!-- end article footer -->

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article> <!-- end article -->

							<?php endwhile; ?>


							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<?php get_sidebar( 'content_sidebar1' ); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
