<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:description" content="<?= $description; ?>" />
    <meta name="description" content="<?= $description; ?>" />
    <meta name="Language" content="Indonesia" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="geo.region" content="ID" />
    <meta property="og:locale" content="id_ID" />
    <link rel="shortcut icon" href="<?= theme_url('/assets/favicon.ico'); ?>" type="image/x-icon" sizes="16x16">
    <link rel="canonical" href="<?= canonical_url(); ?>" />
    <link rel="alternate" href="<?= canonical_url(); ?>" hreflang="id-id" />
    <link rel="preconnect" href="https://ajax.googleapis.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preconnect" href="https://i2.wp.com">
    <link rel="preconnect" href="https://connect.facebook.net">
    <link rel="dns-prefetch" href="https://connect.facebook.net">
    <link href='<?= theme_url('/assets/favicon.ico'); ?>' rel='icon' type='image/x-icon' />
    <link rel="icon" href="<?= theme_url('/assets/img/music32.png'); ?>" sizes="32x32" />
    <link rel="icon" href="<?= theme_url('/assets/img/music192.png'); ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?= theme_url('/assets/img/music.png'); ?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= theme_url('/assets/css/styles.css'); ?>" />
    <style>
        .text-break {
            word-break: break-word !important;
            overflow-wrap: break-word !important;
        }

        .text-wrap {
            white-space: normal !important;
        }

        .text-center {
            text-align: center;
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
</head>

<body>
    <header class="dd dd">
        <form action="/" class="dd search right">
            <input name="q" type="text" placeholder="Click and enter.." class="dd field" />
            <div class="dd icons-container">
                <div class="dd icon-search"></div>
            </div>
        </form>
        <a class="dd name left" href="/" title="<?= option('site_name'); ?>"><?= option('site_name'); ?></a>
        <nav class="dd navbar">
            <a href="<?= search_permalink('dangdut'); ?>" title="Download Dangdut">Dangdut</a>
            <a href="<?= search_permalink('pop indonesia'); ?>" title="Download Lagu Pop Indo">Pop Indo</a>
            <a href="<?= search_permalink('kpop'); ?>" title="Download Kpop">Kpop</a>
        </nav>
    </header>
    <?= $this->renderSection('content') ?>
    <div class="clear"></div>
    <footer>
        <p> Download Lagu Mp3 Terbaru 2021, Gudang Lagu Terbaik Gratis. Situs Download Lagu Gratis, Gudang lagu Mp3 Indonesia, lagu barat terbaik.<br /> Contact: <?= site_domain(); ?>@gmail.com</p>
    </footer>
</body>

</html>