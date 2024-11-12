<?php

include('../include/connection.php');


if (isset($_GET['delete_course_level_id'])) {
    $delete_id = $_GET['delete_course_level_id'];
    echo $delete_id;
    $delete_course_level_query = "DELETE FROM `course_level_tbl` WHERE `course_level_tbl`.`course_level_id` = $delete_id";
    $execute_delete_course_level = mysqli_query($connection,$delete_course_level_query);
    if ($execute_delete_course_level) {
        echo "<script>alert('Course Level Deleted Successfully')</script>";
        echo "<script>window.open('../view_course_level.php','_self')</script>";
    }
    else
    {
        mysqli_error($connection);
    }
}

?>
