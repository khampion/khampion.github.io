<?= $this->extend('v2/layouts/main') ?>
<?= $this->section('content') ?>
<main class="dd artikel">
  <h1><?= $query; ?></h1>
  <p class="description"><?= $description; ?></p>
  <div class="dd ls">
    <?php $i = 1;
    foreach ($search['items'] as $item) : ?>
      <?php if ($i <= 3) { ?>
        <article class="dd artikellist ln">
          <img src="<?= photon_resize('https://ytimg.googleusercontent.com/vi/' . $item['id'] . '/mqdefault.jpg', '60', '60', 2); ?>" alt="<?= $item['title']; ?>">
          <h3><a href="<?= download_permalink($item['id']); ?>" title="<?= $item['title']; ?>"><?= $item['title']; ?></a></h3>
          <i><?= $item['size']; ?></i><i><?= $item['channelTitle']; ?></i>
          <br />
          <a href="<?= download_permalink($item['id']); ?>" title="<?= $item['title']; ?>"><button class="btn btn-success"><strong>Download Mp3</strong></button></a>
        </article>
      <?php } else { ?>
        <article class="dd artikellist ln">
          <img src="<?= photon_resize('https://ytimg.googleusercontent.com/vi/' . $item['id'] . '/mqdefault.jpg', '60', '60', 2); ?>" alt="<?= $item['titleClean']; ?>">
          <h3><a href="<?= download_permalink($item['id']); ?>" rel="nofollow" title="<?= $item['titleClean']; ?>"><?= $item['titleClean']; ?></a></h3>
          <i><?= $item['size']; ?></i><i><?= $item['channelTitle']; ?></i>
          <p class="dd desk"><?= str_limit($item['description'], '450'); ?></p>
        </article>
      <?php }; ?>
    <?php $i++;
    endforeach; ?>
  </div>
  <?php if ($search['description']) { ?>
    <div class="text-break text-center">
      <h3>About <?= $search['titleClean']; ?></h3>
      <?= autop($search['description']); ?>
    </div>
  <?php }; ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.comments').trigger('click');
  });
  $(document).on('click', '.comments', function() {
    $.ajax({
      type: 'GET',
      url: "/api/comment?id=<?= $search['id']; ?>&limit=10",
      success: (function(data) {
        $.each(data.items, function(i, item) {
          $('.comments').append(
            '<b>' + item.authorDisplayName + '</b><br/>' + item.textDisplay + '<br/><br/>'
          );
        });

      }),
      error: function(data) {
        $('.comments').append(
          'Falied Load Data..'
        );
      }
    });
  });
</script>
<?= $this->endSection() ?>