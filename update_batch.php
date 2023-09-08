<?php 
    include 'dbConfig.php';
    include 'connect.php';
    $course=$_POST['course'];
    $batch=$_POST['batch_id'];
    $batch_update=$_POST['batch_update_id'];
    $batch_year=$_POST['batch_update_yr'];
    $query="UPDATE auto1 SET sem='$batch_update',year='$batch_year'  WHERE batch='$batch' AND course='$course'";
    $query_run=mysqli_query($conn,$query);

    if($query_run){
        echo "<script> alert('Updated Successfully!);</script>";
        header("Location: adminpage.php");
    }
    else{
        echo "<script> alert('Records not updated!);</script>";
        header("Location: testadmin.php"); 
    }



?>