<?php
	function getCategories(){
		if (get_all_posts()){
			$temp = array();
			$result = array();

			foreach (get_all_posts() as $post) {
				$temp[trim($post['post_category'])] = true;
			}

			$temp = array_keys($temp);

			sort($temp);

			foreach ($temp as $temp_category) {
				array_push($result, array(
					"url" => $blog_url . "category/" . $temp_category,
					"external" => false,
					"content" => $temp_category,
					"children" => false
				));
			}

			unset($temp);

			return $result;
		}
	}

	$navigation = array();

	$navigation[0] = array(
		"url" => $blog_url,
		"external" => false,
		"content" => "<i class='icon-home'></i> Home",
		"children" => false
	);

	$navigation[1] = array(
		"url" => false,
		"external" => false,
		"content" => "<i class='icon-tags'></i> Categories",
		"children" => getCategories()
	);

	$navigation[2] = array(
		"url" => $blog_url . "rss",
		"external" => true,
		"content" => "<i class='icon-feed'></i> RSS",
		"children" => false
	);
?>
