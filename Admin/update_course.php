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
	<section class=" wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <div data-collapsed="0" class="pane">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <u><b>Add Course</b></u>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">

                                        <?php
                                        if (isset($_GET['update_course_id'])) {
                                            
                                            $update_course_id = $_GET['update_course_id'];
                                        
                                            $update_course_query = "select * from course_tbl where course_id = $update_course_id";
                                            $execute_update_course_query = mysqli_query($connection,$update_course_query);
                                            while ($row_update_query = mysqli_fetch_assoc($execute_update_course_query)) {
                                                $course_id = $row_update_query['course_id'];
                                                $course_name = $row_update_query['course_name'];
                                                $course_description = $row_update_query['course_description'];
                                                $course_image = $row_update_query['course_image'];
                                                $course_status = $row_update_query['course_status'];

                                            }
                                        }
                                        ?>
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control round-input" name="course_name" value="<?php echo $course_name ?>">
                                            </div>

                                            <div class="col-sm-3"></div>
                                            <br><br><br>
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control round-input" name="course_description" value="<?php echo $course_description ?>">
                                            </div>

                                            <div class="col-sm-3"></div>
                                            <br><br><br>
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="course_image" placeholder="Enter Your Course" name="course_image" value="<?php echo $course_image ?>">
                                            </div>
                                            <div class="col-lg-3"></div>
                                            <br><br><br>
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-6">
                                            <select class="form-control m-bot15" name="course_status" style="text-align: center;">
                                                    <option selected disabled value="<?php echo $course_status ?>"><?php echo $course_status ?></option>
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                            </select>
                                            </div>

                                            <div class="col-sm-3"></div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6"></div>
                                        <br><br>
                                        <center>
                                            <input type="submit" value="Updated" class="btn btn-info" name="update_course">
                                        </center>
                                        <div class="col-lg-3"></div>
                                    </form>
                                    <br>
                                    <br>
                                </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


<!-- main content end -->
 <!-- footer -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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

<?php

    if (isset($_POST['update_course'])) {


        $course_name = $_POST['course_name'];
        $course_description = $_POST['course_description'];
        $course_status = $_POST['course_status'];

        //Image Accessing 

        $course_image=$_FILES['course_image']['name'];

        //Image Accessing for tmp Image

        $temp_image=$_FILES['course_image']['tmp_name'];

        

        if ($course_name == '' or $course_image == '' or $course_description == '' or $course_status == '') 
        {
            echo "<script>alert('Please Fill the Blank Spaces')</script>";
            exit;
        } 
        else 
        {
            move_uploaded_file($temp_image,"./Course_Image/$course_image");

            $update_course_query="update course_tbl set course_name='$course_name',course_description='$course_description',
            course_image='$course_image',course_status='$course_status' where course_id = $update_course_id";
            $update_course_execute_query=mysqli_query($connection,$update_course_query);
            if($update_course_execute_query)
            {
              echo "<script>alert('Course Updated Successfully')</script>";
              echo "<script>window.open('add_course.php','_self')</script>";
            }
            else
            {
                die(mysqli_error($connection));
            }
        }
    }

    ?>