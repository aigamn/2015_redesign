<?php
	$events = array(
		array(
			"title" => "Cocktails with Creatives: Chatterbox Pub",
			"date" => "Thursday February 12th, 2015",
			"time" => "6:00pm until 8:00pm",
			"teaser" => "Join friends and colleagues for a night of conversations and connections over some video and board games.",
			"location" => "Chatterbox Pub",
			"locationLink" => "https://goo.gl/maps/cKCY7"
		),
		array(
			"title" => "Making the Case for UX Designers",
			"date" => "Thursday July 24th, 2014",
			"time" => "6:00pm until 8:00pm",
			"teaser" => "Curious about the type of work UX designers do and how their unique role could benefit your interactive team? Join us for an evening case of studies from local practitioners.",
			"location" => "Chatterbox Pub",
			"locationLink" => "https://goo.gl/maps/cKCY7"
		)
	);
?>
<?php include_once('header.php'); ?>
	
	<div class='container list communities'>
		<h1>Events</h1>

		<p class='lead'>
			<a href='events-list.php' class='btn btn-info'>Upcoming Events</a> 
			<a href='past-events-list.php' class='btn btn-primary'>Past Events</a>
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
							    <p><small><?php echo $events[$i]['date']; ?></small></p>
								<p>
									<?php echo $events[$i]['teaser']; ?>
								</p>
								<p class='text-right'>
									<a href='expired-event.php' class='btn btn-info'>More Info</a>
								</p>
							</div>
						</div>
					</li>
				<?php endfor; ?>
			</ul>

		</section>
	</div>

<?php include_once('footer.php'); ?>
