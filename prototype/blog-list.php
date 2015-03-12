<?php	
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
	
	<div class='container list list-left blog'>
		<h1>Blog</h1>
		
		<p class='lead'>
			Now viewing: All Entries
		</p>

		<nav class='col-sm-10 col-sm-push-1'>
			<ul class='list-unstyled row'>
				<li class='col-sm-3 col-xs-6'>
					<a href='' class='btn btn-info'>
						<strong>
							All Entries
						</strong>
					</a>
				</li>
				<li class='col-sm-3 col-xs-6'>
					<a href='' class='btn btn-info'>Design for Good</a>
				</li>
				<li class='col-sm-3 col-xs-6'>
					<a href='' class='btn btn-info'>Sustainable Design</a>
				</li>
				<li class='col-sm-3 col-xs-6'>
					<a href='' class='btn btn-info'>In-House Designers</a>
				</li>
				<li class='col-sm-3 col-xs-6'>
					<a href='' class='btn btn-info'>Solopreneuers</a>
				</li>
				<li class='col-sm-3 col-xs-6'>
					<a href='' class='btn btn-info'>UX Designers</a>
				</li>
				<li class='col-sm-3 col-xs-6'>
					<a href='' class='btn btn-info'>Emerging Designers</a>
				</li>
				<li class='col-sm-3 col-xs-6'>
					<a href='' class='btn btn-info'>Expert Designers</a>
				</li>
			</ul>
		</nav>
		
		<div class='col-sm-10 col-sm-push-1'>
			<section>
				<ul class='list-unstyled'>
					<?php for($i=0; $i<count($blogEntries); $i++): ?>
						<li>
							<div class='border'>

								<div class='col-sm-4'>
									<img class='img-responsive' src='http://placehold.it/640x360/94deff/84CeEf' alt=''>
								</div>
								<div class='copy col-sm-8'>
									<h3><?php echo $blogEntries[$i]['title']; ?></h3>
									<small><?php echo $blogEntries[$i]['date']; ?></small>
									<p>
										<?php echo $blogEntries[$i]['teaser']; ?>
									</p>
									<p class='text-right'>
										<a class='btn btn-primary' href='single-blog.php'>Read More</a>
									</p>
								</div>
								<div class='clearfix'></div>
							</div>
						</li>
					<?php endfor; ?>
				</ul>
			</section>
		</div>

	</div>
	

<?php include_once('footer.php'); ?>
