<?= $this->extend('musicy/layouts/main') ?>
<?= $this->section('content') ?>
    <main>
        <div class="container">
            <form id="search-form" method="get" action="/">
                <h3>Tubidy Free Music Download</h3>
                <div>
                    <input type="text" autocomplete="off" name="q" required spellcheck="false" placeholder="" value="" />
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <div class="main-content d-flex">
                <div id="content" class="flex-fill">
                    <section class="section section-tracks">
                        <h3 class="section-title">
                            <span><i class="fas fa-fire"></i>Top Songs</span>
                        </h3>
                        <div class="items">
                       <?php foreach (getTopSong('25', '7')['items'] as $i => $item) : ?>
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
                        </div>
                    </section>
                </div>
                <div id="sidebar">
                    <aside class="widget widget-terms">
                        <h3 class="section-title">
                            <span><i class="fas fa-search"></i>Recent Search</span>
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
                </div>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>