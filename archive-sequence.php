<?php get_header(); ?>

	<div class="content">

			<div class="inner-content grid-x grid-margin-x grid-padding-x">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article role="article" class="yoga-sequence">

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
