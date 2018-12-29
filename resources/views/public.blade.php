<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', '首页')</title>
</head>
<link href="/blade/public.css" type="text/css" rel="stylesheet" />
<body>
	<div id="head">
		<ul id='head-one'>
			<li><a href="" class="head-two">首页</a>
				<ul class="head-three">
					<li>1</li>
					<li>2</li>
				</ul>
			</li>
			<li><a href="" class="head-four">留言板</a>
				<ul class="head-five">
					<li>3</li>
					<li>4</li>
				</ul>
			</li>
		</ul>
	</div>

@yield('content') 

	<div id="bottom">技术联系qq:337018308</div>
</body>
<script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/blade/public.js"></script>
</html>