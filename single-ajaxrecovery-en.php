<?php
/**
* Template Name: Ajaxrecovery Reza
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
if(isset($_POST['email']) && isset($_POST['code']))
{
     $email=$_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

 global $woocommerce, $wpdb;

 $code=intval($_POST['code']);
 $posts = $wpdb->get_results("SELECT * FROM wp_woocommerce_downloadable_product_permissions WHERE (user_email = '$email' AND order_id = '$code')");
 $_pf = new WC_Product_Factory(); 
  if(count($posts)>0)
     {
 foreach($posts as $p)
 {
     $_product  = $_pf->get_product($p->product_id);
     $downloads = $_product->get_files();
    
     foreach( $downloads as $key => $each_download ) {
      echo '<div style="border:1px solid #ccc;display:block;padding:15px;">'.$_product->get_title().':   <a target="_blank" style="cursor: pointer;background: #3131d5;color: #fff;padding:10px;border-radius:15px;margin:auto;" href="'.$each_download["file"].'">دانلود</a></div>';
     }
     
 }
     } else {
  echo("is not a valid email address");
}}
     else{
         echo '<h3 style="border:1px solid #ccc;display:block;padding:15px;">موردی یافت نشد!</h3>';
     }
}
?>
