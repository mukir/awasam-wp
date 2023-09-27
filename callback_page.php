<?php
require_once '../../../wp-load.php';
header("Content-Type:application/json");
$data = json_decode(file_get_contents('php://input'), true);
//print_r($data);


$post_content       = $data['customer']['description'];
$post_title         = $data['customer']['title'];
$myid               = $data['customer']['id'];
$post_action        = $data['customer']['post_action'];
$post_type          = $data['customer']['post_type'];
$focus_keyword      = $data['customer']['focus_keyword'];
$meta_description   = $data['customer']['meta_description'];
$post_name          = strtolower(preg_replace("/[^\w]+/", "-", $post_title));
$date               = date('Y-m-d H:i:s');

global $user_ID;

if($post_type=='homepage'){

  $post_id  = get_option('page_on_front');
  $post_url = get_permalink($post_id);
  $post     = get_post($post_id);
  $post->post_content = $post_content;
  $post->post_title   = $post_title;
  $post_content = $post->post_content;
  wp_update_post( $post );

  



}

else{


  if($post_action=='publish'){



    $new_post = array(
      'post_title'   => $post_title,
      'post_content' => $post_content,
      'post_status'  => 'publish',
      'post_date'    => date('Y-m-d H:i:s'),
      'post_author'  => '1',
      'post_type'    => $post_type,
      'post_author'  => 'Awasam',
      'post_category' => array(0),
      'meta_input' => array(
        'meta_key' => $meta_description,
        'next_meta_key' => $focus_keyword
      )
    );

    $post_id =  wp_insert_post($new_post);
    $post_url = get_permalink($post_id);

  }

  else{

    $post_id = $data['customer']['post_id'];
    $post_url = get_permalink($post_id);
    $post = get_post( $post_id );


    $post->post_content = $post_content;
    $post->post_title   = $post_title;

    wp_update_post( $post );

  }

}







      //API URL
$url="https://awamanager.com/api/callback";
$data = array(
  "post_url"    => $post_url, 
  "id"    => $myid,
  "post_id"    => $post_id,
  "post_action"    => $post_action,
  'post_type'    => $post_type,
  'post_content'    => $post_content,
);

$ch = curl_init( $url );
# Setup request to send json via POST.
$payload = json_encode( array( "customer"=> $data ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo "<pre>" . $result. "</pre>";




?>