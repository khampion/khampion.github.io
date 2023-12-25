<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content="noarchive, index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta property="og:locale" content="en" />
	<meta name="description" content="<?= $description; ?>">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="robots" content="<?= $robots; ?>">
    <meta property="og:url" content="<?= canonical_url(); ?>" />
    <link rel="canonical" href="<?= canonical_url(); ?>" />
    <link rel="openid.delegate" href="<?= canonical_url(); ?>" />
    <link rel="self" type="application/rss+xml" href="/rss">
    <link rel="alternate" type="application/rss+xml" title="rss" href="/rss" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="stylesheet" type="text/css" href="<?= theme_url('/assets/css/reset.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= theme_url('/assets/css/grid.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= theme_url('/assets/css/styles.css'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  
  </head>
  <body>
    <div id="header">
      <div class="container">
        <div class="row">
          <div class="col-6 col-sm-12">
            <a href="/" class="logo"><?= option('site_name'); ?></a>
          </div>
          <div class="col-6 col-sm-12"></div>
        </div>
      </div>
    </div>
	<center>
<script type="text/javascript">
	atOptions = {
		'key' : '03305b6eaa7f093949accaadb16dd713',
		'format' : 'iframe',
		'height' : 300,
		'width' : 160,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="//tunatastesentertained.com/03305b6eaa7f093949accaadb16dd713/invoke.js"></scr' + 'ipt>');
</script>
</center>
<?= $this->renderSection('content') ?>

    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-6 col-sm-12">
            <ul class="footer-links">
              
              <li>
                <a href="/sempak.xml">Site Map</a>
              </li>
              <li>
                <a href="/"><?= option('site_name'); ?></a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-sm-12">
            <span class="copyright">Copyright &copy; All Rights Reserved.</span>
          </div>
        </div>
      </div>
    </div>

  </body>
  <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3140964,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3140964&101" alt="counter easy hit" border="0"></a></noscript>
<!-- Histats.com  END  -->
</html>