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
                                    <u><b>Add Course Level</b></u>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <div class="col-lg-3"></div>
                                        
                                        <div class="col-lg-6">

                                          <label>Course Name</label>
                                        <select class="form-control m-bot15" name="course_id" style="text-align: center;">
                                            <option selected disabled>Option Select</option>
                                            
                                                     <!--PHP Connection Start in Course-->
                                                     <!-- Function Course -->
                                                 <?php
                                                 $select_course_query = "select * from course_tbl";
                                                 $select_course_execute = mysqli_query($connection,$select_course_query);
                                                 while($course_row=mysqli_fetch_assoc($select_course_execute))
                                                 {
                                                     $course_name=$course_row['course_name'];
                                                     $course_id=$course_row['course_id'];
                                                    echo "<option value='$course_id'>$course_name</option>";
                                                 }
                                                 ?>  
                                                 <!--PHP Connection End in Course-->
                                                 
                                        </select>


                                        </div>
                                        <div class="col-lg-3"></div>
                                        <br><br><br>
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-6">
                                            <label>Course Level</label>
                                            <select class="form-control m-bot15" name="course_level_name" style="text-align: center;">
                                                    <option selected disabled>Option Select</option>
                                                    <option value="Beginner">Beginner</option>
                                                    <option value="Intermediate">Intermediate</option>
                                                    <option value="Advanced">Advanced</option>
                                            </select>
                                            </div>

                                            <div class="col-sm-3"></div>
                                            <br><br><br>
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="course_image" placeholder="Enter Your Course Level" name="course_level_image">
                                            </div>
                                            <div class="col-lg-3"></div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6"></div>
                                        <br><br>
                                        <center>
                                            <input type="submit" value="Submit" class="btn btn-info" name="insert_course_level">
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

<?php

    if (isset($_POST['insert_course_level'])) {


        $course_level_name = $_POST['course_level_name'];
        $course_id = $_POST['course_id'];
        $course_level_status = 'active';

        //Image Accessing 

        $course_level_image=$_FILES['course_level_image']['name'];

        //Image Accessing for tmp Image

        $temp_image=$_FILES['course_level_image']['tmp_name'];

        

        if ($course_level_name == '' or $course_level_image == '' or $course_id == '') 
        {
            echo "<script>alert('Please Fill the Blank Spaces')</script>";
            exit;
        } 
        else 
        {
            move_uploaded_file($temp_image,"./Course_Level/$course_level_image");

            $insert_course_level_query="insert into course_level_tbl (course_id,course_level_name,course_level_image,course_level_status) values ('$course_id','$course_level_name','$course_level_image','$course_level_status')";
            $course_level_execute_query=mysqli_query($connection,$insert_course_level_query);
            if($course_level_execute_query)
            {
              echo "<script>alert('Course Level inserted Successfully')</script>";
              echo "<script>window.open('add_course_level.php','_self')</script>";
            }
            else
            {
                die(mysqli_error($connection));
            }
        }
    }

    ?>