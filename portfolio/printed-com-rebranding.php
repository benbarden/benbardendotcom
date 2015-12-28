<?php
    require '../includes/core/base.php';
    $projectTitle = 'printed.com: Rebranding';
    $pageTitle = $projectTitle.' - Portfolio - Ben Barden';
    require '../includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li class="active"><?php print($projectTitle); ?></li>
    </ul>

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header"><?php print($projectTitle); ?></h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-4">
            <h2>Project details</h2>
            <p>
                <strong>Project</strong>: Rebranding digitalprintpartnership.com as printed.com
            </p>
            <p>
                <strong>Launch</strong>: October 2011
            </p>
            <p>
                <strong>Role</strong>: Lead Developer
            </p>
        </div>
        <div class="col-md-8">
            <h2>Summary</h2>
            <p>
                Although not a huge project in terms of technical changes, this was a major milestone in the history of
                printed.com.
            </p>
            <p>
                The project required implementation of a new logo, copy changes across the whole site (replacing any
                mentions of the old company name), registration of a new domain name, setting up the server to use the
                new URL, and redirecting everyone to the new name. It all went very smoothly.
            </p>
        </div>
    </div>

<?php
    require '../includes/theme/copyright.php';
?>

</div>
<!-- /.container -->

<?php
    require '../includes/core/scripts.php';
    require '../includes/core/footer.php';
?>
