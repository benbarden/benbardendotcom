<?php
    require '../includes/core/base.php';
    $projectTitle = 'printed.com: Admin screens';
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
                <strong>Project</strong>: Admin screens
            </p>
            <p>
                <strong>Launch</strong>: N/A – there were many changes needed on an ongoing basis
            </p>
            <p>
                <strong>Role</strong>: Lead Developer / Web Product Manager (unofficially)
            </p>
        </div>
        <div class="col-md-8">
            <h2>Summary</h2>
            <p>
                Part of my ongoing role at printed.com was to build a vast collection of admin screens, including
                product configuration, production/dispatch tools, and financial reporting.
            </p>
            <p>
                It’s difficult to summarise just how much work went into these. Having seen many admin screens that
                offer little more than a simplified table with very little thought as to how staff will actually interact
                with it, I went out of my way to make the screens both comprehensive and easy to use, as well as being
                linked from logical places in the admin nav.
            </p>
            <p>
                Things like being able to enter a reference number and hit Enter to search from any screen in admin
                (rather than having to open up the relevant screen first, type the number, click Search with the mouse,
                sort the results etc) made order lookups a breeze. Standardised reports that were relatively easy for
                the tech team to build, but also had standard features such as date pickers and CSV exports on every
                single report, paid dividends as the reporting suite grew to around 70 unique reports.
            </p>
            <p>
                I had regular conversations with the Customer Service team, the product team and staff around the
                company to find pain points and identify new reports that might be needed. The growth of the site and
                the team to support it meant that constantly getting requests for a bespoke SQL report (often over and
                over again) was just not scalable. So I came up with ways for staff to “self-serve” as much as possible.
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
