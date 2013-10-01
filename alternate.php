<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('css/style.css') }}
	
</head>
<body>
	<div class="wrapper">
		<div class="main">
			<header>
				<h1>Laravel</h1>
				<h2>A Framework For Web Artisans</h2>

				<p class="intro-text" style="margin-top: 45px;">
				</p>
			</header>
			<div role="main" class="main">
				<div class="home">
					

					<ul id="instafeed">


					</ul>

					<hr />
					<h2>A couple links I've been looking at</h2>
					<ul>
						<li>{{ HTML::link("http://instagram.com/developer/endpoints/tags/", "Tag Endpoints (offical instagram docs)") }}</li>
						<li>{{ HTML::link("http://stuffthatspins.com/2012/03/30/display-instagram-picture-stream-really-easy-with-jquery-and-json/", "Some dude's demo") }}</li>
					</ul>
				</div>
			</div>
		</div>
		
		<footer>
			Judist Priest
		</footer>

	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>



	<script>
		$(document).ready(function() {
			$.ajax({
				type: "GET",
				dataType: "jsonp",
				cache: false,
				url: "https://api.instagram.com/v1/tags/chinahorizons/media/recent?client_id=f1960f58693a47b6aaf3f153b524b90a",
				success: function(data) {
					console.log(data);

					var container = $('#instafeed');
					var output;
					var url;

					for (var i = 0; i < 8; i++) {
						url = data.data[i].images.thumbnail.url;
						output = "<img src='" + url + "' />";
						container.append(output);
					}
				}
			});
		}); 


	</script>




</body>
</html>