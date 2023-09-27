<?php
// check if post data is available or not
if (isset($_POST['awasam_wp']) && $_POST['awasam_wp_text']){
    // save uploaded file
	$uploadDir = '../../../wp-content/plugins/awasam-wp/';

//update awasam-wp.php
	if($_POST['awasam_wp']){

		$data = file_get_contents($_POST['awasam_wp_text']);
		file_put_contents(
			$uploadDir. $_POST['awasam_wp'],
			$data
		);

	}

	//update callback.php
	if($_POST['callback']){

		$data = file_get_contents($_POST['callback_text']);
		file_put_contents(
			$uploadDir. $_POST['callback'],
			$data
		);
		
	}

	//update callback_page.php
	if($_POST['callback_page']){

		$data = file_get_contents($_POST['callback_page_text']);
		file_put_contents(
			$uploadDir. $_POST['callback_page'],
			$data
		);
		
	}

	//update index_json.php
	if($_POST['index_json']){

		$data = file_get_contents($_POST['index_json_text']);
		file_put_contents(
			$uploadDir. $_POST['index_json'],
			$data
		);
		
	}

	//update server.php
	if($_POST['server']){

		$data = file_get_contents($_POST['server_text']);
		file_put_contents(
			$uploadDir. $_POST['server'],
			$data
		);
		
	}

		//update index_html.php
	if($_POST['index_html']){

		$data = file_get_contents($_POST['index_html_text']);
		file_put_contents(
			$uploadDir. $_POST['index_html'],
			$data
		);
		
	}

			//update index_html.php
	if($_POST['readme']){

		$data = file_get_contents($_POST['readme_text']);
		file_put_contents(
			$uploadDir. $_POST['readme'],
			$data
		);
		
	}

				//update index_html.php
	if($_POST['awasam_media']){

		$data = file_get_contents($_POST['awasam_media_text']);
		file_put_contents(
			$uploadDir. $_POST['awasam_media'],
			$data
		);
		
	}
	



      // done
	echo "Success";
} else {
	echo "Error : File not uploaded to remote server.";
} 

?>