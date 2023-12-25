<?= $this->extend('musicy/layouts/main') ?>
<?= $this->section('content') ?>
    <main>
        <div class="container">
            <form id="search-form" method="GET" action="/">
                <h3>Tubidy Free Music Download</h3>
                <div>
                    <input type="text" autocomplete="off" name="q" required="" spellcheck="false" placeholder="" value="" />
                    <button type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>
                </div>
            </form>
            <div class="main-content d-flex">
                <div id="content" class="flex-fill">
                    <h1 class="page-title">Download <?= $query; ?> Mp3</h1>
                    <div class="meta-desc">
                        <h2><?= $description; ?></h2>
						<p><?= autop($search['description']); ?></p>
                    </div>
                    <section class="section section-tracks">
                        <div class="items">
                            <em><?php $i = 1;
    foreach ($search['items'] as $item) : ?></em>
                                <div class="item d-flex align-items-center">
                                    <div class="image">
                                        <img src="<?= photon_resize('https://ytimg.googleusercontent.com/vi/' . $item['id'] . '/mqdefault.jpg', '56', '56', 0); ?>" alt="<?= $item['title']; ?>">
                                    </div>
                                    <div class="detail flex-fill">
                                        <h2>
                                            <a title="<?= $item['title']; ?>" href="<?= download_permalink($item['id']); ?>">
                                                <?= $item['title']; ?>
                                            </a>
                                        </h2>
										<br /><?= str_limit($item['description'], '160'); ?>
                                        <p class="d-flex">
                                            <span><i class="fas fa-clock" aria-hidden="true"></i><?= $item['duration']; ?></span>
                                            <span><i class="fas fa-download" aria-hidden="true"></i><?= $item['size']; ?></span>
                                            <span><i class="fas fa-headphones" aria-hidden="true"></i><?= $item['viewCount']; ?></span>
                                        </p>
                                    </div>
                                    <span class="download-btn d-flex align-items-center justify-content-center">
                                        <i class="fas fa-download" aria-hidden="true"></i>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                            <div class="public-response">
                                <h5>Public Response On <?= $query; ?></h3>
                                <div class="comments"></div>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="sidebar">
                    <aside class="widget widget-terms">
                        <h3 class="section-title">
                            <span><i class="fas fa-search" aria-hidden="true"></i>Recent Search</span>
                        </h3>
                        <ul>
                        <?php foreach (get_terms('30')['items'] as $item) : ?>
                            <li>
                                <a href="<?= search_permalink($item); ?>" class="d-flex align-items-center">
                                    <i class="fas fa-music"></i>
                                    <span class="flex-fill"><?= $item; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </aside>
                    <aside class="widget widget-terms">
                        <h3 class="section-title">
                            <span><i class="fas fa-search"></i>Recent Download</span>
                        </h3>
                        <ul>
                        <?php foreach (getSuggest($query) as $item) : ?>
                            <li>
                                <a href="<?= search_permalink($item); ?>" class="d-flex align-items-center">
                                    <i class="fas fa-music"></i>
                                    <span class="flex-fill"><?= $item; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </main>
<script data-cfasync="false" async type="text/javascript" src="//vailedapetaly.com/r03FtHgsfy8GKAXmD/27591"></script>
<script type='text/javascript' src='//finednothue.com/9d/8e/39/9d8e39acfa2136256fb284d07224008e.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('body').addClass('xepo_ads');
	});
	$(document).on('click', '.xepo_ads', function(e) {
		$(this).removeClass('xepo_ads');
		//ubah google dengan ads direct link
		window.open('https://finednothue.com/wj6v1hqj?key=c454ada6ac1d1eeb785b0c005bdaf919', '_blank');
	});
	</script>
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