<!doctype html>
<html class="no-js" lang="EN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>West Hills College</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/dist/app.min.css">
    </head>
    <body>
        <div class="site js-site" id="site">
            <?php require_once './partials/header.php' ?>
            <main class="site__main-content js-main-content">
                <?php
                    require_once './partials/hero-video.php';
                    require_once './partials/hero-video-poster.php';
                    require_once './partials/campus.php';
                    require_once './partials/circles.php';
                    require_once './partials/interests.php';
                    require_once './partials/financing.php';
                    require_once './partials/options.php';
                    require_once './partials/news.php';
                    require_once './partials/opportunity.php';
                ?>
            </main>
            <?php require_once './partials/footer.php' ?>
        </div>
        <script type="text/javascript" src="assets/js/dist/app.min.js"></script>
    </body>
</html>
