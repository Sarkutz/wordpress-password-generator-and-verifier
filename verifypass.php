<?php 
define('password_plain', $argv[1]);
define('password_hashed', $argv[2]);

require("wp-includes/class-phpass.php");
$wp_hasher = new PasswordHash(8, true);
if ($wp_hasher->CheckPassword(password_plain, password_hashed)) {
	echo "Yes password is correct\n";
} else {
	echo "Entered Password is wrong\n";
}
?>
