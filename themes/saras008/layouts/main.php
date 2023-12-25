<!doctype html>
<html lang="en-ID" dir="ltr" prefix="og: https://ogp.me/ns#">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <title><?= $title; ?></title>
    <meta name="robots" content="max-image-preview:large" />
    <link rel="stylesheet" href="<?= theme_url('/assets/css/bootstrap.min.css'); ?>" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= theme_url('/assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?= theme_url('/assets/css/style.css'); ?>">
    <link media="print" onload="this.media='all'; this.onload=null;" rel="stylesheet" href="<?= theme_url('/assets/css/dit-logos.css'); ?>">
	<meta content="width=device-width,initial-scale=1" name="viewport">
	<meta content="True" name="HandheldFriendly">
	<meta content="320" name="MobileOptimized">
	<meta property="og:type" content="article">
	<meta content="<?= $description; ?>" name="description">
	<meta content="<?= $description; ?>" property="og:description">
	<link href="<?= canonical_url(); ?>" rel="canonical">
	<link href="<?= canonical_url(); ?>" rel="alternate" hreflang="en-ZA">
	<meta content="<?= option('site_name'); ?>" property="og:site_name">
	<meta property="og:image" content="https://img.youtube.com/vi/default.jpg" />
	<meta content="<?= option('site_tagline'); ?>" property="og:title">
	<meta content="<?= canonical_url(); ?>" property="og:url">
	<link rel="stylesheet" href="<?= theme_url('/assets/css/bootstrap.min.css'); ?>" />
	<link href="<?= theme_url('/img/brand.png'); ?>" rel="icon" type="image/x-icon">
	<link href="//www.googleapis.com" rel="dns-prefetch">
	<link href="//cdnjs.cloudflare.com" rel="dns-prefetch">
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="//www.youtube.com" rel="dns-prefetch">
	<link href="//ajax.cloudflare.com" rel="dns-prefetch">
	<link rel="dns-prefetch" href="https://www.google-analytics.com">
	<link rel="dns-prefetch" href="https://www.googletagmanager.com">
	<link rel="dns-prefetch" href="https://img.youtube.com">
	<link href="https://www.google-analytics.com" rel="preconnect" crossorigin>
	<link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
	<link href="https://img.youtube.com" rel="preconnect" crossorigin>
	<link rel="preconnect" href="https://www.youtube.com">
	<link rel="preconnect" href="https://cdnjs.cloudflare.com">
	<link rel="alternate" href="/" hreflang="x-default" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="Language" content="Indonesia" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="geo.region" content="ID" />
    <meta property="og:locale" content="en_ID" />
	<meta name="generator" content="WordPress 4.9.1" />
	<meta name="twitter:card" content="summary_large_image" />
	<link rel="dns-prefetch" href="//fonts.googleapis.com" />
	<link rel="dns-prefetch" href="//use.fontawesome.com" />
	<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
	<link rel="dns-prefetch" href="//s0.wp.com" />
	<link rel="dns-prefetch" href="//s1.wp.com" />
	<link rel="dns-prefetch" href="//s2.wp.com" />
	<link rel="dns-prefetch" href="//s3.wp.com" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="spiders" content="all" />
	<meta name="googlebot" content="index,follow" />
	<meta name="robots" content="index,follow" />
	<meta name="msnbot" content="index,follow" />
	<meta content="index,follow" name="robots" />
	<meta content="index,follow" name="seznambot" />
	<meta content="index,follow" name="Slurp" />
	<meta content="index,follow" name="ia_archiver" />
	<meta content="index,follow" name="Baiduspider" />
	<meta content="index,follow" name="BecomeBot" />
	<meta content="index,follow" name="Bingbot" />
	<meta content="index,follow" name="btbot" />
	<meta content="index,follow" name="Dotbot" />
	<meta content="index,follow" name="Yeti" />
	<meta content="index,follow" name="Teoma" />
	<meta content="index,follow" name="Yandex" />
	<meta content="index,follow" name="FAST-WebCrawler" />
	<meta content="index,follow" name="FindLinks" />
	<meta content="index,follow" name="FyberSpider" />
	<meta content="index,follow" name="008" />
	<meta content="index" name="googlebot" />
	<meta content="snippet" name="googlebot-news" />
	<meta content="index" name="googlebot-news" />
	<meta content="index" name="Googlebot-Image" />
	<meta content="index" name="Googlebot-Video" />
	<meta content="index" name="Googlebot-Mobile" />
	<meta content="index" name="Mediapartners-Google" />
	<meta content="index" name="AdsBot-Google" />
	<meta content="Aeiwi, Alexa, AllTheWeb, AltaVista, AOL Netfind, Anzwers, Canada, DirectHit, EuroSeek, Excite, Overture, Go, Google, HotBot. InfoMak, Kanoodle, Lycos, MasterSite, National Directory, Northern Light, SearchIt, SimpleSearch, WebsMostLinked, WebTop, What-U-Seek, AOL, Yahoo, Bing, WebCrawler, Infoseek, Excite, Magellan, LookSmart, CNET, googlebot-news, Googlebot" name="search engines" />
  </head>
  <body class="ditwr">
   
   <?= $this->renderSection('content') ?>
   
    <footer class="container pt-3">
      <div class="row justify-content-around">
        <div class="col-auto">
          <p>Copyright &copy; 2023 <?= option('site_name'); ?></p>
        </div>
      </div>
      
	<?php foreach (get_terms('50')['items'] as $item) : ?>
      <a target="_blank" href="<?= search_permalink($item); ?>" title="<?= $item; ?>">
        <strong><?= $item; ?></strong>
      </a>
    <?php endforeach; ?>
    </footer>
    <style>
      div.img {
        background: url("path/to/img") no-repeat center;
        background-size: cover;
      }

      .margingT {
        margin-bottom: 60px;
      }

      .bottomAD {
        -webkit-box-sizing: border-box;
        height: 130px;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 1000;
        padding: 0 10px;
        overflow: hidden;
        width: 100%;
        background: rgba(0, 0, 0, .8);
      }

      .bottom-pic {
        position: absolute;
        top: 10px;
        width: 60px;
        height: 60px;
        overflow: hidden;
        -webkit-border-radius: 10px;
        border-radius: 10px;
      }

      .bottom-pic img {
        width: 100%;
        height: 100%;
      }

      .bottom-text {
        margin-left: 70px;
        line-height: 80px;
        font-size: 16px;
        color: #fff;
      }

      .bottom-btn {
        position: absolute;
        top: 45px;
        right: 10px;
        height: 40px;
        line-height: 40px;
        color: #fff;
        background-color: #60b900;
        border-radius: 6px;
        text-align: center;
        font-size: 16px;
        padding: 0 5px;
        font-weight: bold;
      }

      .bottomAD a {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
      }
    </style>
  </body>
</html>