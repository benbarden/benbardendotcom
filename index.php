<?php
    require 'includes/core/base.php';
    $pageTitle = 'Ben Barden';
    require 'includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-8">
            <h1 class="page-header">Ben Barden</h1>
        </div>
        <div class="col-md-4" style="margin: 40px 0 0 0;">
            Follow:
            <a href="https://benbarden.wordpress.com" target="_blank">
                <img src="/assets/img/social/wordpress.png" alt="Blog" title="Blog" style="width: 36px; height: 36px; border: 0;"></a>
            <a href="https://twitter.com/benbarden" target="_blank">
                <img src="/assets/img/social/twitter.png" alt="Twitter" title="Twitter" style="width: 36px; height: 36px; border: 0;"></a>
            <a href="https://www.linkedin.com/in/benbarden" target="_blank">
                <img src="/assets/img/social/linkedin.png" alt="LinkedIn" title="LinkedIn" style="width: 36px; height: 36px; border: 0;"></a>
            <a href="https://instagram.com/benbarden/" target="_blank">
                <img src="/assets/img/social/instagram.png" alt="Instagram" title="Instagram" style="width: 36px; height: 36px; border: 0;"></a>
            <a href="mailto:fromtheblog@benbarden.com" target="_blank">
                <img src="/assets/img/social/telegram.png" alt="Email" title="Email" style="width: 36px; height: 36px; border: 0;"></a>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-8 portfolio-item">
            <div class="row">
                <div class="col-md-12">
                    <a href="https://benbarden.wordpress.com">
                        <img class="img-responsive" src="/assets/img/IMG_1946-780.jpg" alt="Big Ben">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2>Blog posts</h2>
                    <div id="bb-blog-post-wrapper">

                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Links</h2>
                    <div id="bb-blog-link-wrapper">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="about/">
                <img src="/images/2015-09-Ben-Barden-360px.jpg" alt="Ben Barden" style="border: 0;">
            </a>
            <h2>About</h2>
            <p>I'm a technical leader with broad knowledge of all things tech.
                I'm currently working for City A.M. as Product and Technology Director.
                <a href="about/">Read more</a>.</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div id="bb-photo-wrapper" class="col-md-12 portfolio-item">
            <h2>
                Photos (via <a href="https://instagram.com/benbarden">Instagram</a>)
            </h2>
            <div id="instafeed"></div>
        </div>
    </div>
    <!-- /.row -->

<?php
    require 'includes/theme/copyright.php';
?>

</div>
<!-- /.container -->
<?php
    require 'includes/creds/instagram.php';
?>
<script type="text/javascript" src="/assets/js/instafeed.min.js"></script>
<script type="text/javascript">
    var feed = new Instafeed({
        get: 'user',
        userId: '44183844',
        clientId: '<?php print($instagramClientId); ?>',
        accessToken: '<?php print($instagramAccessToken); ?>',
        limit: 7,
        template: '<a href="{{link}}" style="border: 0;"><img src="{{image}}" alt="{{caption}}" title="{{caption}}" style="margin: 6px;" /></a>'
    });
    feed.run();
</script>

<?php
    require 'includes/core/scripts.php';
    require 'includes/tools/homepage-feeds.php';
    require 'includes/core/footer.php';
?>
