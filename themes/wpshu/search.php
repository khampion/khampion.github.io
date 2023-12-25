<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= $query; ?></title>
    <meta name="referrer" content="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type='text/javascript' src='//finednothue.com/27/23/d4/2723d4d61b6d25bda2973023d5456672.js'></script>
    <style>
      .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        max-width: 800px;
      }

      .gallery img {
        width: 150px;
        height: 150px;
        margin: 5px;
        object-fit: cover;
        cursor: pointer;
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
      $('[data-fancybox="images"]').fancybox({
        toolbar: true,
        buttons: ["zoom", "slideShow", "fullScreen", "thumbs", "close"],
        loop: true,
        animationEffect: "zoom-in-out",
        transitionEffect: "fade",
        transitionDuration: 500,
      });
      $('[data-fancybox="videos"]').fancybox({
        toolbar: true,
        buttons: ["zoom", "slideShow", "fullScreen", "thumbs", "close"],
        loop: true,
        animationEffect: "zoom-in-out",
        transitionEffect: "fade",
        transitionDuration: 500,
        iframe: {
          css: {
            width: "800px",
            height: "450px"
          }
        }
      });
    </script>
    <script>
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.querySelector(".back-to-top").classList.add("active");
        } else {
          document.querySelector(".back-to-top").classList.remove("active");
        }
      }
      document.querySelector(".back-to-top").addEventListener("click", function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      });
    </script>
	<!-- Default Statcounter code for dev.halcyonschool.com/
https://dev.halcyonschool.com/ -->
<script type="text/javascript">
var sc_project=12946285; 
var sc_invisible=1; 
var sc_security="327de5c1"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="free web stats"
href="https://statcounter.com/" target="_blank"><img
class="statcounter"
src="https://c.statcounter.com/12946285/0/327de5c1/1/"
alt="free web stats"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->
	
  </head>
  <body>
  <p><?= autop(randomSentence($article, 0, 3)); ?> <strong><?= $query; ?></strong></p><?= autop(randomSentence($article, 4, 6)); ?></p>
    <div id="gallery" class="gallery">
	  	<?php foreach (getBingImage($query, '20') as $item) : ?>
	<img src="<?= $item['thumbnail']; ?>" data-fancybox="images" data-src="<?= $item['thumbnail']; ?>" data-caption="" alt="<?= $item['title']; ?>">
		<?php endforeach; ?>
	</div>
<p><strong><?= $query; ?></strong> <?= autop(randomSentence($article, 6, 4)); ?></p><?= autop(randomSentence($article, 9, 5)); ?>
  </body>
</html>