<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "order";
$site = $_SERVER['HTTP_HOST'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());
   // echo '<script>window.location="https://awasam.com/academic-writing-wordpress-plugin/"</script>';
}

$sql = "SELECT title, domain_name FROM ads";
$sites = mysqli_query($conn, $sql);

$sql1 = "SELECT sub_pvalue, sub_name FROM ops_subjects";
$subjects = mysqli_query($conn, $sql1);

$sql1 = "SELECT aclevel_value, aclevel_name FROM ops_aclevel";
$academic_level = mysqli_query($conn, $sql1);

$sql2 = "SELECT pricing_value, pricing_id, pricing_urgency, pricing_site, pricing_duration, pricing_checked FROM ops_pricing WHERE pricing_site = '".$site."' ORDER BY pricing_value DESC";
$urgency = mysqli_query($conn, $sql2);

$sqll2 = "SELECT pptype_pvalue, pptype_name FROM ops_pptypes";
$pptypes = mysqli_query($conn, $sqll2);

$sql3 = "SELECT pptype_pvalue, pptype_name FROM ops_pptypes";
$pptype = mysqli_query($conn, $sql3);

$sql33 = "SELECT service_price, id, service_names FROM ops_service";
$services = mysqli_query($conn, $sql33);

$sql4 = "SELECT writer_id, writer_fname, writer_nickname, writer_proimg, writer_subjects FROM ops_writers LIMIT 3";
$opwriters = mysqli_query($conn, $sql4);

$sql6 = "SELECT order_wramount, order_id, order_subject, order_tpaper, order_title, ops_aclevel, order_pages FROM ops_orders ORDER BY order_id DESC LIMIT 10";
$latest10 = mysqli_query($conn, $sql6);

$sql5 = "SELECT order_id, order_title, order_tpaper, order_clientid, order_subject, order_pages, order_subject, order_dateposted, order_writer, order_writer, order_rating, order_ratecomment FROM ops_orders WHERE order_rating != '' ORDER BY order_id DESC LIMIT 50";
$opreviews = mysqli_query($conn, $sql5);

?>
