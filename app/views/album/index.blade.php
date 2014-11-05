<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>All users</h1>
		@if (sizeof($album)>0)
			{{"data availabale"}}
			@foreach ($album as $album)

					<li>{{ link_to("/album/{$album->artist}",$album->artist)}}</li>
			@endforeach
		@else
			{{"no data availabale"}}
		@endif
	</body>
</html>