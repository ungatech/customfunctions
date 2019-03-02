<?php
/**
 * Name:	Remove WordPress Version Number
 * Description:	The version generator makes the version of wordpress you are using available by simply viewing the page code. If you must use an older version of WordPress for some reason, this may present a security risk. The best protection is to always run the most current version. Some people suggest it isn't necessary to remove the version number because there are other ways for hackers to find out what you're running. Others recommend that you always do it.
 * Source URI:	https://www.ostraining.com/blog/wordpress/functions-php/
 * Author:	Ed Andrea
 * Author URI:	https://www.linkedin.com/in/webeddy
 */
function i_want_no_generators()
{
	return '';
}
add_filter('the_generator','i_want_no_generators');
?>
