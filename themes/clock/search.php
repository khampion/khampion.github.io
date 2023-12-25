<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= $query; ?></title>
    <meta name="referrer" content="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
	
	
  </head>
  <center>
<script type="text/javascript">
	atOptions = {
		'key' : '03305b6eaa7f093949accaadb16dd713',
		'format' : 'iframe',
		'height' : 300,
		'width' : 160,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="//tunatastesentertained.com/03305b6eaa7f093949accaadb16dd713/invoke.js"></scr' + 'ipt>');
</script>
</center>
  <body>
  <p><?= autop(randomSentence($article, 0, 3)); ?> <strong><?= $query; ?></strong></p><?= autop(randomSentence($article, 4, 6)); ?></p>
    <div id="gallery" class="gallery">
	  	<?php foreach (getBingImage($query, '20') as $item) : ?>
	<img src="<?= $item['thumbnail']; ?>" data-fancybox="images" data-src="<?= $item['thumbnail']; ?>" data-caption="" alt="<?= $item['title']; ?>">
		<?php endforeach; ?>
	</div>
<p><strong><?= $query; ?></strong> <?= autop(randomSentence($article, 6, 4)); ?></p><?= autop(randomSentence($article, 9, 5)); ?></p>
                        <?php foreach (getSuggest($query) as $item) : ?>
                            <h2>
                            <?= $item; ?>
                            </h2>
							<strong><?= $item; ?></strong> <?= spintax ("{Welcome, {dear|beloved|esteemed} readers and {loyal|dedicated} visitors! It's time to {delve|immerse|plunge} once again into the {vibrant|dynamic|ever-changing} world of news. As a {dedicated|committed|passionate} news writer, I am here to invite you to {explore|discover|uncover} the many {intriguing|captivating|fascinating} events that are currently {shaping|influencing|molding} our coverage.

When we {open|unlock|reveal} the door to the world of information, it's as if we are {flipping through|perusing|browsing} the pages of a {colorful|vivid|rich} life story. The world keeps {spinning|turning|rotating}, and so do the events that {captivate|inspire|amaze}, {inspire|motivate|encourage}, and sometimes {surprise|astonish|shock} us. Therefore, let's together {explore|navigate|journey through} every {corner|aspect|facet} of the latest {happenings|occurrences|events}, from the {light-hearted|uplifting|cheerful} to the {profound|deep|thought-provoking}.

In each piece of {breaking|latest|current} news and {serious|critical|important} reports, we are ready to provide {comprehensive|detailed|thorough} and {trustworthy|reliable|dependable} insights. Press freedom serves as our {compass|guide|direction} to deliver information with {integrity|honesty|ethics} and {courage|boldness|bravery}. Every {word|term|phrase} you encounter here is a manifestation of our {commitment|dedication|devotion} to providing {enlightenment|knowledge|illumination} in {understanding|comprehending|grasping} the {complexity|intricacy|complication} of this world.

For technology enthusiasts, we offer the {latest|newest|most recent} information on {innovations|advancements|breakthroughs} and {developments|progress|evolutions} in the {digital|technological|cyber} world. For art and culture aficionados, do not miss our {in-depth|thorough|comprehensive} reviews of {artistic|cultural|creative} events that grace the stage of life. And for those who are always curious about the {latest|newest|most recent} in the world of science, we are here with {special|exclusive|unique} coverage that will satisfy your {curiosity|inquisitiveness|thirst for knowledge}.

It is {important|vital|crucial} for us to be your steadfast {companion|partner|ally} in delivering information that opens minds and provides new {perspectives|views|angles}. Let's make every moment of reading an {unforgettable|memorable|remarkable} intellectual adventure together.

Thank you for joining us and taking the time to {explore|discover|engage with} the ever-moving world of news. Get ready to enter a new chapter in {understanding|grasping|comprehending} the world through the words we present. Happy reading, and together, let's {unearth|discover|reveal} the truth amidst the onslaught of information!
}") ;?> </p>
                        <?php endforeach; ?>
						<?= autop(randomSentence($article, 10, 2)); ?>
  </body>
</html>