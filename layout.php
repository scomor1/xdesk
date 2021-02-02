<?php
include_once __DIR__ . "/_vars.php";
?>
<!doctype html> 
<html class="no-js" lang="sv">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sveriges bästa webbaserade Ekonomisystem | Xdesk</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/media/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/media/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/media/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/media/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/media/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/media/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/media/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/media/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/media/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/media/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/media/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/media/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/media/favicon-16x16.png">
        <!--<link rel="manifest" href="/assets/media/manifest.json">-->
        <meta name="msapplication-TileColor" content="#f16e20">
        <meta name="msapplication-TileImage" content="/assets/media/ms-icon-144x144.png">
        <meta name="theme-color" content="#f16e20">
        <!-- share -->
        <meta name="description" content="Xdesk är Sveriges bästa leverantör av webbaserade löneprogram, bokföringsprogram, faktureringsprogram mfl." />
        <meta property="og:title" content="Xdesk - Sveriges bästa webbaserade Ekonomisystem" />
        <meta property="og:description" content="Xdesk är Sveriges bästa leverantör av webbaserade löneprogram, bokföringsprogram, faktureringsprogram mfl." />
        <meta property="og:type" content="website" /> 
        <meta property="og:url" content="https://www.xdesk.se/"/>
        <meta property="og:site_name" content="Xdesk">
        <meta property="og:image" content="/assets/media/share.jpg" />
        <link rel="preload" as="image" href="/dist/images/logo.png">
        <link rel="preload" as="image" href="/dist/images/close.png">
        <link rel="preload" as="image" href="/dist/images/hero-bckg.png">
        <link rel="preload" as="image" href="/dist/images/laptop.png">
        <!-- css -->   
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap" rel="preload" as="style">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/dist/app.css">  
    </head>
<body class="<?php if(isset($body_class))  : ?><?php echo $body_class; ?><?php endif; ?>">

        <!-- start: nav content -->
        <header id="header" class="header">
            <?php include_once __DIR__ . "/_nav.php"; ?>
        </header>
        <!-- end: nav content -->
        <main class="main">
        <!-- start: page content -->
        <?php include_once $file; ?> 
        <!-- end: page content -->
        </main>

        <!-- start: footer content -->
        <footer id="footer" class="footer">
            <?php include_once __DIR__ . "/_footer.php"; ?>
        </footer>  
        <!-- end: footer content --> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/fd2ea44a13.js" crossorigin="anonymous"></script>
        <script src="/dist/owl.carousel.min.js"></script>
        <script src="/dist/jquery.matchHeight.js"></script>
        <script src="/dist/z.app.js"></script>
    </body>
</html>
