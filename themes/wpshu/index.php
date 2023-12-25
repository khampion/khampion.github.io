<?= $this->extend('wpshu/layouts/main') ?>
<?= $this->section('content') ?>
    <div class='no-items section' id='billboard'></div>

    <div class='drajat'>

        <div class="section" id="main">

            <div class="widget Blog" data-version="2" id="Blog1">
                <div class="blog-posts hfeed">
                    <h3 class="title latest">Latest News</h3>
                    <style>
                        .boxclass {
                            width: 100%;
                            float: left;
                            display: block;
                        }

                        .bxclass {
                            width: 130px;
                            ;
                            float: left;
                            position: relative;
                            padding: 0px 6px 6px 0;
                            display: block;
                        }

                        .bxclass a img {
                            height: 90px;
                            ;
                        }

                        .abs {
                            position: absolute;
                            top: 5px;
                            left: 5px;
                        }
					.content {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.article {
  flex: 1 0 50%;
}

.row {
  overflow: hidden;
}

.column {
  float: left;
  width: 50%;
}
                    </style>
<div class="column left">					
                <?php foreach (get_terms('25')['items'] as $item) : ?>
                     <div class="col-sm-6 col-md-3 col-lg-2 col-xl-1 overflow-hidden" style="height: 25px;">
    <a href="<?= search_permalink($item); ?>"><?= $item; ?></a>
  </div>
                <?php endforeach; ?>
</div>
<div class="column right">                                       
                <?php foreach (get_terms('25')['items'] as $item) : ?>
                     <div class="col-sm-6 col-md-3 col-lg-2 col-xl-1 overflow-hidden" style="height: 25px;">
    <a href="<?= search_permalink($item); ?>"><?= $item; ?></a>
  </div>
                <?php endforeach; ?>
</div>
</div>
            </div>
        </div>

        <!-- Div sidebar -->
        <div class='sidebar section' id='sidebar'>

            <div class='widget' data-version='2' id='BlogArchive'>
                <h3 class='title'>Random Posts</h3>
                <div class='widget-content flat'>
                    <ul>
                       <?php foreach (get_terms('15')['items'] as $item) : ?>
                            <li><a href="<?= search_permalink($item); ?>"
                                    title="<?= $item; ?>"><?= $item; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
