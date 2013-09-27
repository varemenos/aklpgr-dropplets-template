<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $page_title; ?></title>
		<meta name="description" content="<?php echo $meta_description; ?>">
		<meta author="" content="http://varemenos.com">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php echo $blog_url; ?>templates/<?php echo $template; ?>/assets/css/main.css">
		<?php echo $page_meta; ?>
		<?php get_header(); ?>
		<link rel="shortcut icon" href="<?php echo $blog_url; ?>templates/<?php echo $template; ?>/favicon.ico">
	</head>
	<body>
		<?php
			include 'header.php';
			echo $content;
			include 'footer.php';
			get_footer();
		?>
	</body>
</html>
