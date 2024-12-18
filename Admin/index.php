<!-- connection start -->
<?php

include('./include/connection.php');

?>


<!-- connection end -->

<!-- header start -->
<?php

include('./Layouts/header.php');

?>

<!--header end-->
<!--sidebar start-->

<?php

include('./Layouts/sidebar.php');

?>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-user" style="font-size: 3em; color:#fff; text-align: left;"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Users</h4>


					<?php
					 	$select_users_query = "select * from client_registration_tbl";
						$execute_users_query = mysqli_query($connection,$select_users_query);
						$users_count_row = mysqli_num_rows($execute_users_query);
					?>
					<h3><?php echo $users_count_row ?></h3>
					<p>Total Users</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-graduation-cap" style="font-size: 3em; color:#fff; text-align: left;"></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Courses</h4>


					<?php
					 	$select_course_query = "select * from course_tbl";
						$execute_course_query = mysqli_query($connection,$select_course_query);
						$course_count_row = mysqli_num_rows($execute_course_query);
					?>
						<h3><?php echo $course_count_row ?></h3>
						<p>Total Courses</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-commenting" style="font-size: 3em; color:#fff; text-align: left;"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Feedbacks</h4>
						<h3>0</h3>
						<p>Total Feedbacks</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>


		<div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-video-camera" style="font-size: 3em; color:#fff; text-align: left;"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Video Class</h4>


					<?php
					 	$select_video_class_query = "select * from video_class_tbl";
						$execute_video_class_query = mysqli_query($connection,$select_video_class_query);
						$video_class_count_row = mysqli_num_rows($execute_video_class_query);
					?>
					<h3><?php echo $video_class_count_row ?></h3>
					<p>Total Users</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-question-circle" style="font-size: 3em; color:#fff; text-align: left;"></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Quiz Class</h4>


					<?php
					 	$select_quiz_class_query = "select * from quiz_class_tbl";
						$execute_quiz_class_query = mysqli_query($connection,$select_quiz_class_query);
						$quiz_class_count_row = mysqli_num_rows($execute_quiz_class_query);
					?>
						<h3><?php echo $quiz_class_count_row ?></h3>
						<p>Total Courses</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-question-circle" style="font-size: 3em; color:#fff; text-align: left;"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Fill in the Blanks</h4>
						<?php
					 	$select_fitb_query = "select * from filling_in_the_blanks_tbl";
						$execute_fitb_query = mysqli_query($connection,$select_fitb_query);
						$fitb_count_row = mysqli_num_rows($execute_fitb_query);
						?>
						<h3><?php echo $fitb_count_row ?></h3>
						<p>Total Feedbacks</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="col-md-12 w3agile-notifications">
			<div class="notifications">
				<!--notification start-->
				
					<header class="panel-heading">
						Feedbacks
					</header>
					<div class="notify-w3ls">
						<div class="alert alert-info clearfix">
							<span class="alert-icon"></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
								</ul>
								<p>
									Urgent meeting for next proposal
								</p>
							</div>
						</div>
						<div class="alert alert-danger">
							<span class="alert-icon"></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
									<li class="pull-right notification-time">7 Hours Ago</li>
								</ul>
								<p>
									Very cool photo jack
								</p>
							</div>
						</div>
						<div class="alert alert-success ">
							<span class="alert-icon"></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender">You have 5 message unread</li>
									<li class="pull-right notification-time">1 min ago</li>
								</ul>
								<p>
									<a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
								</p>
							</div>
						</div>
						
						
					</div>
				
				<!--notification end-->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
</section>
 <!-- footer -->
<?php

include('./Layouts/footer.php');

?>

 
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
