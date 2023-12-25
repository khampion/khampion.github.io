<?= $this->extend('clock/layouts/main') ?>
<?= $this->section('content') ?>

<div id="content">
      <div class="container">
          <div class="row mb-1">
		  <div class="col-8 col-sm-12">
            <div class="s-title">
              <h4>Latest Articles</h4>
            </div>
            <div class="row">
              <div class="col-12 mb-1">
                <div class="home">
<?php foreach (getTopSong('5', '7')['items'] as $i => $item) : ?>
                            <div class="item d-flex align-items-center">
                                <div class="image">
                                    <img
                                        src="<?= photon_resize($item['image'], '56', '56', 0) ?>"
                                        alt="<?= $item['title'] ?>"
                                        title="<?= $item['title'] ?>"
                                    />
                                </div>
                                <div class="detail flex-fill">
                                    <h2>
                                        <a title="<?= $item['title'] ?>" href="<?= search_permalink($item['title']); ?>"><?= $item['title'] ?></a>
                                    </h2>
                                    <p>
                                        <a title="<?= $item['artist'] ?>" href="<?= search_permalink($item['artist']); ?>"><?= $item['artist'] ?></a>
                                    </p>
                                </div>
                                <div class="rank">
                                # <?= $i + 1; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
				
				
                  
				
				
                  <div class="tex"></div>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="col-4 col-sm-12">
            <div class="s-title">
              <h4>Popular Articles</h4>
			  <ul>
                        <?php foreach (get_terms('50')['items'] as $item) : ?>
                            <li><a href="<?= search_permalink($item); ?>"
                                    title="<?= $item; ?>"><?= $item; ?></a></li>
                        <?php endforeach; ?>
              </ul>
            </div>
            <div class="box"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="s-title">
              <h4>Other Articles</h4>
			<?php foreach (get_terms('50')['items'] as $item) : ?>
                            <a href="<?= search_permalink($item); ?>"
                                    title="<?= $item; ?>"><?= $item; ?></a> | 
                        <?php endforeach; ?>
            </div>
            <ul class="links">
          </div>
        </div>
      </div>
    </div>
    </div>
<?= $this->endSection() ?>
