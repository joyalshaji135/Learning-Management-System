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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                                    <u><b>Add Fill in the Blanks</b></u>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form action="" method="post">
                                        <div class="form-group">
<!-- 
										fitb_id 	course_id 	course_level_id 	
										fitb_title 	fitb_description 	first_sentence 	
										last_sentence 	option_a 	option_b 	option_c 	option_d 	
										answer_key 	filb_status 
										-->

                                        <?php

                                        if(isset($_GET['update_fitb_id'])){

                                            $update_fitb_id = $_GET['update_fitb_id'];
                                            $select_fitb_class_query = "select * from filling_in_the_blanks_tbl where fitb_id = $update_fitb_id";
                                            $execute_update_fitb_class_query = mysqli_query($connection,$select_fitb_class_query);
                                            while($fitb_class_rows = mysqli_fetch_assoc($execute_update_fitb_class_query)){
                                                $fitb_id = $fitb_class_rows['fitb_id'];
                                                $course_id = $fitb_class_rows['course_id'];
                                                $course_level_id = $fitb_class_rows['course_level_id'];
                                                $fitb_title = $fitb_class_rows['fitb_title'];
                                                $fitb_description = $fitb_class_rows['fitb_description'];
                                                $first_sentence = $fitb_class_rows['first_sentence'];
                                                $last_sentence = $fitb_class_rows['last_sentence'];
                                                $option_a = $fitb_class_rows['option_a'];
                                                $option_b = $fitb_class_rows['option_b'];
                                                $option_c = $fitb_class_rows['option_c'];
                                                $option_d = $fitb_class_rows['option_d'];
                                                $answer_key = $fitb_class_rows['answer_key'];
                                                $fitb_status = $fitb_class_rows['filb_status'];
                                                
                                            }
                                        }
                                        ?>
											<div class="col-md-6 form-group">
                                        	    <label for="exampleInputEmail1">Title Name:*</label>
                                        	    <input type="text" placeholder=".col-md-3" class="form-control" name="fitb_title" autocomplete="off" required="required" value="<?php echo $fitb_title; ?>">
                                        	</div>

											<div class="col-md-6 form-group">
                                        	    <label for="exampleInputEmail1">Description:*</label>
                                        	    <input type="text" placeholder=".col-md-3" class="form-control" name="fitb_description" autocomplete="off" required="required" value="<?php echo $fitb_description; ?>">
                                        	</div>

                                            <div class="col-sm-6">
											<label for="Title">Select Course:*</label>
												<select id="course" class="form-control m-bot15" name="course_id" style="text-align: center;">
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
	
															<!--PHP Connection Start in Course-->
															<!-- Function Course -->											

															<!-- Course_Function() -->
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

											<div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1"> Fill in the Blanks First Sentence:*</label>
													<input type="text" placeholder=".col-md-6" class="form-control" name="first_sentence" autocomplete="off" required="required" value="<?php echo $first_sentence; ?>">
                                            </div>
											
											<div class="col-md-4 form-group">
                                                    
                                            </div>
											
											<div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1"> Fill in the Blanks Last Sentence:*</label>
													<input type="text" placeholder=".col-md-6" class="form-control" name="last_sentence" autocomplete="off" required="required" value="<?php echo $last_sentence; ?>">
                                            </div>

											<div class="col-md-6 form-group">
                                                    <label for="exampleInputEmail1"> Option A:*</label>
													<input type="text" placeholder=".col-md-6"  class="form-control" name="option_a" autocomplete="off" required="required" value="<?php echo $option_a; ?>">
                                            </div>

											<div class="col-md-6 form-group">
                                                    <label for="exampleInputEmail1"> Option B:*</label>
													<input type="text" placeholder=".col-md-6" class="form-control" name="option_b" autocomplete="off" required="required" value="<?php echo $option_b; ?>">
                                            </div>
											
											<div class="col-md-6 form-group">
                                                    <label for="exampleInputEmail1"> Option C:*</label>
													<input type="text" placeholder=".col-md-6" class="form-control" name="option_c" autocomplete="off" required="required" value="<?php echo $option_c; ?>">
                                            </div>

											<div class="col-md-6 form-group">
                                                    <label for="exampleInputEmail1"> Option D:*</label>
													<input type="text" placeholder=".col-md-6" class="form-control" name="option_d" autocomplete="off" required="required" value="<?php echo $option_d; ?>">
                                            </div>
											
											<div class="col-md-3 form-group"></div>
											<div class="col-md-6 form-group">
                                                    <label for="exampleInputEmail1"> Answer Key:*</label>
													<select id="" class="form-control m-bot15" name="answer_key" style="text-align: center;">
                                            			<option value="<?php echo $answer_key ?>" selected disabled><?php echo $answer_key ?></option>
														<option value="option_a">Option A</option>
														<option value="option_b">Option B</option>
														<option value="option_c">Option C</option>
														<option value="option_d">Option D</option>
													</select>
                                            </div>
											<div class="col-md-3 form-group"></div>

											<div class="col-md-4 form-group"></div>
											<div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1"> Status:*</label>
													<select id="" class="form-control m-bot15" name="answer_key" style="text-align: center;">
                                            			<option value="<?php echo $fitb_status ?>" selected disabled><?php echo $fitb_status ?></option>
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
                                            </div>
											<div class="col-md-4 form-group"></div>
											
											<div class="col-md-12">
												<center>
                                            		<input type="submit" value="Updated	" class="btn btn-info" name="insert_fitb">
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

    if (isset($_POST['insert_fitb'])) {


		$course_id = $_POST['course_id'];
		$course_level_id = $_POST['course_level_id'];
        $fitb_title =  $_POST['fitb_title'];
		$fitb_description = $_POST['fitb_description'];
		$first_sentence =  $_POST['first_sentence'];
		$last_sentence = $_POST['last_sentence'];
		$option_a = $_POST['option_a'];
		$option_b = $_POST['option_b'];
		$option_c = $_POST['option_c'];
		$option_d = $_POST['option_d'];
		$answer_key =  $_POST['answer_key'];
		$fitb_status = "active";


        if ($course_id == '' or $course_level_id == '' or $fitb_title == '' or $fitb_description == '' or $first_sentence == '' or 
		$last_sentence == '' or $option_a == '' or $option_b == '' or $option_c == '' or $option_d == '' or $answer_key == '') 
        {
            echo "<script>alert('Please Fill the Blank Spaces')</script>";
            exit;
        } 
        else 
        {

            $update_fitb_query = "update filling_in_the_blanks_tbl set course_id='$course_id',course_level_id='$course_level_id',fitb_title='$fitb_title',
			fitb_description='$fitb_description',first_sentence='$first_sentence',last_sentence='$last_sentence',option_a='$option_a',
			option_b='$option_b',option_c='$option_c',option_d='$option_d',answer_key='$answer_key',filb_status='$fitb_status' where fitb_id = $update_fitb_id";
            $update_fitb_execute_query=mysqli_query($connection,$update_fitb_query);
            if($update_fitb_execute_query)
            {
              echo "<script>alert('Updated Fill in the Blanks Successfully')</script>";
              echo "<script>window.open('./view_fitb.php','_self')</script>";
            }
            else
            {
                die(mysqli_error($connection));
            }
        }
    }

    ?>