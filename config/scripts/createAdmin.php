<?php
// createAdmin.php to create a kirby panel admin user
// Usage: php createUser.php '<email>' '<password>'
// inspired by @adspectus https://forum.getkirby.com/t/create-an-admin-user-via-rest-api/21092/3

require 'authenticate.php';

if (count($argv) != 3) {
    echo 'Looks like you forgot something.' . PHP_EOL;
    exit(1);
}

$email = (string)$argv[1];
$password = (string)$argv[2];

try {
    $kirby->users()->create([
        'role' => 'admin',
        'name' => strstr($email, '@', true),
        'email' => $email, 
        'password' => $password,
    ]);
}
catch(Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    exit(1);
}

exit(0);

?>