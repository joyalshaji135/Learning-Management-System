<?php

if(isset($_POST['delete_ID'])){
    $delete_id = $_POST['delete_ID'];

    $course_level_delete_query = "delete * from course_level_tbl where course_level_id = $delete_id";
    $execute_course_level_delete = mysqli_query($connection,$course_level_delete_query);
}

?>