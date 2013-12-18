<article class="post">
	<div class="post--title">
		<h1><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h1>
	</div>

	<div class="row">
		<aside class="col-3-12 post--aside">
				<img src="<?php echo($post_image); ?>" alt="<?php echo($post_title); ?>" />
		</aside>

		<div class="col-9-12">
			<main class="post--details">
				<?php echo($post_intro); ?>
			</main>

			<footer>
				<div class="post--meta">
					<ul>
						<?php if (trim($post_author) !== 'Adonis K.'): ?>
							<li>By: <?php echo($post_author); ?></li>
						<?php endif ?>
						<li>Category: <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></li>
						<li><?php echo($published_date); ?></li>
					</ul>
				</div>

				<ul class="post--actions">
					<li><a class="button" href="<?php echo($post_link); ?>">Continue Reading</a></li>
					<?php if ($category) { ?>
					<li><a class="button" href="<?php echo($blog_url); ?>">More Articles</a></li>
					<?php } ?>
				</ul>
			</footer>
		</div>
	</div>
</article>
