<?php
//phpinfo();
//exit;

// sudo chmod 777 /var/log/wwwsv.log
// sudo tail -f /var/log/wwwsv.log
// php -S 127.0.0.1:8000
// php -S localhost:8000 -t /var/www/demo
// php -S localhost:8000 -t ~/000-2020/PHPtest/phpOOP

//error_reporting(E_ALL);
//ini_set("log_errors", 1);
//ini_set("error_log", "/var/log/wwwsv.log");

// error handler function
function custom_error_handler($errlvl, $errdesc, $errfile, $errline) {
    echo "<b>Error:</b> level = [$errlvl] desc = $errdesc<br>";
    echo "<b>Location:</b> file = [$errfile] line = $errline<br>";
    echo "Ending Script";
    die();
}

function custom_error_handler2($errlvl, $errdesc, $errfile, $errline)
{
    switch($errlvl)
    {
        //case E_USER_ERROR:
        case E_WARNING:
        //error_log("Error: $errdesc", 1, 'me@example.com');
        //require_once('my_error_page.php');
        //return true;
    }
    return false;
}
  
//set error handler
set_error_handler("custom_error_handler",E_ALL);

//   //trigger error
// $test=2;
// if ($test>=1) {
//   trigger_error("Value must be 1 or below",E_USER_WARNING);
// }


// exception handler function
function custom_exception_handler($e) {
    // do some erorr handling here, such as logging, emailing errors
    // to the webmaster, showing the user an error page etc
    echo $e->getMessage().' OK';
    exit;
}

function custom_exception_handler2($e){
    $file = 'exceptionlog.txt';
    file_put_contents($file,$e->getMessage(),FILE_APPEND);
    require_once('my_error_page.php');
    exit;
}

//set exception handler
set_exception_handler('custom_exception_handler');


//try {

     // EXCEPTION
    // $x = 122;
    // $y = 0;
    // if ($y == 0)
    //     throw new LogicException('Division by zero');
    // $z = $x/$y;
    // echo $z;


    // ERROR
    //$handle = fopen('myfile.txt', 'r');
    //error_log($z);

//} catch(Exception $e) {
    //echo 'Olla 2'.'<br/>';
    //echo $e->getMessage().'<br/>';
    //throw $e;
//}
//echo 'Olla 3'.'<br/>';

