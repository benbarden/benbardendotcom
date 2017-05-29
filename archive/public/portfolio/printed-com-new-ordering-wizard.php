<?php
require '../../includes/core/base.php';

$projectTitle = 'printed.com: New ordering wizard';
$pageTitle = $projectTitle.' - Portfolio - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['ProjectTitle'] = $projectTitle;

$outputHtml = $twig->render('portfolio/printed-com-new-ordering-wizard.twig', $bindings);
print($outputHtml);
