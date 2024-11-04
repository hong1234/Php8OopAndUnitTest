<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Demo\Command\ShowListCommand;

$application = new Application();

$command = new ShowListCommand();

// ... register commands
$application->add($command);

$application->run();


// php ./vendor/bin/console app:show-list
