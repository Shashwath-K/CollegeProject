<?php 
    include'connect.php';
    include'dbConfig.php';
    $regn=$_GET['id'];  
    $query="DELETE FROM auto1 WHERE regno='$regn'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        $_SESSION['status']="Data deleted Successfully";
        $_SESSION['status_code']="success";
        header("Location: testadmin.php");
    }
    else
    {
        $_SESSION['status']="Data Not deleted";
        $_SESSION['status_code']="Error";
        header("Location: testadmin.php");
    }
    if (isset($_POST['delete_btn_set']))
    {
        $del_id=$_POST['delete_id'];
        $query="DELETE FROM auto1 WHERE regno='$del_id'";
        $query_run=mysqli_query($conn,$query);
    }
?>