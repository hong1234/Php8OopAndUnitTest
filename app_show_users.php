<?php
// require_once __DIR__ . '/error_exception_handler.php';
require_once __DIR__ . '/vendor/autoload.php';

use Demo\Entity\User;
use Demo\Dao\UserDao;
// use Demo\Service\UserService;
use Demo\Service\Printer;

// use Exception;
$users = [];
try {
    // $userSv = new UserService(new UserDao());
    // $userSv->addUser(new User("Danny", "danny@gmail.com", "123danny"));
    $dao = new UserDao();
    $users = $dao->getUsers();

}  catch(\Exception $e) {
    
    echo 'there is a error'; echo "\n";
    echo $e->getMessage(); echo "\n";
    //throw $e;
}

$pr = new Printer($users);
// $pr->add(new Student('Anna4', 33, 'anna@yahoo.de', 'Uni Muen'));
// $pr->add(new Banker('Bill4', 44, 'bill@yahoo.de', 'SSK Muenchen'));
echo "\n";
// $pr->printAll();
$pr->printAllOnConsole();

//tests run
// php ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests

