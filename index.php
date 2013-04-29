<?php get_header(); ?>

			<div class="main-menu-nav wrap">
			  <nav class="clearfix" role="navigation">
			    <?php bones_main_nav(); ?>
			    <a href="#" id="pull">Menu</a>
			  </nav>
			</div>

			<div class="hero frontpage">
				<div class="hero-content">
					<div class="slideshow">
						<?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>
					</div>
					<div class="videos-cont wrap clearfix">
						<?php include_once(ABSPATH.WPINC.'/feed.php');
						  $rss = fetch_feed('http://tedxtalks.ted.com/feed/magnify.rss/tedxabq');
						  $maxitems = $rss->get_item_quantity(4);
						?>

						<?php foreach ($rss->get_items(0, $maxitems) as $item): ?>
						  <a class="video_thumb" href='<?php echo $item->get_permalink(); ?>'title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
						    <img src="<?php echo $item->get_enclosure()->get_thumbnail(); ?>" />
						    <?php $concat_title = explode(': ', $item->get_title()); ?>
						    <p><?php echo $concat_title[0]; ?></p>
						  </a>
						<?php endforeach; ?>
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

					<h1 class="archive-title h4 caps-header underlined-header">Latest Updates</h1>

						<div id="main" class="eightcol first clearfix" role="main">

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

									<?php if (function_exists('bones_page_navi')) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
														<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
													</ul>
											</nav>
									<?php } ?>

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

						<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
