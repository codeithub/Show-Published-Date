add_action( 'woocommerce_single_product_summary','codeithub_echo_product_date',25 );
 
function codeithub_echo_product_date() {
if ( is_product() ) {
echo the_date('', '<span class="date_published">Published on: ', '</span>', false);
}
}
