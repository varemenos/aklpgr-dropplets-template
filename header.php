<header class="clearfix">
	<h1 id="brand" class="float--left">
		<a href="<?php echo $blog_url; ?>">
			<span class="brand--title"><?php echo $blog_title; ?></span>
			<img src="<?php echo $blog_url; ?>templates/<?php echo $template; ?>/assets/img/logo.jpg" alt="<?php echo $blog_title ?>" class="brand--image">
		</a>
	</h1>
	<ul id="navigation" class="nav float--right">
		<li>
			<a href="<?php echo $blog_url;?>"><i class="icon-home"></i> Home</a>
		</li>
		<?php if (get_all_posts()): ?>
		<li>
			<a href=""><i class="icon-tags"></i> Categories</a>
			<ul class="sub-nav">
				<?php
					$temp = array();
					foreach (get_all_posts() as $post) {
						$temp[trim($post['post_category'])] = true;
					}
					foreach (array_keys($temp) as $temp_category) {
						?>
							<li><a href="<?php echo $blog_url;?>category/<?php echo $temp_category; ?>"><?php echo $temp_category; ?></a></li>
						<?php
					}
					unset($temp);
				?>
			</ul>
		</li>
		<?php endif ?>
		<li>
			<a href="<?php echo $blog_url;?>rss" target="_blank"><i class="icon-feed"></i> RSS</a>
		</li>
	</ul>
</header>
<div id="content">
