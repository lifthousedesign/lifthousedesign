<div class="services">
	<div class="left section">
		<h3>Trail Map</h3>
		<p>Defining your goals</p>
		<p>
			Good sites are born from good wireframes.
			With your goals in mind, we will create a comprehensive wireframe of your site.
		</p>
		<p><a href="javascript:void(0)">Learn More</a></p>
	</div>
	<div class="middle section">
		<h3>Chair Lift</h3>
		<p>Stand out from the crowd</p>
		<p>Let your customers know who you are and what services you offer.</p>
		<p>
			Explainer videos
			<br/>
			Infographics
			<br/>
			Branding and more...	
		</p>
		<p><a href="javascript:void(0)">Learn More</a></p>
	</div>
	<div class="right section">
		<h3>Gondola</h3>
		<p>Tackle the summit</p>
		<p>
			Our goal is to streamline your business with web based automation.
			Our expertise in back-office business automation will save you both time and money.
		</p>
		<p><a href="javascript:void(0)">Learn More</a></p>
	</div>
</div>

<h2 id="services" class="gear">Gear to Get You to the Summit</h2>
<p class="font-delius-unicase align-center">All things web:<br />
CMS | HTML/CSS | Database Development | Social Media and Analytics Integration | E-commerce<br />
Custom Website Interface Design</p>
<p class="font-delius-unicase align-center">All things creative:<br />
Web Design | Mobile First Design | Copy/Content Development | Branding | Logo Design<br />
Print Design | Info Graphics | Animation | Photography | Videography</p>
<div class="align-center">
	<a id="video-link" href="http://player.vimeo.com/video/68054748?title=0&amp;byline=0&amp;portrait=0&amp;color=d9deb0&amp;autoplay=1"><img src="/assets/img/layout/videoimage<?php echo $is_mobile ? '-mobile' : '' ?>.png" /></a>
</div>


<?php if(!empty($portfolio)): ?>
<h2 id="portfolio" class="latest">Just a Few of Our Latest</h2>
<div id="latest">
<?php foreach($portfolio as $work): ?>
	<a href="<?php echo site_url('site/portfolio_details/'.$work['id']) ?>" class="work">
	<!--a class="work"-->
		<?php echo img($work['image']) ?>
		<span class="caption">Learn More</span>
	</a>
<?php endforeach; ?>
</div>
<?php endif; ?>

<h2 id="about-us" class="love">We Love What We Do</h2>
<div id="about-us-content" class="well">
	<p>The following is provided as an offering to the SEO gods in hopes of their blessing. That is not to say, however, that there isn’t some good readin’ here…</p>
	<p>Do you own a web domain? Are you are thinking about buying a creative domain name that you have had your eye on?</p>
	<p>In either case, you should consider the following:</p>
	<ul>
		<li>Mobile browsing is on the rise. Is your site ready?</li>
		<li>Websites offer each business an opportunity to expand their customer base. Does your site add to your business model, or is it simply informational advertising?</li>
		<li>Web pages are plentiful in every industry. Does your site stay relevant in this competitive landscape?</li>
	</ul>
	<p>Lift House Design is uniquely qualified to deliver solutions to these as well as many other issues your new business investment may encounter.</p>
	<p>Within the next 2 to 3 years, over 50% of your customers will be visiting your web page using a mobile device. Today, the vast majority of existing pages are not designed with mobile browsing in mind. What does this mean for your business? If your site falls behind technological trends, you could be turning over 50% of your clients away! This alone, will dramatically reduce your ROI.</p>
	<p>Speaking of ROI (Return on Investment), does your current web agency provide you with a return on investment statement or projection? Web agencies like to tell you what you "need to add" to your site. They, however, don't like to quantify those "necessary add-ons" with measurable results. Adding a professional looking web site to your business model is a great asset. Today, websites have the ability to not only look great, but automate some, or all of your business transactions. These automated web transactions could include inventory control, automated email and/or texting, HR tasks, and much, much more. Talk about reducing overhead! When considering a Web Agency be sure to ask, "For every dollar that I spend with your firm, how much money will I recover?"</p>
	<p>"www.", many businesses have them, but what does their content say about them?  Relevant, precise content is absolutely critical to maintaining a competitive edge against the competition. Additionally, finely crafted content can mean the difference between being located on page 1 or 100 of search results. In this regard, key words are, well, key. Maintaining relevant keywords, while analyzing your viewer demographics and traffic flow, will provide a competitive edge. Without doing so, any money spent on pay per click advertising is a waste.</p>
	<p>Lift House Design is a Web Agency that creates beautiful, functional, and innovative websites. We will work to become familiar with your specific business challenges and goals. Our goal?  To use web technology to overcome challenges, ensuring that your business goals are achieved. In doing so, our firm becomes deeply vested in designing a website that:</p>
	<ul>
		<li>Works well on all devices (iPhone, Android, etc.)</li>
		<li>Is scalable to meet demand</li>
		<li>Automates business functions and/or processes</li>
	</ul>
	<p>Ask us how we can help with your project today!</p>
</div>
<h2 id="quote" class="quote">A Quote, A Question, A Comment</h2>
<form id="quote-form" class="well" method="post" action="/">
	<?php if($this->input->post('send_quote')): ?>
		<?php if(!empty($notifications)): ?>
			<div class="info">
				<ul>
					<li><?php echo implode('</li><li>',$notifications) ?></li>
				</ul>
			</div>
		<?php endif; ?>
		<?php if(!empty($errors)): ?>
			<div class="errors">
				The following errors occured:
				<ul><?php echo $errors ?></ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<span class="font-oleo-script-swash-caps">tell us about your project:</span>
	<div class="clear">
		<div class="float-left">
			<input type="text" name="name" placeholder="Name *" />
			<input type="text" name="company" placeholder="Company" />
			<input type="text" name="website" placeholder="Web site" class="url" />
			<input type="text" name="email" placeholder="E-mail *" />
			<input type="text" name="phone" placeholder="Phone" class="phone" />
		</div>
		<div class="float-right">
			<textarea name="project_info" placeholder="Project info *"></textarea>
		</div>
	</div>
	<input type="submit" name="send_quote" value="Send" />
</form>