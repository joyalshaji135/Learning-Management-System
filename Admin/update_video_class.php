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
<!-- Programme and Course are Organize -->


<script type="text/javascript">
   $(document).ready(function(){
    $("#course").change(function(){
        var course_id=$(this).val();
        $.ajax({
            url:"get_course_level.php",
            method:"POST",
            data:{course_ID:course_id},
            success:function(data){
                $("#course_level").html(data);
            }
        }); 
    });
});
    </script>

<!-- Programme and Course are Organize -->

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
                                    <u><b>Add Video Class</b></u>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">

										<!-- course_id 	course_level_id 	 	video_class_title 	video_class_description 	
										 video_class_videos 	video_class_url 	video_class_status -->

                                         <!-- Update Video Class -->

                                         <?php

                                         if (isset($_GET['update_video_id'])) {
                                            
                                            $update_video_class_id = $_GET['update_video_id'];
                                            $select_video_class_query = "select * from video_class_tbl where video_class_id = $update_video_class_id";
                                            $video_class_execute_query = mysqli_query($connection,$select_video_class_query);
                                            while ($video_class_rows = mysqli_fetch_assoc($video_class_execute_query)) {
                                                $course_id = $video_class_rows['course_id'];
                                                $course_level_id = $video_class_rows['course_level_id'];
                                                $video_class_title = $video_class_rows['video_class_title'];
                                                $video_class_description = $video_class_rows['video_class_description'];
                                                $video_thumbnail = $video_class_rows['video_thumbnail'];
                                                $video_class_videos = $video_class_rows['video_class_videos'];
                                                $video_class_url = $video_class_rows['video_class_url'];
                                                $video_class_status = $video_class_rows['video_class_status'];
                                            }
                                            
                                        }
                                         ?>
                                            <div class="col-md-6 form-group">
                                        	    <label for="exampleInputEmail1">Title Name:*</label>
                                        	    <input type="text" placeholder=".col-md-3" class="form-control" name="video_class_title" autocomplete="off" required="required" value="<?php echo $video_class_title ?>">
                                        	</div>

											<div class="col-md-6 form-group">
                                        	    <label for="exampleInputEmail1">Description:*</label>
                                        	    <input type="text" placeholder=".col-md-3" class="form-control" name="video_class_description" autocomplete="off" required="required" value="<?php echo $video_class_description ?>">
                                        	</div>

                                            <div class="col-sm-6">
											<label for="Title">Select Course:*</label>
												<select id="course" class="form-control m-bot15" name="course_id" style="text-align: center;">
                                            			<option selected disabled>Select Course</option>
	
                                            	    			     <!--PHP Connection Start in Course-->
                                            	    			     <!-- Function Course -->


																	 <!-- Course_Function() -->
                                                                <?php
                                            	    			 $select_course_query = "select * from course_tbl where course_id =  $course_id";
                                            	    			 $select_course_execute = mysqli_query($connection,$select_course_query);
                                            	    			 while($course_row=mysqli_fetch_assoc($select_course_execute))
                                            	    			 {
                                            	    			     $course_name=$course_row['course_name'];
                                            	    			     $course_id=$course_row['course_id'];
                                            	    			    echo "<option value='$course_id' selected disabled>$course_name</option>";
                                            	    			 }

																//  Other Course List 
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

											<div class="col-md-6 form-group">
                                                    <label for="exampleInputEmail1">Select Course Level :*</label>
                                                    <select id="course_level" class="form-control m-bot15" style="text-align: center;" name="course_level_id" autocomplete="off" required="required">
                                                    <?php
														$select_course_level_query = "select * from course_level_tbl where course_level_id =  $course_level_id";
														$select_course_level_execute = mysqli_query($connection,$select_course_level_query);
														while($course_level_row=mysqli_fetch_assoc($select_course_level_execute))
														{
															$course_level_name=$course_level_row['course_level_name'];
															$course_level_id=$course_level_row['course_level_id'];
														   	echo "<option value='$course_level_id' selected disabled style='background-color: green;'>$course_level_name</option>";
														}

														?> 
                                                    </select>
                                            </div>
											
											<div class="col-md-6 form-group">
												<center>
													<label for="exampleInputEmail1">Video Class Thumbnail:*</label>
                                                    <br>
													<img src="./Video_Thumbnail/<?php echo $video_thumbnail ?>" alt="" style="height: 100px; width: 100px;">
													<input type="file" name="video_thumbnail" id="" autocomplete="off" required="required">
													</center>
											</div>
											<div class="col-md-6 form-group">
												<center>
													<label for="exampleInputEmail1">Video Class:*</label>
                                                    <br>
													<video src="./Video_Class/<?php echo $video_class_videos ?>" style="height: 100px; width: 100px;"></video>
													<input type="file" name="video_class_videos" id="" autocomplete="off" required="required">
													</center>
											</div>

											<div class="col-md-12 form-group">
												<center>
													<label for="exampleInputEmail1">OR</label>
													</center>
											</div>
											
											<div class="col-md-3 form-group"></div>

											<div class="col-md-6 form-group">
											<label for="exampleInputEmail1">Link:*</label>
											<input type="text" placeholder=".col-md-3" class="form-control" name="video_class_url" autocomplete="off" value="<?php echo $video_class_url ?>">
											</div>

											<div class="col-md-3 form-group"></div>
                                            
                                            <div class="col-md-4 form-group"></div>
											<div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1"> Status:*</label>
													<select id="" class="form-control m-bot15" name="video_class_status" style="text-align: center;">
                                            			<option value="<?php echo $fitb_status ?>" selected disabled><?php echo $video_class_status ?></option>
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
                                            </div>
											<div class="col-md-4 form-group"></div>


											<div class="col-md-12">
												<center>
                                            		<input type="submit" value="Updated" class="btn btn-info" name="update_video_class">
												</center>
											</div>					 
                                        
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

if (isset($_POST['update_video_class'])) {

	// course_id 	course_level_id 	video_class_title 	video_class_description 	
	// video_class_videos 	video_class_url 	video_class_status

	$course_id = $_POST['course_id'];
	$course_level_id = $_POST['course_level_id'];
	$video_class_title = $_POST['video_class_title'];
	$video_class_description = $_POST['video_class_description'];
	$video_class_url = $_POST['video_class_url'];
	$video_class_status = $_POST['video_class_status'];

       //Video Accessing 

	   $video_class_videos=$_FILES['video_class_videos']['name'];

	   //Video Accessing for tmp Image

	   $temp_image=$_FILES['video_class_videos']['tmp_name'];

	   //Video Thumbnail Accessing 

	   $video_thumbnail=$_FILES['video_thumbnail']['name'];

	   //Video Thumbnail Accessing for tmp Image

	   $temp_thumbnail=$_FILES['video_thumbnail']['tmp_name'];

	

	if ($course_id == '' or $course_level_id == '' or $video_class_title == '' or $video_class_description == '' or $video_class_videos == '' or $video_class_status == '' or $video_thumbnail =='' or $video_class_url =='') 
	{
		echo "<script>alert('Please Fill the Blank Spaces')</script>";
		exit;
	} 
	else 
	{
		move_uploaded_file($temp_image,"./Video_Class/$video_class_videos");

		move_uploaded_file($temp_thumbnail,"./Video_Thumbnail/$video_thumbnail");


		$update_video_class_query="update video_class_tbl set course_id='$course_id',course_level_id='$course_level_id',video_class_title='$video_class_title',
        video_class_description='$video_class_description',video_thumbnail='$video_thumbnail',video_class_videos='$video_class_videos',
        video_class_url='$video_class_url',video_class_status='$video_class_status' where video_class_id=$update_video_class_id";
		$update_video_class_execute_query=mysqli_query($connection,$update_video_class_query);
		if($update_video_class_execute_query)
		{
		  echo "<script>alert('Video Updated Successfully')</script>";
		  echo "<script>window.open('view_video_class.php','_self')</script>";
		}
		else
		{
			die(mysqli_error($connection));
		}
	}
}

?>