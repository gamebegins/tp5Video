<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/home/wwwroot/tp.chenjiangjiang.cn/public/../application/index/view/user/downjl.html";i:1518948396;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $wzxx['wname']; ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/static/index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/static/index/css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="/static/index/css/faqstyle.css" type="text/css" media="all" />
<link href="/static/index/css/single.css" rel='stylesheet' type='text/css' />
<link href="/static/index/css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="/static/index/css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="/static/index/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="/static/index/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="/static/index/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/static/index/js/jquery-1.11.3.min.js"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="/static/index/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="/static/index/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<!-- //banner-bottom-plugin -->
<!---<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>--->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/static/index/js/move-top.js"></script>
<script type="text/javascript" src="/static/index/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="index.html"><h1>One<span>Movies</span></h1></a>
			</div>
			<div class="w3_search">
				<form action="/index/video/lister" method="post">
					<input type="text" name="Search" placeholder="Search" required="">
					<input type="submit" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<?php if((\think\Session::get('uname') == null)): ?>
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal">登 陆</a></li>
				</ul>
				<?php else: ?>
				<ul>
					<li style="width: 100%;"><a style="display: block;width: 100%;overflow: hidden;" href="/index/user/person"><?php echo \think\Session::get('uname'); ?></a><a style="float: right;margin-top: 10px;" href="/index/index/tuichu">退出</a></li>
					<!-- <li><a href="#" data-toggle="modal" data-target="#myModal">登 陆</a></li> -->
				</ul>
				<?php endif; ?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					登 陆 & 注 册
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Click Me</div>
							  </div>
							  <div class="form">
								<h3>登录到您的帐户</h3>
								<form action="\index\user\login" method="post">
								  <input type="text" name="username" placeholder="Username" required="">
								  <input type="password" name="password" placeholder="Password" required="">
								  <input type="submit" value="Login">
								</form>
								<div style="width: 100%;height: 80px;margin-top: 20px;color: #999">
									<p>其他登陆:</p>
									<div style="width: 100%;height: 30px;"><span style="margin-left: 60px;" id="hzy_fast_login"></span></div>
								</div>
								<script src="http://open.51094.com/user/myscript/15a7266469030a.html"></script>
							  </div>
							  <div class="form">
								<h3>注 册</h3>
								<form action="\index\user\register" method="post">
								  <input type="text" name="phone" placeholder="phone" id="phone" required="">
								  <span style="width: 100%;height: 30px;background: #999; color: red;display: none;text-align: center;line-height: 30px; margin-bottom: 25px;" id="pspan">123</span>
								  <input type="password" name="password" placeholder="Password" required="">
								  <input type="password" name="pwd" placeholder="Confirm password" required="">
								  <button style="width: 130px;height: 42px;float: right;line-height: 42px;text-align: center;border: 1px solid #999;background: #999;" disabled="true" id="yzm">获取验证码</button>
								  <input type="text" name="yzm" placeholder="Verification Code" required="" style="width: 200px;height: 42px;">
								  
								  <input id="zc" type="submit" value="Register">
								</form>
								<script type="text/javascript">
									$('#yzm').click(function () {
										var phone = $('#phone').val();
										$.ajax({
											type:'post',
											url:'/index/user/dx',
											data:{phone:phone},
											success:success
										});
										function success(data){
											console.log(data);
										}

										var countdown=6;
										settime(this);
										// alert(this.html);
										function settime(val) {
										    if (countdown == 0) {
										        val.removeAttribute("disabled");  
										        $('#yzm').html("获取验证码");
										        countdown = 6;  
										        return false;  
										    } else {
										        val.setAttribute("disabled", true);  
										        // alert(111);
										        $('#yzm').html("重新发送(" + countdown + ")");  
										        countdown--;  
										    }  
										    setTimeout(function() {  
										        settime(val);  
										    },1000);  
										}
									});
									$('#phone').blur(function () {
										var shang = $('#phone').val();
										// alert(shang);
										if (shang.length == 11) {
											var phone = $('#phone').val();
											$.ajax({
												type:'post',
												url:'/index/user/isPD',
												data:{phone:phone},
												success:success
											});
											function success(data)
											{
												if (data == 1) {
													$('#yzm').attr("disabled",true).css('background' , '#999');
													$('#pspan').css('display' , 'block');
													$('#pspan').html('该手机号已注册');
												}else {
													$('#yzm').attr("disabled",false).css('background' , '#f90');
													$('#pspan').css('display' , 'none');
												}
											}
										} else {
											$('#yzm').attr("disabled",true).css('background' , '#999');
										}
											
									});
									
										
										
								</script>
							  </div>
							  <div class="cta"><a href="#">Forgot your password?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">首 页</a></li>
						<?php foreach($data1 as $val): ?>
							<li><a href="/index/video/tv/cid/<?php echo $val['cid']; ?>"><?php echo $val['classname']; ?></a></li>
						<?php endforeach; ?>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">更多分类<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<?php foreach($data2 as $val): ?>
												<li><a href="/index/video/tv/cid/<?php echo $val['cid']; ?>/"><?php echo $val['classname']; ?></a></li>
											<?php endforeach; ?>
											
										</ul>
									</div>
									
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->

<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<!-- general -->
	<div class="general">
		<h4 class="latest-text w3_latest_text">ME·足迹</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">下载记录</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">收藏记录</a></li>
				
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
							
							<!-- 下载记录 -->
							<?php if(empty($down) != true): ?>
							<span>对不起,暂时没有下载记录</span>
							<?php else: foreach($downv as $val): ?>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/index/video/single/vid/<?php echo $val['vid']; ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo $val['vfengmian']; ?>" title="album-name" class="img-responsive" alt=" " 
									style="width:250px;height:220px; ">
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html"><?php echo $val['vtitle']; ?></a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p><?php echo $val['xtime']; ?></p>
									
										<div class="clearfix"></div>
									</div>
								</div>
							
							</div>
							<?php endforeach; endif; ?>
						
							<div class="clearfix"> </div>
						</div>
					</div>
						<!-- 下载记录结束 -->

						<!-- 收藏记录 -->
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						
						<?php if(empty($cdown) != false): ?>
							<span>对不起,您暂时没有收藏记录</span>
							<?php else: foreach($cdown as $val): ?>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/index/video/single/vid/<?php echo $val['vid']; ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo $val['vfengmian']; ?>" title="album-name" class="img-responsive" alt=" " 
									style="width:250px;height:220px; ">
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html"><?php echo $val['vtitle']; ?></a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p><?php echo $val['stime']; ?></p>
									
										<div class="clearfix"></div>
									</div>
								</div>
							
							</div>
							<?php endforeach; endif; ?>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!-- 顶部查看结束 -->
					
					
				</div>
			</div>
		</div>
	</div>
<!-- //general -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_left1">
						<h2>意见与反馈</h2>
						<div class="w3ls_footer_grid_left1_pos">
							<form action="/index/question/fabiao" method="post">
								<input type="text" id="yij" style="width: 100%;height: 40px;" name="text" placeholder="您的任何意见都是对我们最大的支持" required="">
								<input type="submit" id="yijian" value="Send">
							</form>
							<script type="text/javascript">
								$(function () {
									$('#yijian').click(function () {
										var yij = $('#yij').val();
										$.ajax({
											type:'post',
											url:'/index/question/fabiao',
											data:{yij:yij},
											success:success
										});
										return false;
									});
									function success(data){
										// console.log(data);
										if (data == 0) {
											alert('发表成功');
										} else if (data == 1) {
											alert('发表失败');
										} else {
											alert('您还没有登陆');
										}
									};
								});
										
							</script>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3ls_footer_grid_right">
					<a href="index.html"><h2>One<span>Movies</span></h2></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>
					<a href="<?php echo $wzxx['wurl']; ?>" title="<?php echo $wzxx['info']; ?>">
						<?php echo $wzxx['wname']; ?>
					</a><br />
					Email：<?php echo $wzxx['email']; ?>&nbsp;&nbsp;&nbsp;&nbsp;QQ在线客服：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1914329427&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1914329427:51" alt="点击这里给我发消息呦！！！" title="点击这里给我发消息呦！！！"/></a><br />
					备案号：<?php echo $wzxx['number']; ?>&nbsp;&nbsp;&nbsp;&nbsp;版权：<?php echo $wzxx['ban']; ?>
				</p>
			</div>

			<div class="col-md-7 w3ls_footer_grid1_right">
				<ul>
					<?php foreach($data as $val): ?>
					<li>
						<a href="<?php echo $val['url']; ?>"><?php echo $val['name']; ?></a>
					</li>
					<?php endforeach; ?>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="/static/index/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>