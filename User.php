<?php
define('DB_HOST','127.0.0.1');
define('DB_NAME', 'join_test_db');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');
require_once "Model1.php";

class User extends Model{	 
}

$user = new User();
// $user->name = 'nico';
// $user->email = 'nicog@ail.com';
// $user->role_id = 3;
// $user->save('users');

print_r($user->find(58, 'users'));

// $user->name = 'nicolas';
// $user->email = 'nicogranja@ail.com';
// $user->role_id = 4;
// $user->save('users');

$user2 = new User();
// print_r($user2->showAll('users'));
// $user2->delete(48,'users');




