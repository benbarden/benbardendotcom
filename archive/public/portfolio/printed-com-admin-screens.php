<?php
require '../../includes/core/base.php';

$projectTitle = 'printed.com: Admin screens';
$pageTitle = $projectTitle.' - Portfolio - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['ProjectTitle'] = $projectTitle;

$outputHtml = $twig->render('portfolio/printed-com-admin-screens.twig', $bindings);
print($outputHtml);
