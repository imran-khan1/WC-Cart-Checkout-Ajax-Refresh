<?php
/*
Plugin Name: WC Cart-Checkout Ajax Refresh
Plugin URI: http://imran1.com
Description: WooCommerce Cart Checkout Ajax Refresh
Version: 1.0.0
Author: Imran Khan
Author URI: http://imran1.com
*/


 function wc_qty_change_update_cart(){?>
            
            <script>
            jQuery(".qty").blur(function(){      
                jQuery("[name='update_cart']").trigger("click"); 
            });
            </script>   
            <?php
            }            
            add_action("wp_footer","wc_qty_change_update_cart");  
            
            
            
            
            
            
            function wc_qty_change_update_checkout(){?>
            
            <script>
            jQuery("#billing_postcode").blur(function(){      
                jQuery( 'body' ).trigger( 'update_checkout' );
            });
            </script>   
            <?php
            }            
            add_action("wp_footer","wc_qty_change_update_checkout");          