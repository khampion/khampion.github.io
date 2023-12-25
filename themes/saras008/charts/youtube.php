<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title><?= $title; ?></title>
  <meta name="description" content="<?= $description; ?>" />
  <meta property="og:site_name" content="<?= option('site_name'); ?>">
  <meta property="og:url" content="<?= canonical_url(); ?>">
  <meta property="og:title" content="<?= $title; ?>">
  <meta property="og:image" content="/assets/img/cover.jpg" />
  <meta property="og:description" content="<?= $description; ?>">
  <meta property="og:type" content="descargar mp3 gratis">
  <meta name="robots" content="<?= $robots; ?>" />
  <meta name="revisit" content="1 days" />
  <meta name="yahoo" content="">
  <meta name="theme-color" content="#1a3a99" />
  <meta name="google-site-verification" content="" />
  <meta name="msvalidate.01" content="" />
  <link rel="image_src" href="/assets/img/cover.jpg" />
  <link rel="canonical" href="<?= canonical_url(); ?>" />
  <link rel="shortcut icon" type="image/png" href="/assets/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
  <style>
    .list li a:hover:before,
    nav .ul li a,
    .songs li:hover .d a,
    .songs li.on .d a,
    header,
    .more a:hover,
    #plyr .pd .db div,
    .section .more a,
    /*.inline > form input[type=submit],*/

    .songs li .d.down a,
    .songs li.on .d.down a {
      background-color: #1A3A99 !important;
    }

    .songs li:hover .i i,
    .songs li.on .i i {
      background: #1A3A998c
    }

    .images li:hover a {
      color: #1A3A99;
      border-color: #1A3A99;
    }

    footer ul li a {
      color: #1A3A99;
      border-bottom: 1px solid #1A3A99;
    }

    .tags li:hover a {
      border-color: #1A3A99;
      color: #1A3A99;
    }

    .songs li:hover .t span,
    .songs li.on .t span {
      color: #1A3A99;
    }

    nav .ul li a:hover {
      background-color: #000 !important;
    }
  </style>
</head>

<body class="srch">
  <div id="fb-root">
  </div>
  <header>
    <section class="inline" style="text-align: center; padding: 0 15px; max-width:990px; margin: auto;">
      <a href="/" title="<?= option('site_tagline'); ?>"><strong><?= option('site_name'); ?></strong></a>
      <form id="search" class="inline" action="/" method="get">
        <input type="text" name="q" id="input" placeholder="Search here by artist or song..." autofocus="autofocus" autocomplete="off">
        <input type="submit" value="Search">
      </form>
    </section>
    <i class="fa fa-bars"></i>
  </header>
  <nav>
    <ul class="ul inline">
      <li><a href="<?= playlist_permalink('populer'); ?>">Populer</a></li>
      <li><a href="<?= playlist_permalink('terbaru'); ?>">Terbaru</a></li>
      <li><a href="<?= playlist_permalink('dangdut'); ?>">Dangdut</a></li>
      <li><a href="<?= genre_permalink('rock'); ?>">Rock</a></li>
      <li><a href="<?= genre_permalink('pop'); ?>">Pop</a></li>
      <li><a href="<?= genre_permalink('india'); ?>">India</a></li>
      <li><a href="<?= genre_permalink('indo-pop'); ?>">Indo Pop</a></li>
      <li><a href="<?= genre_permalink('kpop'); ?>">K-Pop</a></li>
    </ul>
  </nav>
  <main class="inline">
    <section>
      <h1><i class="fa fa-star"></i> Daftar Lagu <?= $name; ?> <i class="fa fa-star"> </i> </h1>
      <ul class="images trend inline tendencias">
        <?php foreach ($playlist['items'] as $item) : ?>
          <li>
            <a href="<?= search_permalink($item['title']); ?>" title="<?= $item['title']; ?>" class="img" style="background-image:url(<?= photon_resize('https://ytimg.googleusercontent.com/vi/' . $item['id'] . '/mqdefault.jpg', '96', '96', 2); ?>);"></a>
            <div> <a href="<?= search_permalink($item['title']); ?>" title="<?= $item['title']; ?>" class="name"><?= $item['title']; ?></a> <span><i class="fa fa-clock-o"></i> Duration <?= $item['duration']; ?> <i class="fa fa-hdd-o"></i> Size <?= $item['size']; ?></span> </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>
    <aside>
      <div>
        <div class="section">
          <h2><i class="fa fa-star"></i><b> Top 10 Music</b></h2>
          <ol class="list aside top-lateral">
            <?php foreach (getTopSong('10')['items'] as $item) : ?>
              <li>
                <a href="<?= search_permalink($item['title']); ?>"><?= $item['title']; ?></a>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
        <div class="section">
          <h2><i class="fa fa-star"></i> Top most listened artists</h2>
          <ul class="images inline artistas">
            <?php foreach (get_artists('16')['items'] as $item) : ?>
              <li>
                <a href="<?= search_permalink($item); ?>" title="<?= $item; ?>" class="img"><img class="lazy loading" alt="<?= $item; ?>" src="<?= image_permalink($item); ?>?w=300&h=300"></a>
                <a href="<?= search_permalink($item); ?>" title="<?= $item; ?>" class="name"><?= $item; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="section" style="padding-bottom:10px;">
          <h2><i class="fa fa-star"></i> Recent searches</h2>
          <ul class="tags inline tagrand">
            <?php foreach (get_terms('15')['items'] as $item) : ?>
              <li>
                <a href="<?= search_permalink($item); ?>" title="<?= $item; ?>"> <span class="label"><?= $item; ?></span></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </aside>
  </main>
  <footer class="sgg">
    <ul class="inline">
      <li><a href="<?= search_permalink('Descargar Musica'); ?>">Descargar Musica</a> </li>
      <li><a href="<?= search_permalink('Tubidy'); ?>">Tubidy</a> </li>
      <li><a href="<?= search_permalink('Mp3xD'); ?>">Mp3xD</a> </li>
      <li><a href="<?= search_permalink('Musica Gratis'); ?>">Musica Gratis</a> </li>
      <li><a href="<?= search_permalink('Download Lagu Dangdut'); ?>">Download Lagu Dangdut</a> </li>
      <li><a href="<?= search_permalink('Mp3 Gratis'); ?>">Mp3 Gratis</a> </li>
      <li><a href="<?= search_permalink('Musica Nueva'); ?>">Musica Nueva</a> </li>
      <li><a href="<?= search_permalink('Mp3teca'); ?>">Mp3teca</a> </li>
      <li><a href="<?= search_permalink('Download Lagu Barat'); ?>">Download Lagu Barat</a> </li>
      <li><a href="<?= search_permalink('Download Lagu KPOP'); ?>">Download Lagu KPOP</a></li>
      <li><a href="<?= search_permalink('Download Lagu Surat Cinta Untuk Starla'); ?>">Download Lagu Surat Cinta Untuk Starla</a></li>
    </ul>
    <p>★ <?= option('site_name'); ?> also known as <?= option('site_tagline'); ?> This is one of the most popular <?= option('site_name'); ?> engines. Search for your favorite songs, listen to them and download them for free from the database with the best quality.</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="/assets/js/webs2.js?v=1577434137"></script>
</body>

</html>