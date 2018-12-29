@extends('public')
@section('title','主页')
@section('content')
<link href="/css/member/login.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/js/member/login.js"></script>
<link href="/css/index.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/index.js"></script>

	 <!-- style="background-image: url('/background/icome.jpg')" -->
<div id="top">
	<div class="icome-center">
		<div class="icome-border">
			<img src="/touxiang/moren.jpeg" class="icome">
			<a href="/login">登录</a>
			<a href="/reg" style="float: right;">注册</a>
			<!-- <span>欢迎，</span>
			<span>用户</span> -->
		</div>
	</div>
	<img src="/background/扫码领红包.png" width="400px" height="600px" style="padding-left: 200px"><span style="font-size: 50px">网站尚未完善,扫个红包休息一下</span>
</div>
@stop