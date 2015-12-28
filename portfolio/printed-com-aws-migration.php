<?php
    require '../includes/core/base.php';
    $projectTitle = 'printed.com: AWS migration';
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
                <strong>Project</strong>: AWS migration
            </p>
            <p>
                <strong>Launch</strong>: February 2014
            </p>
            <p>
                <strong>Role</strong>: Technical Consultant / QA
            </p>
        </div>
        <div class="col-md-8">
            <h2>Summary</h2>
            <p>
                A project was initiated to move the entire printed.com platform from Rackspace to Amazon. On this project,
                a major part of my role was to share my knowledge of the platform, including locations of shared folders,
                third-party connections to the API and directly to the database, critical business services, cron jobs,
                user logins, the deployment process, server configurations, dependencies on tools and libraries, basically
                anything that would need to work in the new environment.
            </p>
            <p>
                As Technical Consultant I provided all of this information to the Lead Software Engineers. I performed QA
                on the test environment during the setup of the new servers. Finally, I provided extensive support during
                the live deployment, which took up the majority of a weekend. I also performed live system QA and worked
                with the team to approve every test scenario on the list.
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
