<?php

include('../include/connection.php');

// Course Level Deletion

if (isset($_GET['delete_course_level_id'])) {
    $delete_course_level_id = $_GET['delete_course_level_id'];
    $delete_course_level_query = "DELETE FROM `course_level_tbl` WHERE `course_level_tbl`.`course_level_id` = $delete_course_level_id";
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

// Course Deletion

if (isset($_GET['delete_course_id'])) {
    $delete_course_id = $_GET['delete_course_id'];
    $delete_course_query = "DELETE FROM `course_tbl` WHERE `course_tbl`.`course_id` = $delete_course_id";
    $execute_delete_course = mysqli_query($connection,$delete_course_query);
    if ($execute_delete_course) {
        echo "<script>alert('Course Deleted Successfully')</script>";
        echo "<script>window.open('../view_course.php','_self')</script>";
    }
    else
    {
        mysqli_error($connection);
    }
}

// Fill in the Blanks

if (isset($_GET['delete_fitb_id'])) {
    $delete_fitb_id = $_GET['delete_fitb_id'];
    $delete_fitb_query = "DELETE FROM `filling_in_the_blanks_tbl` WHERE `filling_in_the_blanks_tbl`.`fitb_id` = $delete_fitb_id";
    $execute_delete_fitb = mysqli_query($connection,$delete_fitb_query);
    if ($execute_delete_fitb) {
        echo "<script>alert('Fill in the Blanks Deleted Successfully')</script>";
        echo "<script>window.open('../view_fitb.php','_self')</script>";
    }
    else
    {
        mysqli_error($connection);
    }
}

?>
