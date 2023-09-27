<?php

global $user_ID;

require_once '../../../wp-load.php';
header("Content-Type:application/json");
$data = json_decode(file_get_contents('php://input'), true);
//print_r($data);


$image_url  = $data['customer']['image_url'];
$post_id    = $data['customer']['post_id'];
$media_id    = $data['customer']['media_id'];
$name    = $data['customer']['name'];

function rs_upload_from_url( $url, $title = null ) {
    require_once( ABSPATH . "/wp-load.php");
    require_once( ABSPATH . "/wp-admin/includes/image.php");
    require_once( ABSPATH . "/wp-admin/includes/file.php");
    require_once( ABSPATH . "/wp-admin/includes/media.php");
    
    // Download url to a temp file
    $tmp = download_url( $url );
    if ( is_wp_error( $tmp ) ) return false;
    
    // Get the filename and extension ("photo.png" => "photo", "png")
    $filename = pathinfo($url, PATHINFO_FILENAME);
    $extension = pathinfo($url, PATHINFO_EXTENSION);
    
    // An extension is required or else WordPress will reject the upload
    if ( ! $extension ) {
        // Look up mime type, example: "/photo.png" -> "image/png"
        $mime = mime_content_type( $tmp );
        $mime = is_string($mime) ? sanitize_mime_type( $mime ) : false;
        
        // Only allow certain mime types because mime types do not always end in a valid extension (see the .doc example below)
        $mime_extensions = array(
            // mime_type         => extension (no period)
            'text/plain'         => 'txt',
            'text/csv'           => 'csv',
            'application/msword' => 'doc',
            'image/jpg'          => 'jpg',
            'image/jpeg'         => 'jpeg',
            'image/gif'          => 'gif',
            'image/png'          => 'png',
            'video/mp4'          => 'mp4',
        );
        
        if ( isset( $mime_extensions[$mime] ) ) {
            // Use the mapped extension
            $extension = $mime_extensions[$mime];
        }else{
            // Could not identify extension
            @unlink($tmp);
            return false;
        }
    }
    
    
    
    // Upload by "sideloading": "the same way as an uploaded file is handled by media_handle_upload"
    $args = array(
        'name' => "$filename.$extension",
        'tmp_name' => $tmp,
    );
    
    // Do the upload
    $attachment_id = media_handle_sideload( $args, 0, $title);
    
    // Cleanup temp file
    @unlink($tmp);
    
    // Error uploading
    if ( is_wp_error($attachment_id) ) return false;
    
    // Success, return attachment ID (int)
    return (int) $attachment_id;
}

$image = rs_upload_from_url( $image_url, $name );
$image_url = wp_get_attachment_url( $image );




//API URL
        $url="https://awamanager.com/api/callback2";
          $data = array(
            "image_url"    => $image_url, 
            "media_id"    => $media_id,
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
        //  echo "<pre>" . $result. "</pre>";









    



?>