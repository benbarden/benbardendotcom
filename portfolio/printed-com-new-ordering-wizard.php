<?php
    require '../includes/core/base.php';
    $projectTitle = 'printed.com: New ordering wizard';
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
                <strong>Project</strong>: New ordering wizard
            </p>
            <p>
                <strong>Launch</strong>: September 2013
            </p>
            <p>
                <strong>Role</strong>: Lead Developer / Web Product Manager (unofficial)
            </p>
        </div>
        <div class="col-md-8">
            <h2>Summary</h2>
            <p>
                The original ordering wizard at printed.com was designed and built quite rigidly. Due to the lack of
                dedicated developer resource within the team at that time, we were asked to build an ordering wizard
                with product management tools that would allow the team to add new products without developer effort.
            </p>
            <p>
                The limitations of the ordering wizard were felt almost immediately after the product launch, with the
                requirement to build a set of new products that were radically different to the original set.
                The ordering wizard quickly became a complex beast and any hopes of doing anything without developer
                involvement were quickly dashed.
            </p>
            <p>
                The sheer amount of functionality within the wizard meant it
                asn’t feasible to rebuild it for quite some time. Several one-off products were built in standalone,
                bespoke wizards, which allowed greater freedom but created more inconsistencies and technical debt.
            </p>
            <p>
                Around the middle of 2013, we started planning a completely rebuilt wizard – aptly dubbed the “new wizard”.
                Reducing the number of steps from 5 to just 2, providing much more flexibility in the layout on the page,
                adding image sliders to demonstrate papers and envelopes, tooltips, and an improved uploader (added later),
                the final product was a huge improvement.
            </p>
            <p>
                The underlying engine was totally rebuilt in a new framework, with the pricing mechanism similarly rewritten
                from scratch.
            </p>
            <p>
                Initially launching just for business cards, the new wizard was gradually rolled out to almost every
                product on the site, save for the most bespoke products that were better off in their own dedicated wizard.
            </p>
            <h2>Screenshots</h2>
            <p>
                A section of the old wizard:
            </p>
            <p>
                <img src="../assets/img/portfolio/printed-com-wizard-v1-600x440.png" alt="printed.com wizard v1">
            </p>
            <p>
                A section of the new wizard:
            </p>
            <p>
                <img src="../assets/img/portfolio/printed-com-wizard-v2-600x434.png" alt="printed.com wizard v2">
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
