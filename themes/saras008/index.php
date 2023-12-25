<?= $this->extend('saras008/layouts/main') ?>
<?= $this->section('content') ?>
<main id="main-container">
      <div class="im-radont container afterb  present">
        <article id="prg-main" class="p-lg-2">
          <div class="row mb-sm-1">
            <div class="col">
			  <h1><a href="/">ytmp3 group</a></h1>
            </div>
          </div>
          <section class="row" id="prg-review">
            <div class="col-12">
              <h2 class="im-subtitle">YouTube to Mp3 Music Converter - YTMP3</h2>
              <p>Ytmp3 is an online YouTube to MP3 converter that allows users to convert YouTube videos into MP3 files. This is a useful tool for those who want to save their favorite songs or podcasts from YouTube to their computer or mobile device for offline listening. Using Ytmp3 is simple and straightforward. </p>
              <h2 class="im-subtitle">YouTube to Mp3 Music Converter - YTMP3</h2>
              <p>Welcome! YTMP3 is a tool that refers to a website or service that allows users to convert YouTube videos into MP3 audio files. It was a popular online tool that provided a simple way to extract the audio from YouTube videos and save it in a downloadable MP3 format. Just enter the Youtube link on YTMP3 and click the convert button. </p>
              <h2 class="im-subtitle">YouTube ke MP3 Konverter - YouTube to MP3 Converter</h2>
              <p>1) Buka youtube.com. 2) Salin URL video (contoh: youtube.com/watch?v=KMU0tzLwhbE) dari video yang ingin Anda ubah dan tempelkan ke konverter kami. 3) Pilih format - mp3 (audio) atau mp4 (video) - dan klik tombol konvert. 4) Segera setelah konversi selesai Anda bisa mendownload file dengan mengklik tombol download. Nikmati! </p>
              <h2 class="im-subtitle">Free Youtube to MP3 Converter 2023 | 100% Working - Ytmp3</h2>
              <p>Ytmp3 is a free online Youtube to mp3 converter that allows you to convert YouTube videos to mp3 and mp4 formats for downloading with no limitations. The simple interface and easy navigation of ytmp3 stand out from other tools. How to Convert Youtube Videos to MP3 and Download Them with Ytmp3? </p>
              <h2 class="im-subtitle">YouTube to Mp3 Music Converter - YTMP3</h2>
              <p>Ytmp3 provides the YouTube conversion function for the majority of YouTube users. You can easily convert YouTube to mp3 or mp4. YTMP3 is a popular, free site to download mp3 music. YTMP3 also offers a search engine that allows you to search for MP3 audio files all over the Internet. </p>
              <h2 class="im-subtitle">Youtube to MP3 Converter - YtMP3</h2>
              <p>YtMP3Convert web app is a free online Youtube to MP3 Converter and Downloader. With our service you can convert and download Youtube videos to MP3 format in high quality. Our Youtube Converter tool is fast, secure and easy to use. Downloads are unlimited, so you can download free music from YouTube whenever you want. </p>
            </div>
          </section>
        </article>
        <article id="prg-alternatives" class=" p-lg-2 mt-1">
          <div class="row row-cols-1 row-cols-md-2">
		  <?php foreach (get_terms('250')['items'] as $item) : ?>
            <div class="col-12 col-md-3 home-tile hvr-glow"><a href="<?= search_permalink($item); ?>">
                <div class="row mb-3 mb-xl-0">
                  <div class="col">
                    <h2 class="text-limit-1" title="<?= $item; ?>"><strong><?= $item; ?></strong></h2>
                  </div>
                </div>
              </a></div>
		<?php endforeach; ?>
          </div>
        </article>
		
        <h2><a href="<?= home_url().option('sitemap_index_permalink');?>">SiteMap-Peta situs</a></h2>
      </div>
    </main>
<?= $this->endSection() ?>