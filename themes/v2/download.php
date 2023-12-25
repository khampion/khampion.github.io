<?= $this->extend('v2/layouts/main') ?>
<?= $this->section('content') ?>

<main class="dd artikel ln">
  <h1>Download <?= $download['titleClean']; ?> Mp3</h1>
  <article class="dd ln pp">
    <p class="dl-page">
      <img src="<?= photon_resize('https://ytimg.googleusercontent.com/vi/' . $download['id'] . '/mqdefault.jpg', '300', '200', 2); ?>" alt="<?= $download['title']; ?>">
      <?= $description; ?><br><br>
      Judul Lagu : <b><?= $download['title']; ?></b><br>
      Ukuran : <?= $download['size']; ?><br>Durasi : <?= $download['duration']; ?> <br>
      Source : Youtube Music
    </p>
    <div style="text-align: center;">
      <p style="color:red">↓↓↓↓↓↓↓</p>
      <iframe src="//downloadlagu212.me/buttons/<?= $download['id']; ?>" width="100%" height="100%" allowtransparency="true" scrolling="no" style="border:none; height: 70px !important;"></iframe>
    </div>
  </article>
  <div class="text-break text-center">
    <em>
      <?= autop($download['description']); ?>
    </em>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.comments').trigger('click');
  });
  $(document).on('click', '.comments', function() {
    $.ajax({
      type: 'GET',
      url: "/api/comment?id=<?= $download['id']; ?>&limit=10",
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