<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<title>AIGA Minnesota Redesign</title>

	<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700,400italic,700italic,600italic' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='icomoon/style.css'>
	<link rel='stylesheet' href='style.css'>

	<script src='http://code.jquery.com/jquery-2.1.3.js'></script>
	<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.js'></script>
	<script src='js/shared.js'></script>

</head>
<body>
	<header class='site-header'>
		<a href='index.php'>
			<img class='logo' src='http://placehold.it/85x42/94deff/94deff?text=Logo' alt='logo'>
		</a>

		<ul class='list-unstyled list-inline pull-right hidden-xs'>
			<li>
				<a href='events-list.php'>Events</a>
			</li>
			<li>
				<a href='communities-list.php'>Communities</a>
			</li>
			<li>
				<a href='membership.php'>Membership</a>
			</li>
			<li>
				<a href='volunteer.php'>Volunteer</a>
			</li>
			<li>
				<a href='sponsorship.php'>Sponsorship</a>
			</li>
			<li>
				<a href='about.php'>About</a>
			</li>
			<li>
				<a href='blog-list.php'>Blog</a>
			</li>
			<li class='dropdown pull-right'>
				<a id='search-dropdown-label' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
					<span class='icon-search'></span>
				</a>
				
				<ul class='dropdown-menu' role='menu' aria-labelledby='search-dropdown-label'>
					<li class='form-control'>
						<label>
							<form enctype='multpart/form-data' method='get'>
								<input name='s' id='s' placeholder='search AIGA Minnesota'>
								<button>
									Go
								</button>
							</form>
						</label>
					</li>
				</ul>
			</li>
		</ul>

		<ul class='list-unstyled list-inline pull-right visible-xs'>
			<li>
				<a href='events-list.php'>Events</a>
			</li>
			<li>
				<a href='communities-list.php'>Communities</a>
			</li>
			<li class='dropdown pull-right'>
				<a data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
					<span class='icon icon-search hidden-xs'></span>
					<span class='icon icon-list visible-xs'></span>
				</a>
				
				<ul class='dropdown-menu' role='menu'>
					<li class='form-control'>
						<label>
							<form enctype='multpart/form-data' method='get'>
								<input name='s' id='s' placeholder='search'>
								<button>
									Go
								</button>
							</form>
						</label>
					</li>
					<li>
						<a href='membership.php'>Membership</a>
					</li>
					<li>
						<a href='volunteer.php'>Volunteer</a>
					</li>
					<li>
						<a href='sponsorship.php'>Sponsorship</a>
					</li>
					<li>
						<a href='about.php'>About</a>
					</li>
					<li>
						<a href='blog-list.php'>Blog</a>
					</li>
				</ul>
			</li>

		</ul>
	</header>