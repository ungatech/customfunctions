<?php
/**
 * Name:         Hide wp-login Errors
 * Description:  This code adds your custom message as a filter to login errors. This will override default WordPress login errors. Now if someone enters incorrect username, password, or email, WordPress would simply show the error ‘Something is wrong’ without giving any hints.
 * Function URI: https://www.wpbeginner.com/wp-tutorials/how-to-disable-login-hints-in-wordpress-login-error-messages/
 * Author:       WPBeginner
 * Author URI:   https://www.wpbeginner.com/author/wpbeginner/
 */
function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );
?>
