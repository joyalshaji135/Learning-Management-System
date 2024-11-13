<!-- Database Configuration -->

<?php

include('./include/connection.php');

?>

<!--header start -->

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
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <u><b>Course List</b></u>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light" border="1"
                        style="text-align: center; border-color: aliceblue;">
                        <thead>
                            <tr>
                                <th rowspan="2" style="text-align: center;">SL No</th>
                                <th rowspan="2" style="text-align: center;"> Title Name</th>
                                <th rowspan="2" style="text-align: center;">Description</th>
                                <th rowspan="2" style="text-align: center;">Course</th>
                                <th rowspan="2" style="text-align: center;">Course Level</th>
                                <th rowspan="2" style="text-align: center;">Question</th>
                                <th colspan="2" style="text-align: center;">Operation</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">Update</th>
                                <th style="text-align: center;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

						<?php
							$select_fitb_query = "select * from filling_in_the_blanks_tbl";
							$execute_fitb_query = mysqli_query($connection,$select_fitb_query);
							$fitb_count = 1;
							while ($fitb_rows = mysqli_fetch_assoc($execute_fitb_query)) {
								//  fitb_id	course_id	course_level_id	fitb_title	fitb_description	
								// first_sentence	last_sentence	option_a	option_b	option_c	option_d	
								// answer_key	filb_status

								$fitb_id = $fitb_rows['fitb_id'];
								$course_id = $fitb_rows['course_id'];
								$course_level_id = $fitb_rows['course_level_id'];
								$fitb_title = $fitb_rows['fitb_title'];
								$fitb_description = $fitb_rows['fitb_description'];
								$first_sentence = $fitb_rows['first_sentence'];
								$last_sentence = $fitb_rows['last_sentence'];
							
						?>
                            <tr data-expanded="true">
                                <td><?php echo $fitb_count ?></td>
                                <td><?php echo $fitb_title ?></td>
                                <td><?php echo $fitb_description ?></td> 
								<?php
								$select_course_query = "select * from course_tbl where course_id=$course_id";
								$execute_course_query = mysqli_query($connection,$select_course_query);
								while ($course_rows = mysqli_fetch_assoc($execute_course_query)) {
									$course_name = $course_rows['course_name'];
								}	
								?>
                                <td><?php echo $course_name ?></td> 
								<?php
								$select_course_level_query = "select * from course_level_tbl where course_level_id = $course_level_id";
								$execute_course_level_query = mysqli_query($connection,$select_course_level_query);
								while($course_level_rows = mysqli_fetch_assoc($execute_course_level_query)){
									$course_level_name = $course_level_rows['course_level_name'];
								}
								?>
								<td><?php echo $course_level_name; ?></td>           
                                <td><?php echo $first_sentence ?> ---------- <?php echo $last_sentence ?></td>             
                                <td><a href="./update_fitb_class.php?update_fitb_id=<?php echo $fitb_id ?>"><input type="button" value="Update" class="button3"></a></td>
                                <td><a href="./Delete_Function/delete_function.php?delete_fitb_id=<?php echo $fitb_id ?>"><input type="button" value="Delete" class="button2"></a></td>
                            </tr>
							
						<?php
						$fitb_count++;
						}
						?>
                        </tbody>
                    </table>
                </div>
            </div>
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
