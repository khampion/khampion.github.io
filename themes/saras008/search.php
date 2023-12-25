<?= $this->extend('saras008/layouts/main') ?>
<?= $this->section('content') ?>
<main id="main-container">
      <div class="im-radont container afterb  present">
        <article id="prg-main" class="p-lg-2">
          <div class="row mb-sm-1">
            <div class="col">
              <h1><a href="/">home</a> / <a href="<?= search_permalink($query); ?>"><?= $query; ?></a></h1><br/>
			   <p style="text-align: center;">
			<?php foreach (getBingImage($query, '1') as $item) : ?>
				<img src="<?= $item['thumbnail']; ?>" title="<?= $item['title']; ?>" style="float: none;width: 90%;">
			<?php endforeach; ?>
		</p>
			  <?= $description; ?>
			  <p><?= autop(randomSentence($article, 0, 2)); ?></p>
			  <p><?= autop(randomSentence($article, 3, 5)); ?></p>
			  <p><?= autop(randomSentence($article, 6, 9)); ?></p>
			  <p><?= autop(randomSentence($article, 10, 14)); ?></p>
			  <p><?= autop(randomSentence($article, 15, 20)); ?></p>
            </div>
          </div>
		  <?php $i = 0;
					foreach ($search['items'] as $item) : ?>
          <section class="row" id="prg-review">
		  
            <div class="col-12">
              <h2 class="im-subtitle"><a title="<?= $item['title']; ?>" href="<?= search_permalink($item['title']); ?>">
                                                <?= $item['title']; ?>
                                            </a></h2>
              <p><?= str_limit($item['description'], '350'); ?></p>
            </div>
          </section>
		  		<?php endforeach; ?>
                        <?php foreach (getSuggest($query) as $item) : ?>
                            <h2>
                            <?= $item; ?>
                            </h2>
							<?= spintax ("General information {constitutes the bedrock|forms the backbone|serves as the foundation} of our understanding of the world. {From historical events to scientific principles|Spanning historical events, scientific principles, and more|Touching on historical events and scientific principles}, it <strong><?= $item; ?></strong> {shapes our collective intelligence|guides our knowledge base|informs our collective consciousness}. This {vast reservoir|wealth} of knowledge {acts as a roadmap|provides a roadmap|serves as a roadmap} for navigating the complexities of the present and {shaping|influencing} the possibilities of the future.

One {crucial|essential|vital} aspect of general information is its role in {fostering a sense of connectedness|cultivating unity|building connections} among individuals and communities. {Shared knowledge|A shared knowledge base} {forms|creates} a common ground for diverse groups, {bridging gaps|breaking down barriers|facilitating connections}, and <strong><?= $item; ?></strong> {fostering|promoting} a sense of unity.

{History, as a vital component|Historical events}, {offers valuable lessons|provides valuable lessons|imparts valuable lessons} from the past. It allows us to <strong><?= $item; ?></strong> {understand the roots of our present circumstances|grasp the origins of our current situation|comprehend the origins of our present}, providing insights into potential future trajectories. By {studying historical events|examining the events of the past|exploring historical occurrences}, societies can <strong><?= $item; ?></strong> {learn from successes and failures|derive lessons from both successes and failures|extract valuable lessons from both successes and failures}, avoiding the pitfalls of the past and building upon the achievements that have <strong><?= $item; ?></strong> {shaped|molded} the world.

{Scientific principles|The principles of science} constitute another {cornerstone|fundamental aspect} of general information. The understanding of {natural phenomena, biological processes, and the laws that govern the universe|natural phenomena and the laws governing the universe} empowers individuals to <strong><?= $item; ?></strong> {make informed decisions|make informed choices|make decisions based on knowledge} in various aspects of life. Scientific knowledge not only {fuels technological advancements|drives technological progress|propels technological innovation} but also guides ethical considerations and environmental stewardship.

Cultural diversity is celebrated and preserved through the dissemination of general information. Languages, traditions, art, and folklore are <strong><?= $item; ?></strong> {transmitted across generations|passed down from generation to generation|handed down through the ages}, enriching the tapestry of human heritage. This cultural exchange <strong><?= $item; ?></strong> fosters a deep appreciation for the diversity of human experiences and encourages mutual respect among individuals from different backgrounds.

Technological advancements, a rapidly evolving domain within general information, {drive innovation|fuel technological innovation|power technological progress} and <strong><?= $item; ?></strong> {shape the way we live and work|influence our lifestyles and work environments|impact our daily lives}. Information technology, artificial intelligence, and biotechnological breakthroughs have the potential to <strong><?= $item; ?></strong> {revolutionize industries|transform industries|reshape entire industries}, enhance healthcare, and {address global challenges|tackle global challenges|confront global issues}.

Education plays a pivotal role in disseminating general information, equipping individuals with the tools to <strong><?= $item; ?></strong> {navigate an increasingly complex world|navigate the complexities of the modern world|navigate the intricacies of contemporary society}. Access to education ensures that knowledge is not confined to a select few but is shared widely, <strong><?= $item; ?></strong> {empowering people|enabling individuals} to contribute meaningfully to society.

In conclusion, general information {forms the fabric|constitutes the fabric|makes up the fabric} of our collective consciousness. It encompasses {the rich tapestry of human achievements|a rich tapestry of human accomplishments|a diverse tapestry of human achievements}, the wisdom gleaned from the past, and the limitless possibilities that the future holds. As we {continue to explore and expand our understanding|continue to delve into and broaden our understanding|further explore and expand our understanding} of the world, the importance of general information in <strong><?= $item; ?></strong> {shaping|molding|influencing} a knowledgeable, connected, and forward-thinking global society cannot be overstated.") ;?> </p>
                        <?php endforeach; ?>
        </article>
		
        <a href="<?= home_url().option('sitemap_index_permalink');?>">SiteMap-Peta situs</a>
      </div>
    </main>
	<?php
				?>
				<?= $indexnow; ?>
				<?= $indexing; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('body').addClass('xepo_ads');
	});
	$(document).on('click', '.xepo_ads', function(e) {
		$(this).removeClass('xepo_ads');
		//ubah google dengan ads direct link
		window.open('https://detinrubbing.com/iz3nY5mNgKCWHE/70854', '_blank');
	});
	</script>
	<script data-cfasync="false" async type="text/javascript" src="//swarthymacula.com/rZe2W5T1SYKG/70855"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('body').addClass('xepo_ads');
	});
	$(document).on('click', '.xepo_ads', function(e) {
		$(this).removeClass('xepo_ads');
		//ubah google dengan ads direct link
		window.open('https://finednothue.com/veqm79yj1?key=9892563fef0926282fed63d9687598ff', '_blank');
	});
	</script>
	<script type='text/javascript' src='//finednothue.com/27/23/d4/2723d4d61b6d25bda2973023d5456672.js'></script>
<?= $this->endSection() ?>