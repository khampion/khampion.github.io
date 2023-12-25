<?= $this->extend('v2/layouts/main') ?>
<?= $this->section('content') ?>
<main class="dd artikel">
  <h1 class="title-full h5"> Find Favorite &amp; Hits Music Mp3</h1>
  <div>
    <?php foreach (getTopSong('25', '7')['items'] as $item) : ?>
      <article class="dd artikellist">
        <a href="<?= search_permalink($item['title']); ?>" title="<?= $item['title']; ?>">
          <h3><?= $item['title']; ?></h3>
        </a>
      </article>
    <?php endforeach; ?>
  </div>
</main>
<aside class="dd">
  <h2 class="dd relatedq">Related Songs</h2>
  <div class="dd ls">
    <?php foreach (get_terms('15')['items'] as $item) : ?>
      <a href="<?= search_permalink($item); ?>" title="<?= $item; ?>">
        <?= $item; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <br>
  <div class="dd ls">
    <h2 class="dd relatedq">Top Lagu Indo</h2>
    <?php foreach (getTopSong('5', '1259')['items'] as $item) : ?>
      <a href="<?= search_permalink($item['title']); ?>"><?= $item['title']; ?></a>
    <?php endforeach; ?>
  </div><br>
  <div class="dd">
    <h2 class="dd relatedq">K-pop & J-Pop</h2>
    <?php foreach (getTopSong('5', '51')['items'] as $item) : ?>
      <a href="<?= search_permalink($item['title']); ?>"><?= $item['title']; ?></a>
    <?php endforeach; ?>
  </div>
</aside>
<?= $this->endSection() ?>