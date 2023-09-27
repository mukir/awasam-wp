<?php
require_once '../../../wp-load.php';
header("Content-Type:application/json");
$data = json_decode(file_get_contents('php://input'), true);
//print_r($data);


$post_content  = $data['customer']['description'];
$post_title    = $data['customer']['title'];
$post_name     = strtolower(preg_replace("/[^\w]+/", "-", $post_title));
$date          = date('Y-m-d H:i:s');


    global $user_ID;

    $new_post = array(
        'post_title'   => $post_title,
        'post_content' => $post_content,
        'post_status'  => 'publish',
        'post_date'    => date('Y-m-d H:i:s'),
        'post_author'  => '1',
        'post_type'    => 'post',
        'post_category' => array(0)
    );

    wp_insert_post($new_post);

 
?>