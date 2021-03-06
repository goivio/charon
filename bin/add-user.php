#!/usr/bin/php
<?php
/**
 * Creates a User
 * @author Jason Wright <jason@invexi.com>
 * @since 2/27/15
 * @package charon
 */

require_once(__DIR__.'/../config.php');

$user = readline('User: ');

// use hidden password functionality in read library
$pass1 = trim(`/bin/bash -c "read -s -p 'Pass: ' password && echo \\\$password"`);
echo "\n";

// use hidden password functionality in read library
$pass2 = trim(`/bin/bash -c "read -s -p 'Re-enter Pass: ' password && echo \\\$password"`);
echo "\n";

// check passwords
if ($pass1 != $pass2) {
    echo "Passwords do not match\n";
    die();
}

User::add($user, $pass1);

echo "Success!\n";