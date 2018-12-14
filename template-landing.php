<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>

	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">


		  <main class="landing-hero" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->


			<div class="landing-carousel">
				<div class="orbit" role="region" aria-label="" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out; timerDelay:5000;">
				  <div class="orbit-wrapper">
				    <ul class="orbit-container">

							<li class="is-active orbit-slide">
								<a href="" class="cahuita-retreat-link-wrapper">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/landing-carousel/costa-rica-yoga-and-wellness-retreat.jpg"
											 alt="Costa Rica Yoga and Wellness Retreat 2019" >
									<figcaption class="orbit-caption cahuita-caption" >Costa Rica Yoga and Wellness Retreat 2019</figcaption>
				        </figure>
								</a>
				      </li>

							<!--
				      <li class="orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/landing-carousel/sarah-bresnahan-yoga-in-hanalei-bay-kauai.jpg"
											 alt="Sarah Bresnahan practices Yoga in Hanalei Bay, Kauai, Hawaii." >
				        </figure>

				      </li>
						-->
							<!--
				      <li class="orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/landing-carousel/sarah-bresnahan-yoga-instructor-el-salvador-retreat.jpg"
											 alt="Sarah Bresnahan leads a group of students through Vinyasa on a Surf and Yoga Retreat." >
				        </figure>
				      </li>
						-->
						<!--
							<li class="orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/landing-carousel/sarah-bresnahan-yoga-in-el-salvador.jpg"
											 alt="Sarah Bresnahan practices yoga at sunset in El Salvador on a Surf and Yoga Retreat." >
				        </figure>
				      </li>
							<!--
							<li class="orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/landing-carousel/sarah-bresnahan-and-yoga-teacher-training-students-down-dog.jpg"
											 alt="Sarah Bresnahan cues students on proper form during the Yoga pose Down Dog." >
				        </figure>
				      </li>
							<li class="orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/landing-carousel/sarah-bresnahan-full-wheel-paddleboard-yoga.jpg"
											 alt="Sarah Bresnahan works through a Full Wheel pose during Paddleboard Yoga." >
				        </figure>
				      </li>
						-->
				    </ul>
				  </div><!--/orbit-wrapper-->
				</div><!--/orbit-->
			</div><!--/landing-carousel-->


			<!--
			<div class="full-retreat-hero">

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stretcheveryday-cahuita-retreat.jpg"
						 alt="Sarah Bresnahan practices Yoga in Hanalei Bay, Kauai, Hawaii." >

				<h3>Caribbean Yoga and Wellness Retreat: March 23 – 30, 2019</h3>

			</div>
			-->


			<div class="landing-poses">
				<article>
					<header>
						<h3><a href="<?php echo home_url() ?>/poses" title="Pose Archive">Poses</a></h3>
					</header>
					<?php $qry_random_pose = new WP_Query(
							array(
								'post_type'=> 'pose',
								'orderby' => 'rand',
								'posts_per_page' => 1,
							)
						);
						if ($qry_random_pose->have_posts()) {
							while ($qry_random_pose->have_posts()) {
								$qry_random_pose->the_post(); ?>

								<figure class="fabric-background">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="View the <?php the_title_attribute(); ?> Pose">
										<?php the_post_thumbnail('full'); ?>
										<figcaption>
											<h4><?php the_title_attribute(); ?></h4>
										</figcaption>
									</a>
								</figure>

							<?php
							}
						}?>
				</article>

			</div>


			<div class="landing-sequences">

				<article>
					<?php $qry_random_sequence = new WP_Query(
							array(
								'post_type'=> 'sequence',
								'orderby' => 'rand',
								'posts_per_page' => 1,
							)
						);

						if ($qry_random_sequence->have_posts()) {
							while ($qry_random_sequence->have_posts()) {
								$qry_random_sequence->the_post(); ?>

								<header>
									<h3><a href="<?php echo home_url() ?>/yoga-sequences" title="Sequence Archive">Sequences</a></h3>
								</header>

								<figure class="fabric-background">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="View the <?php the_title_attribute(); ?> Sequence">
											<?php the_post_thumbnail('full'); ?>
										<figcaption>
											<h4><?php the_title_attribute(); ?> Sequence</h4>
										</figcaption>
									</a>
								</figure>

								<?php
							}
						}?>

				</article>

			</div>


			<div class="landing-classes">

				<article>
					<?php $qry_random_sequence = new WP_Query(
							array(
								'post_type'=> 'class',
								'orderby' => 'rand',
								'meta_key'    => '_thumbnail_id',
								'posts_per_page' => 1
							)
						);

						if ($qry_random_sequence->have_posts()) {
							while ($qry_random_sequence->have_posts()) {
								$qry_random_sequence->the_post(); ?>
								<header class="article-header">
									<h3 class="title subheader">
										<a href="<?php echo home_url() ?>/yoga-classes" title="Online Class Archive">Classes</a>
									</h3>
								</header>

								<figure>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail('full'); ?>
									<figcaption>
										<h4><?php the_title_attribute(); ?></h4>
									</figcaption>
									</a>
								</figure>

							<?php
							}
						}?>
				</article>

			</div>


			<div class="landing-articles">

				<article>
					<?php $qry_random_sequence = new WP_Query(
							array(
								'post_type'=> 'article',
								'orderby' => 'rand',
								'meta_key'    => '_thumbnail_id',
								'posts_per_page' => 1
							)
						);

						if ($qry_random_sequence->have_posts()) {
							while ($qry_random_sequence->have_posts()) {
								$qry_random_sequence->the_post(); ?>
								<header class="article-header">
									<h3 class="title subheader">
										<a href="<?php echo home_url() ?>/yoga-articles" title="Articles Archive">Articles</a>
									</h3>
								</header>

								<figure>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail('full'); ?>
									<figcaption>
										<h4><?php the_title_attribute(); ?></h4>
									</figcaption>
									</a>
								</figure>

							<?php
							}
						}?>
				</article>

			</div>


		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
