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
                                <th rowspan="2" style="text-align: center;">Course Name</th>
                                <th rowspan="2" style="text-align: center;">Course Image</th>
                                <th colspan="5" style="text-align: center;">Operation</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">View</th>
                                <th style="text-align: center;">Update</th>
                                <th style="text-align: center;">Delete</th>
                                <th style="text-align: center;">Activate</th>
                                <th style="text-align: center;">Deactivate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-expanded="true">
                                <td>1</td>
                                <td>Phones</td>
                                <td><img src="./img/1.png" alt="" srcset=""></td>
                                <td><input type="button" value="View" class="button1"></td>
                                <td><input type="button" value="Update" class="button3"></td>
                                <td><input type="button" value="Delete" class="button2"></td>
                                <td><input type="button" value="Activate" class="button3"></td>
                                <td><input type="button" value="Deactivate" class="button2"></td>
                            </tr>                            
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
