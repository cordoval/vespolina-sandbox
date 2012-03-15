<?php

$notifier = new Sismo\DBusNotifier();

// add a project with custom settings
$sf2 = new Sismo\Project('vespolina');
$sf2->setRepository('/home/cordoval/sites-2/vespolina_sandbox');
$sf2->setBranch('master');

// phpspec command
$phpspecCommand = '/home/cordoval/sites-2/exam/phpspec-composer.php';
$phpspecFolder = '/home/cordoval/sites-2/exam/lib/PHPPeru/Exam/Spec';
//$longCommand = 'find ' . $phpspecFolder . '*.php -exec ' . $phpspecCommand . ' \'{}\' -f documentation --color \\;';
//$longCommand = 'composer install;'. $phpspecCommand . ' ' . $phpspecFolder . ' -f documentation --color';
$longCommand = 'php vendor/vendors.php; ./develop';

// sets command, slug, commit links and notifier
$sf2->setCommand($longCommand);
$sf2->setSlug('vespolina');
$sf2->setUrlPattern('http://localhost:8000/?p=.git;a=commitdiff;h=%commit%');
$sf2->addNotifier($notifier);

return $sf2;

