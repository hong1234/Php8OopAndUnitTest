<?php
// require_once __DIR__ . '/error_exception_handler.php';
require_once __DIR__ . '/vendor/autoload.php';

use Demo\Entity\User;
use Demo\Dao\UserDao;
// use Demo\Service\UserService;

// use Exception;

try {
    // $userSv = new UserService(new UserDao());
    // $userSv->addUser(new User("Danny", "danny@gmail.com", "123danny"));
    $dao = new UserDao();
    $dao->insert(new User("Danny", "danny@gmail.com", "123danny"));

}  catch(\Exception $e) {
    echo 'there is a error'; echo "\n";
    echo $e->getMessage(); echo "\n";
    //throw $e;
}

//tests run
// php ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests

