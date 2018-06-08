<!doctype html>
<html class="no-js" lang="EN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>West Hills College</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/dist/app.min.css">
        <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=58ffcab8a9dabe0012b033be&product=inline-share-buttons' async='async'></script>

    </head>
    <body>
        <div class="site js-site" id="site">
            <?php require_once './partials/header.php' ?>
            <main class="site__main-content js-main-content">
                <?php
                    require_once './partials/news-detail.php';
                    require_once './partials/related-stories-news-detail.php';
                ?>
            </main>
            <?php require_once './partials/footer.php' ?>
        </div>
        <script type="text/javascript" src="assets/js/dist/app.min.js"></script>
    </body>
</html>