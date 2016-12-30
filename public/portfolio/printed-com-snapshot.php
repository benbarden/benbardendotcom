<?php
require '../../includes/core/base.php';

$projectTitle = 'printed.com: Snapshot';
$pageTitle = $projectTitle.' - Portfolio - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['ProjectTitle'] = $projectTitle;

$outputHtml = $twig->render('portfolio/printed-com-snapshot.twig', $bindings);
print($outputHtml);
