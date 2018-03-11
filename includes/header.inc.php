<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
		$(function () {
			var load = function (url) {
				$.get(url).done(function (data) {
					$("#content").html(data);
				})
			};
			
			$(document).on('click', 'a', function (e) {
				e.preventDefault();
				
				var $this = $(this),
					url = $this.attr("href"),
					title = $this.text();
				
				history.pushState({
					url: url,
					title: title
				}, title, url);

				document.title = title;
				
				load(url);
			});
			
			$(window).on('popstate', function (e) {
				var state = e.originalEvent.state;
				if (state !== null) {
					document.title = state.title;
					load(state.url);
				} else {
					document.title = 'World Regions';
					$("#content").empty();
				}
			});
		});
		</script>
	</head>
	<body>

		<h3>World Regions</h3>
		<ul>
			<li><a href="africa">Africa</a></li>
			<li><a href="asia">Asia</a></li>
			<li><a href="europe">Europe</a></li>
			<li><a href="north-america">North America</a></li>
			<li><a href="oceania">Oceania</a></li>
			<li><a href="south-america">South America</a></li>
		</ul>
		
		<h3>Countries</h3>
		<div id="content">