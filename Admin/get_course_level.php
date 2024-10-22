<?php

include('./include/connection.php');

                $course_level_select_query = "select * from course_level_tbl where course_id='".$_POST['course_ID']."'order by course_level_name";
                $course_level_select_main_query = mysqli_query($connection,$course_level_select_query);
                echo "<option selected disabled>-Select Course Level-</option>";
                while($course_level_row=mysqli_fetch_assoc($course_level_select_main_query))
                {
                    $course_level_id = $course_level_row['course_level_id'];
                    $course_level_name = $course_level_row['course_level_name'];
                    echo "<option value='$course_level_id'>$course_level_name</option>";
                }

?>