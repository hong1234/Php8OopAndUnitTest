<?php
// require_once __DIR__ . '/error_exception_handler.php';
require_once __DIR__ . '/vendor/autoload.php';

use Demo\Entity\Student;
use Demo\Entity\Banker;
use Demo\Service\Printer;
use Demo\Exception\MyException;

try {
    // EXCEPTION
    $x = 122;
    // $y = 0;
    $y = 2;
    if ($y == 0)
        // throw new LogicException('Division by zero');
        throw new MyException('Division by ZEROOO');
    $z = $x/$y;
    // echo $z;

    // ERROR
    //$handle = fopen('myfile.txt', 'r');
    //error_log($z);

} catch(MyException $e) {
    echo 'there is a error'; echo "\n";
    echo $e->getMessage(); echo "\n";
    //throw $e;
}

$pr = new Printer();
$pr->add(new Student('Anna4', 33, 'anna@yahoo.de', 'Uni Muen'));
$pr->add(new Banker('Bill4', 44, 'bill@yahoo.de', 'SSK Muenchen'));
echo "\n";
// $pr->printAll();
$pr->printAllOnConsole();

//tests run
// php ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests

