<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php');
require_once locate_template('/functions/woocommerce-setup.php');
//require_once locate_template('/functions/custom-post-type-resource.php');
require locate_template('/functions/theme-hooks.php');
require locate_template('/functions/develop.php');

//include locate_template('/includes/options/bst-options.php');
