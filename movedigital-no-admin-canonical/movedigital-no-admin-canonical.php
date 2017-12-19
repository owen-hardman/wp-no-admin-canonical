<?php
defined( 'ABSPATH' ) or die( 'No direct access.' );
/*
Plugin Name:  No Admin Canonical Redirect
Description:  Disable all the canonical redirects in Admin
Version:      1.0
Author:       Move Digital
Author URI:   http://movedigital.com.au
*/

function md_no_admin_canonical(){
    remove_action('admin_head','wp_admin_canonical_url');
}
add_action('admin_head','md_no_admin_canonical',0);
