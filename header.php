<header class="clearfix">
	<h1 id="brand" class="float--left">
		<a href="<?php echo $blog_url; ?>"><?php echo $blog_title; ?></a>
	</h1>
	<ul id="navigation" class="nav float--right">
		<li>
			<a href="<?php echo $blog_url;?>">Home</a>
		</li>
		<?php if (get_all_posts()): ?>
		<li>
			<a href="">Categories</a>
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
	</ul>
</header>
<div id="content">
