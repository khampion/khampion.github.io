<?= $this->extend('saras008/layouts/main') ?>
<?= $this->section('content') ?>
<main id="main-container">
      <div class="im-radont container afterb  present">
        <article id="prg-main" class="p-lg-2">
          <div class="row mb-sm-1">
            <div class="col">
              <h1><?= $download['title']; ?></h1>
            </div>
          </div>
	  
          <section class="row" id="prg-review">
		  
            <div class="col-12">
              <p><?= autop($download['description']); ?><br/>
			  <center><iframe src="//downloadlagu212.me/buttons/{{ download['id'] }}" width="100%" height="100%" allowtransparency="true" scrolling="no" style="border:none; height: 70px !important;"></iframe></center>
            </div>
          </section>
        </article>
		
        <h2><a href="<?= home_url().option('sitemap_index_permalink');?>">SiteMap-Peta situs</a></h2>
      </div>
    </main>
	<?php
				?>
				<?= $indexnow; ?>
				<?= $indexing; ?>
<?= $this->endSection() ?>