<?php get_header(); ?>
	<div id="container">
		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post page bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/post-shadow.png);">
				<div class="title bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/post-t-page.png);">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="post-inner">
					<div class="entry">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="bottom bgpng">
				</div>
			</div><!-- //post -->
			<?php endwhile;?>        	
				<div id="nav">
					<ul>
						<li><?php previous_comments_link(); ?></li>
						<li><?php next_comments_link(); ?></li>
					</ul>
				</div>
			<?php else : ?>
				<h2>Not found</h2>
			<?php  endif; ?>
		</div><!-- / Content -->
		
		<?php get_sidebar(); ?>
	</div><!-- / container -->
<?php get_footer(); ?>