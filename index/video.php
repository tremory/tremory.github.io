<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<style type="text/css">
	</style>
<script src="swfobject.js"></script>

</head>
<body>
	<!-- 
	<video width="320" height="240" controls="controls">
		<source src="movie.mp4" type="video/mp4" />
		<source src="movie.ogg" type="video/ogg" />
		<source src="movie.webm" type="video/webm" />
		<object data="movie.mp4" width="320" height="240">
			<embed src="movie.swf" width="320" height="240" />
		</object>
	</video> -->
	<div id="flashcontent">
  This text is replaced by the Flash movie.
</div>
<script type="text/javascript">
	var el = document.getElementById("flashcontent");
	swfobject.embedSWF("http://video.weibo.com/player/1034:0f484e0f862d6a88c5f98f9282ade9e1/v.swf", el, 580, 480, 10);
</script>
</body>
</html>