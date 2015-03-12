<?php
	$events = array(
		array(
			"title" => "Cocktails with Creatives: Hamilton Ink Spot",
			"date" => "Thursday March 5th",
			"time" => "6:00pm until 8:00pm",
			"location" => "Hamilton Ink Spot",
			"locationLink" => "https://www.google.com/maps/place/Hamilton+Ink+Spot/@44.945858,-93.094957,15z/data=!4m2!3m1!1s0x0:0x777f433dc592fc8c"
		),
		array(
			"title" => "April Greiman: Insights Lecture Series",
			"date" => "Tuesday March 10th",
			"time" => "7:00pm until 9:00pm",
			"location" => "Walker Cinema",
			"locationLink" => "https://www.google.com/maps/place/Walker+Art+Center/@44.969595,-93.281736,15z/data=!4m2!3m1!1s0x52b32b6ee2c87c91:0xc20dff2748d2bd92?hl=en"
		),
		array(
			"title" => "K-HOLE: Insights Lecture Series",
			"date" => "Tuesday March 17th",
			"time" => "7:00pm until 9:00pm",
			"location" => "Walker Cinema",
			"locationLink" => "https://www.google.com/maps/place/Walker+Art+Center/@44.969595,-93.281736,15z/data=!4m2!3m1!1s0x52b32b6ee2c87c91:0xc20dff2748d2bd92?hl=en"
		),
		array(
			"title" => "Pivot: Portfolio Insider",
			"date" => "Wednesday March 25th",
			"time" => "10:00am until 1:00pm",
			"location" => "Minneapolis Community and Technical College",
			"locationLink" => "https://www.google.com/maps/place/Minneapolis+Community+%26+Technical+College/@44.972586,-93.283689,17z/data=!3m1!4b1!4m2!3m1!1s0x52b332ea66fc639d:0xfe0c1ebc2660121a"
		)
	);

	$communities = array(
		array(
			"title" => "Design for Good: March Collaborative",
			"date" => "Wednesday, March 11th"
		),
		array(
			"title" => "Solopreneurs Monthly Meeting",
			"date" => "Thursday, March 12th"
		),
		array(
			"title" => "Solopreneurs Happy Hour",
			"date" => "TBD"
		),
	);

	$blogEntries = array(
		array(
			"title" => "INcredibles: A Brand Refresh Story at Thrivent Financial",
			"date" => "Friday, February 13th, 2015",
			"teaser" => "INcredibles—a series of events focused on in-house creative, issues, and topics—presented a brand refresh story at Thrivent Financial’s Minneapolis Corporate Center on January 19, 2015."
		),
		array(
			"title" => "AIGA Minnesota Names Three 2014 Fellows",
			"date" => "Thursday, August 7th, 2014",
			"teaser" => "AIGA Minnesota is pleased to announce the selection of Jo Davison, Dale Johnston, and Doug Powell as recipients of the distinguished AIGA Fellow Award."
		),
		array(
			"title" => " Making a Case for UX Design",
			"date" => "Tuesday, July 15th, 2014",
			"teaser" => "Three leading professionals from the UX Design field generously shared their expertise with a group of two dozen attendees. Each presenter spoke for 30 minutes; a short Q&A followed, and the evening concluded at Moto-i with more opportunity for discussion. Many thanks to our three terrific presenters, our deft MC Bryce Howitson, committee chair Micah ..."
		)
	);
?>
<?php include_once('header.php'); ?>

<div class='container' id='home'>
	<h1 class='text-center'>
		 AIGA Minnesota is the first place to turn for inspiration, professional development,<br class='hidden-xs'>
		 and excellence in design in Minnesota. 
	</h1>

	<div class='social text-center'>
		<small class='text-uppercase'>Connect with AIGA Minnesota</small>
		<ul class='list-inline'>
			<li>
				<a href='https://www.facebook.com/aigaminnesota' target='_blank'>
					<span class='icon-facebook'></span>
				</a>
			</li>
			<li>
				<a href='https://twitter.com/aigamn' target='_blank'>
					<span class='icon-twitter'></span>
					
				</a>
			</li>
			<li>
				<a href='https://instagram.com/aigamn/' target='_blank'>
					<span class='icon-instagram'></span>
				</a>
					
			</li>
			<li>
				<a href='https://www.linkedin.com/company/aiga-minnesota' target='_blank'>
					<span class='icon-linkedin'></span>
				</a>
			</li>
		</ul>
	</div> <!-- end .social -->

	<section class='events'>
		<header>
			<h2 class='pull-left'>
				Upcoming Events
			</h2>
			<a href='events-list.php' class='pull-right hidden-xs btn btn-info'>All Upcoming Events</a>
			<div class='clearfix'></div>
		</header>

		<!--<div class='carousel slide hidden-sm hidden-xs' data-ride='carousel'>-->
		<div class='carousel slide hidden-xs'>

			<!-- Wrapper for slides -->
			<div class='carousel-inner col-md-8' role='listbox' >
				<?php $isFirst = true; ?>
				<?php foreach($events as $event): ?>
					<?php $activeClass = ($isFirst) ? 'active' : ''; ?>
					<div class='item <?php echo $activeClass; ?>'>

						<img src='http://placehold.it/768x432/94deff/84CeEf' alt='' class='img-responsive'>

						<div class='info'>
							<h3>
								<?php echo $event['title'] ?>
							</h3>
							<p>
								<?php echo $event['date'] ?>, <?php echo $event['time'] ?>
								<br>
								<?php echo $event['location'] ?>
							</p>
						</div>

						<div class='actions'>
							<a href='single-event.php' class='btn btn-info'>
								Details
							</a>
							<a target='_blank' href='<?php echo $event["locationLink"] ?>' class='btn btn-info'>
								Directions
							</a>
							<a onclick='alert("You are registered for <?php echo $event["title"]; ?>, and will recieve and email shortly. Thank you!")' class='btn btn-info'>
								Register
							</a>
						</div>

					</div>

					<?php $isFirst = false; ?>
				<?php endforeach; ?>
			</div> <!-- end .carousel -->

			<ul class='tiles col-md-4 list-unstyled carousel-indicators border-bottom'>
				
				<?php for( $i=0; $i < count($events); $i++): ?>
					<?php $activeClass = ($i==0) ? 'active' : ''; ?>
					<li data-target='.carousel' data-slide-to='<?php echo $i; ?>' class='<?php echo $activeClass; ?>'>
						<span class='state-indicator'></span>
						<h3>
							<?php echo $events[$i]['title'] ?>
						</h3>
						<small>
							<?php echo $events[$i]['date'] ?>
						</small>
					</li>
				<?php endfor; ?>
				
			</ul>
			
			<div class='clearfix'></div>
		</div>

		<div class='visible-xs'>
			
			<?php for( $i=0; $i < count($events); $i++): ?>
				<?php if($i == 0): ?>
					<article class='main'>

						<div class='info'>
							<h3>
								<?php echo $events[$i]['title'] ?>
							</h3>
							<p>
								<?php echo $events[$i]['date'] ?>,<?php echo $events[$i]['time'] ?>
								<br>
								<?php echo $events[$i]['location'] ?>
							</p>
						</div>

						<img src='http://placehold.it/768x432/94deff/84CeEf' alt='' class='img-responsive' >

						<div class='actions row'>
							<div class='col-xs-4'>
								<a href='single-event.php' class='btn btn-info'>
									Details
								</a>
							</div>
							<div class='col-xs-4'>
								<a target='_blank'  href='<?php echo $events[$i]["locationLink"] ?>' class='btn btn-info'>
									Directions
								</a>
							</div>
							<div class='col-xs-4'>
								<a onclick='alert("You are registered for <?php echo $event["title"]; ?>, and will recieve and email shortly. Thank you!")' class='btn btn-info'>
									Register
								</a>
							</div>
						</div>

					</article>
				<?php else: ?>
					<article>

						<div class='col-xs-5'>
							<img src='http://placehold.it/768x432/94deff/84CeEf' alt='' class='img-responsive' >
						</div>

						<div class='info col-xs-7'>
							<h3>
								<?php echo $events[$i]['title'] ?>
							</h3>
						</div>

						<div class='clearfix'></div>

						<p>
							<?php echo $events[$i]['date'] ?>, <?php echo $events[$i]['time'] ?>
							<br>
							<?php echo $events[$i]['location'] ?>
						</p>

						<div class='actions row'>
							<div class='col-xs-4'>
								<a href='single-event.php' class='btn btn-info'>
									Details
								</a>
							</div>
							<div class='col-xs-4'>
								<a target='_blank'  href='<?php echo $events[$i]["locationLink"] ?>' class='btn btn-info'>
									Directions
								</a>
							</div>
							<div class='col-xs-4'>
								<a onclick='alert("You are registered for <?php echo $event["title"]; ?>, and will recieve and email shortly. Thank you!")' class='btn btn-info'>
									Register
								</a>
							</div>
						</div>

					</article>
				<?php endif; ?>
			<?php endfor; ?>
			
			<p>
				<a href='events-list.php' class='btn btn-primary'>All Upcoming Events</a>
			</p>
		</div>
	</section>

	<section>
		<header>
			<h2 class='pull-left'>
				Communities
			</h2>
			<a href='communities-list.php' class='pull-right hidden-xs btn btn-info'>All Communities</a>
			<div class='clearfix'></div>
		</header>
		<ul class='tiles list-unstyled border-right border-bottom clearfix'>
			<?php $isFirst = true; ?>
			<?php foreach($communities as $community): ?>
				<?php $activeClass = ($isFirst) ? 'active' : ''; ?>
				<li class='col-sm-4 <?php echo $activeClass; ?>'>
					<a href='single-community.php'>
						<span class='state-indicator'></span>
						<h3>
							<?php echo $community['title']; ?>
						</h3>
						<small>
							<?php echo $community['date']; ?>
						</small>
						<span class='icon icon-arrow-right visible-xs'></span>
					</a>
				</li>
				<?php $isFirst = false; ?>
			<?php endforeach; ?>
		</ul>
		<p class='visible-xs'>
			<a href='communities-list.php' class='btn btn-primary'>All Communities</a>
		</p>
	</section>

	<section class='col-sm-4 border-right'>
		<img class='img-responsive margin-auto' src='http://placehold.it/380x254/94deff/84CeEf' alt=''>
	</section>
		
	<section class='padded-left col-sm-8 blog'>
		<header>
			<h2 class='pull-left'>
				Blog
			</h2>
			<a href='blog-list.php' class='pull-right hidden-xs btn btn-info'>All Blog Entries</a>
			<div class='clearfix'></div>
		</header>
		<ul class='tiles list-unstyled border-bottom'>
			<?php for( $i=0; $i < count($blogEntries); $i++ ): ?>
				<?php $activeClass = ($i == 0) ? 'active' : ''; ?>
				<li class='<?php echo $activeClass; ?>'>
					<span class='state-indicator'></span>
					<h3>
						<?php echo $blogEntries[$i]['title']; ?>
					</h3>
					<small><?php echo $blogEntries[$i]['date']; ?></small>
					<p>
						<?php echo $blogEntries[$i]['teaser']; ?>
					</p>
					<p>
						<a href='single-blog.php' class='btn btn-info'>
							Read More
						</a>
					</p>
				</li>
			<?php endfor; ?>
		</ul>
		<p class='visible-xs'>
			<a href='blog.php' class='btn btn-primary'>All Blog Entries</a>
		</p>
	</section>
	

</div> <!-- end .container -->

<?php include_once('footer.php'); ?>
