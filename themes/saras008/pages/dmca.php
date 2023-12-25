<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>" />
    <meta property="og:url" content="<?= canonical_url(); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="<?= option('site_name'); ?>" />
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:description" content="<?= $description; ?>" />
    <meta property="og:image" content="/assets/download-lagu-gratis.jpg" />
    <link href="//i2.wp.com" rel="dns-prefetch" />
    <link href="//cdnjs.cloudflare.com" rel="dns-prefetch" />
    <link href="//1.bp.blogspot.com" rel="dns-prefetch" />
    <link href="//2.bp.blogspot.com" rel="dns-prefetch" />
    <link href="//3.bp.blogspot.com" rel="dns-prefetch" />
    <link href="//4.bp.blogspot.com" rel="dns-prefetch" />
    <link href="//fonts.googleapis.com" rel="dns-prefetch" />
    <link href="//www.youtube.com" rel="dns-prefetch" />
    <link href="//www.google-analytics.com" rel="dns-prefetch" />
    <link href="//www.gstatic.com" rel="dns-prefetch" />
    <link href="//www.googletagservices.com" rel="dns-prefetch" />
    <link href="//tpc.googlesyndication.com" rel="dns-prefetch" />
    <link href="//syndication.twitter.com" rel="dns-prefetch" />
    <link href="//fonts.gstatic.com" rel="dns-prefetch" />
    <link href="https://lh3.googleusercontent.com" rel="dns-prefetch" />
    <link href="https://tpc.googlesyndication.com" rel="dns-prefetch" />
    <link href="https://i.ytimg.com" rel="dns-prefetch" />
    <link href="https://i3.ytimg.com" rel="dns-prefetch" />
    <link href="https://img.youtube.com" rel="dns-prefetch" />
    <link href="https://www.googletagmanager.com" rel="dns-prefetch" />
    <link href='/assets/favicon.ico' rel='icon' type='image/x-icon' />
    <link rel="icon" href="/assets/img/music32.png" sizes="32x32" />
    <link rel="icon" href="/assets/img/music192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/assets/img/music.png" />
    <meta name="google-site-verification" content="HmcVLUhzJESpa5iq7dFRwd6Lcbx-0nj3WFe-Nvkw9hA" />
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Ubuntu&family=Yusei+Magic&display=swap);

        html {
            background: #eee
        }

        a {
            text-decoration: none;
            color: #c44569
        }

        a:hover {
            color: rgb(196, 69, 105, .6)
        }

        body {
            font-family: Ubuntu;
            font-size: 13px;
            margin: 0 auto;
            max-width: 780px;
            letter-spacing: .3px;
            background: #fff;
            color: #555
        }

        header {
            background: #fff;
            padding-top: 10px;
            border-bottom: 15px solid #eee
        }

        header .h1 {
            margin-left: 17px;
            font-size: 25px;
            font-family: 'Yusei Magic'
        }

        #header form {
            background: #eee;
            position: relative;
            overflow: hidden;
            height: 35px;
            display: block;
            line-height: 17pt;
            width: 92%;
            margin: 10px auto 0 auto;
            border-radius: 2px
        }

        #header input {
            border: none
        }

        #header .txt {
            font-family: Ubuntu;
            background: #eee;
            padding: 6px 9px;
            position: absoute;
            top: 0;
            height: 70%
        }

        #header .submit {
            font-family: Ubuntu;
            background: #c44569;
            color: #fff;
            padding: 6px 9px;
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0
        }

        .navbar {
            background: #c44569;
            margin-top: 10px;
            float: none;
            pading: 6px;
            clear: left
        }

        .navbar a {
            background: #c44569;
            padding: 8px 10px;
            color: #fff;
            display: inline-block;
            border-right: 2px solid rgb(196, 69, 105, .1)
        }

        .navbar a:hover {
            background: #555
        }

        @media only screen and (max-width:600px) {
            body {
                background: #eee
            }

            aside,
            main {
                background: #fff;
                margin: 0 10px
            }

            header .h1,
            header form {
                float: none
            }
        }

        main {
            padding: 10px
        }

        h1 {
            font-size: 16px;
            padding: 6px;
            margin: 0 0 10px 0;
            color: #555
        }

        h1::first-letter {
            color: #c44569;
            margin-right: 2px
        }

        .description {
            font-size: 13px;
            padding: 10px;
            letter-spacing: .2px;
            word-spacing: .3px;
            line-height: 14pt
        }

        .gren {
            background: rgb(89, 98, 117, .1);
            color: #596275
        }

        .hijau {
            background: rgb(33, 140, 116, .1);
            color: #218c74
        }

        h2 {
            font-size: 16px;
            word-spacing: 1px
        }

        h2 {
            font-size: 15px;
            padding: 10px 10%;
            margin-bottom: 6px;
            position: relative;
            overflow: hidden
        }

        h2 b {
            color: #555;
            margin: auto;
            padding: 0 10px;
            font-size: 15px;
            background: #fff;
            position: absolute;
            top: 0;
            z-index: 2;
            color: #666;
            letter-space: .2px
        }

        h2:after {
            background: rgb(196, 69, 105, .8);
            height: 4px;
            width: 100%;
            display: block;
            content: "";
            right: 0;
            top: 50%;
            position: absolute;
            z-index: 1;
            border-radius: 5px
        }

        .red {
            color: red;
            font-weight: 700
        }

        .articel-list {
            padding: 13px 10px 10px 5px;
            display: block;
            border-bottom: 2px dashed #eee;
            color: #707070;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
        }

        .articel-list img {
            float: left;
            border-radius: 4px;
            margin-right: 16px;
            margin-top: -2px;
            width: 50px;
            height: 50px
        }

        h3 {
            margin: 0;
            font-size: 13px;
            color: #786fa6
        }

        ul.popular-song {
            padding: 0;
            margin: 0;
            list-style: none;
            counter-reset: list-number
        }

        ul.popular-song li {
            padding: 8px 0;
            border-bottom: dashed 2px #f2f2f2;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap
        }

        ul.popular-song li:before {
            counter-increment: list-number;
            content: counter(list-number);
            color: #555;
            width: 29px
        }

        aside {
            padding: 16px 10px 10px 10px
        }

        footer {
            border-top: 20px solid #eee;
            background: #fff;
            padding: 10px;
            text-align: center
        }

        .thumbnail {
            width: 100%;
            height: 120px;
            display: block;
            margin: auto;
            border-radius: 4px
        }

        ul.detail {
            list-style: none;
            padding: 0;
            margin: 5px;
            border: 1px solid #eee;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap
        }

        ul.detail li:nth-child(odd) {
            background: #eee;
            padding: 4px
        }

        ul.detail li:nth-child(even) {
            padding: 4px
        }

        ul.detail li i {
            width: 30%;
            display: inline-block;
            font-style: normal
        }

        .download {
            text-align: center;
            margin: 10px;
        }

        .download a {
            background: #c44569;
            padding: 8px 26px;
            color: #fff;
            display: inline-block;
            border-radius: 20px
        }

        .download a:hover {
            background: rgb(196, 69, 105, .8);
        }

        @media only screen and (min-width:600px) {
            header {
                background: #fff;
                padding-top: 20px;
                border-bottom: 15px solid #eee
            }

            header .h1 {
                float: left;
                margin-top: 0
            }

            #header form {
                width: 40%;
                float: right;
                background: #eee;
                position: relative;
                overflow: hidden;
                height: 35px;
                margin-right: 20px;
                line-height: 17pt
            }

            .navbar {
                margin-top: 48px;
                width: 80%;
                float: none;
                pading: 6px;
                clear: left;
                background: #fff
            }

            .navbar a {
                background: #c44569;
                padding: 4px 10px;
                color: #fff;
                display: inline-block
            }

            main {
                max-width: 60%;
                min-width: 60%;
                float: left;
                border-right: 5px solid #eee
            }

            aside {
                padding: 16px 10px 10px 10px;
                margin-top: px;
                width: 32%;
                float: left;
                margin-left: 3px
            }

            .clear {
                clear: left
            }

            .clear::after {
                content: "";
                clear: both;
                display: table
            }
        }

        .buttondl {
            background: #c44569;
            color: #fff;
            margin: 3px 5px 20px 3px;
            padding: 3px 6px;
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .buttondl:hover {
            background: rgb(196, 69, 105, .6);
            color: #fff;
        }
    </style>
</head>

<body>
    <header id="header">
        <a class="h1" href="/" title="<?= option('site_tagline'); ?>"><?= option('site_name'); ?></a>
        <form action="/" id="search-songs" method="get">
            <input class="txt" placeholder='Insert Artist or Title...' type='text' name="q" id="search-query">
            <input class="submit" type="submit" value="Search" />
        </form>
        <nav class="navbar">
            <a href="mailto:expo2.datascrip.com@gmail.com">Contact Us</a>
            <a href="<?= page_permalink('dmca'); ?>">Disclaimer</a>
        </nav>
    </header>
    <main>
        <h1>Dmca</h1>
        <p class="description gren">1. You need to know that all mp3 files on this site are not on our server,<br><br>
            2. We are completely aware of copyright infringement.<br><br>
            3. we only play popular songs and enliven the world of music, if there are songs that violate, please report them via the form below or <a href="mailto:expo2.datascrip.com@gmail.com">Contact Us</a><br></p>
    </main>
    <aside>
        <h2>
            <b>Popular Songs</b>
        </h2>
        <ul class="popular-song">
            <?php foreach (get_terms('15')['items'] as $item) : ?>
                <li>
                    <a href="<?= search_permalink($item); ?>" title="<?= $item; ?>">
                        <?= $item; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
    <div class="clear"></div>
    <footer>
        <p>&copy; Copyright 2021. All Rights Reserved. <a href="/" title="<?= option('site_name'); ?>"><?= option('site_name'); ?></a></p>
    </footer>
</body>

</html>