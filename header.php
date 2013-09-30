<header class="clearfix">
	<h1 id="brand" class="float--left">
		<a href="<?php echo BLOG_URL; ?>">
			<span class="brand--title"><?php echo $blog_title; ?></span>
			<img src="<?php echo BLOG_URL; ?>templates/<?php echo $template; ?>/assets/img/logo.jpg" alt="<?php echo $blog_title ?>" class="brand--image">
		</a>
	</h1>
	<ul id="navigation" class="nav float--right">
	<?php
		for ($i = 0; $i < sizeof($navigation); $i++) {
			$temp = "<li><a ";

			if($navigation[$i]["url"] !== false){
				$temp .= "href='" . $navigation[$i]["url"] . "'";
			}

			if($navigation[$i]["external"] !== false){
				$temp .= " target='_blank'";
			}

			$temp .= ">" . $navigation[$i]["content"] . "</a>";


			if($navigation[$i]["children"] !== false){
				$temp .= "<ul class='sub-nav'>";

				for ($j = 0; $j < sizeof($navigation[$i]['children']); $j++) {
					$temp .= "<li><a href='" . $navigation[$i]['children'][$j]["url"] . "'>" . $navigation[$i]['children'][$j]["content"] . "</a></li>";
				}

				$temp .= "</ul>";
			}

			$temp .= "</li>";

			echo $temp;
			unset($temp);
		}
		unset($navigation);
	?>
	</ul>
</header>
<div id="content">
