<?php
	$events = array(
		array(
			"title" => "Cocktails with Creatives: Hamilton Ink Spot",
			"date" => "Thursday March 5th",
			"time" => "6:00pm until 8:00pm",
			"teaser" => "Join us for a special night of conversations and connections. Cocktails with Creatives’ sponsor, Hamilton Ink Spot, will be in showcasing posters dedicated to the art of typography and lettering.",
			"location" => "Hamilton Ink Spot",
			"locationLink" => "https://www.google.com/maps/place/Hamilton+Ink+Spot/@44.945858,-93.094957,15z/data=!4m2!3m1!1s0x0:0x777f433dc592fc8c"
		),
		array(
			"title" => "April Greiman: Insights Lecture Series",
			"date" => "Tuesday March 10th",
			"time" => "7:00pm until 9:00pm",
			"teaser" => "Visionary graphic designer April Greiman pioneered the integration of technology and art and was among the first to explore the desktop computer’s creative potential.",
			"location" => "Walker Cinema",
			"locationLink" => "https://www.google.com/maps/place/Walker+Art+Center/@44.969595,-93.281736,15z/data=!4m2!3m1!1s0x52b32b6ee2c87c91:0xc20dff2748d2bd92?hl=en"
		),
		array(
			"title" => "K-HOLE: Insights Lecture Series",
			"date" => "Tuesday March 17th",
			"time" => "7:00pm until 9:00pm",
			"teaser" => "The five members of New York’s K-HOLE come from backgrounds as diverse as brand strategy, fine art, web development, and fashion to explore the capitalist landscape of marketing.",
			"location" => "Walker Cinema",
			"locationLink" => "https://www.google.com/maps/place/Walker+Art+Center/@44.969595,-93.281736,15z/data=!4m2!3m1!1s0x52b32b6ee2c87c91:0xc20dff2748d2bd92?hl=en"
		),
		array(
			"title" => "Pivot: Portfolio Insider",
			"date" => "Wednesday March 25th",
			"time" => "10:00am until 1:00pm",
			"teaser" => "Students, don’t miss this opportunity to listen to a panel of professional designers talk about portfolios and the interview process. Get helpful tips in preparing the most important piece of work needed to kick start your career.",
			"location" => "Minneapolis Community and Technical College",
			"locationLink" => "https://www.google.com/maps/place/Minneapolis+Community+%26+Technical+College/@44.972586,-93.283689,17z/data=!3m1!4b1!4m2!3m1!1s0x52b332ea66fc639d:0xfe0c1ebc2660121a"
		)
	);
?>
<?php include_once('header.php'); ?>
	
	<div class='container list communities'>
		<h1>Events</h1>

		<p class='lead'>
			<a href='events-list.php' class='btn btn-primary'>Upcoming Events</a> 
			<a href='past-events-list.php' class='btn btn-info'>Past Events</a>
		</p>

		<section>
			<ul class='list-unstyled row'>
				<?php for( $i=0; $i < count($events); $i++): ?>
					<?php if( $i > 0 && $i % 3 == 0): ?>
						</ul>
						<ul class='list-unstyled row'>
					<?php endif; ?>
					<li class='col-sm-4'>
						<div class='border'>
							<h3><?php echo $events[$i]['title']; ?></h3>
							<img class='img-responsive' src='http://placehold.it/640x360/94deff/84CeEf' alt=''>
							<div class='copy'>
							 	<p><small><?php echo $events[$i]['date']; ?>, <?php echo $events[$i]['time']; ?></small></p>
								<p>
									<?php echo $events[$i]['teaser']; ?>
								</p>
								<p class='text-right'>
									<a href='single-event.php' class='btn btn-info'>More Info</a>
								</p>
							</div>
						</div>
					</li>
				<?php endfor; ?>
			</ul>

		</section>
	</div>
	

<?php include_once('footer.php'); ?>
