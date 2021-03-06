<article class="single post">
	<header class="post--title">
		<h1><?php echo($post_title); ?></h1>
	</header>

	<div class="row">
		<aside class="col-3-12 post--aside">
			<img src="<?php echo($post_image); ?>" alt="<?php echo($post_title); ?>" />

			<div class="post--meta">
				<ul>
					<?php if (trim($post_author) !== 'Adonis K.'): ?>
						<li>By: <?php echo($post_author); ?></li>
					<?php endif ?>
					<li>Category: <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></li>
					<li><?php echo($published_date); ?></li>
				</ul>
			</div>
		</aside>

		<div class="col-9-12">
			<main class="post--details">
				<?php echo($post_content); ?>
			</main>

			<footer>
				<ul class="post--actions">
					<li><a class="button" href="https://twitter.com/intent/tweet?screen_name=<?php echo($post_author_twitter); ?>&text=Re:%20<?php echo($post_link); ?>%20" data-dnt="true">Comment on Twitter</a></li>
					<li><a class="button" href="https://twitter.com/intent/tweet?text=&quot;<?php echo($post_title); ?>&quot;%20<?php echo($post_link); ?>%20via%20&#64;<?php echo($post_author_twitter); ?>" data-dnt="true">Share on Twitter</a></li>
					<li><a class="button" href="<?php echo($blog_url); ?>">More Articles</a></li>
				</ul>
			</footer>

			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
	</div>
</article>
<div id="disqus_thread"></div>

<script type="text/javascript">
var disqus_shortname = 'aklpgr';

/* * * DON'T EDIT BELOW THIS LINE * * */
(function() {
	var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
</script>
