<?php get_header(); ?>

	<div class="content">

			<div class="inner-content grid-x grid-margin-x grid-padding-x">

					<div class="yoga-pose-filter callout primary">
						<!--<h2>Explore Yoga Poses through a combination of <a href="<?php echo home_url() ?>/poses/levels">levels</a>, <a href="<?php echo home_url() ?>/poses/positions">positions</a>, and <a href="<?php echo home_url() ?>/poses/focus">focus</a>.</h2>-->
						<h2>Explore Yoga Poses through a combination of level, position, and focus.</h2>
						<?php do_action('show_beautiful_filters'); ?>
					</div>

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article role="article" class="yoga-pose">

			        <header class="article-header">
								<h3 class="title subheader">
			            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			              <?php the_title(); ?>
			            </a>
			          </h3>
							</header> <!-- end article header -->

							<section class="featured-image" itemprop="articleBody">
								<figure class="fabric-background">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			              <?php the_post_thumbnail('full'); ?>
										<figcaption>
								      <h4>
											<?php
												echo strip_tags (
												    get_the_term_list( get_the_ID(), 'level', "","" )
												);
											?>,
											<?php
												echo strip_tags (
												    get_the_term_list( get_the_ID(), 'position', "","" )
												);
											?>,
											<?php
												echo strip_tags (
												    get_the_term_list( get_the_ID(), 'focus', "","" )
												);
											?>
											</h4>
								    </figcaption>
			          </a>
							  </figure>
							</section> <!-- end article section -->

					</article> <!-- end article -->

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing-pose' ); ?>

				<?php endif; ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
