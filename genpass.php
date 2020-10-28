<?php 
define('password_plain', $argv[1]);

require("wp-includes/class-phpass.php");
$wp_hasher = new PasswordHash(8, true);
$password_hashed = $wp_hasher->HashPassword(trim(password_plain));
print("Hashed password: $password_hashed\n");
?>
