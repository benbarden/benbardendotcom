<?php
$currentDir = getcwd();
chdir(dirname(__FILE__));

date_default_timezone_set('Europe/London');
$showSocialIcons = false;

$includeGtm = false;
$twigOptions = array();
if (isset($_SERVER['HTTP_HOST'])) {
    if ($_SERVER['HTTP_HOST'] == 'www.benbarden.com') {
        $includeGtm = true;
        //$twigOptions = array('cache' => '../../data/cache');
    }
}

// Twig
require_once '../../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../../templates');
$twig = new Twig_Environment($loader, $twigOptions);

$bindings = array();
$bindings['Site']['IncludeGtm'] = $includeGtm == true ? 'Y' : 'N';

chdir($currentDir);
