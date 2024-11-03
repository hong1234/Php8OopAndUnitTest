<?php
// require_once __DIR__ . '/error_exception_handler.php';
require_once __DIR__ . '/vendor/autoload.php';

use Demo\Dao\UserDao;
use Demo\Service\UserService;

// use Exception;

try {
    $userSv = new UserService(new UserDao());
    $userSv->addUser("Danny", "danny@gmail.com", "123danny");

}  catch(\Exception $e) {
    echo 'there is a error'; echo "\n";
    echo $e->getMessage(); echo "\n";
    //throw $e;
}

//tests run
// php ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests

