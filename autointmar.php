<?php
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "depart_ments";

$conn=mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection Not Established: " . $conn->connect_error);
}

    if($conn){
  $ddn1=$_POST['drop-dwn-menu1'];
  $ddn2=$_POST['drop-dwn-menu2'];
  $reg=$_POST['rgn'];
  $time=$_POST['time'];
  $ddn3=$_POST['drop-dwn-menu3'];
  $prikey=$reg.$ddn3.$ddn2;
  $att=$_POST['attendance'];
   $sub1=$_POST['A']; $sub2=$_POST['B']; $sub3=$_POST['C']; $sub4=$_POST['D']; $sub5=$_POST['E']; $sub6=$_POST['G'];
   $course1=$_POST['sub1'];$course2=$_POST['sub2'];$course3=$_POST['sub3'];$course4=$_POST['sub4'];$course5=$_POST['sub5'];$course6=$_POST['sub6'];$course7=$_POST['sub7'];
   $lab1=$_POST['lab1'];$lab2=$_POST['lab2']; $lab3=$_POST['lab3']; $lab4=$_POST['lab4']; 
   $labsub1=$_POST['H']; $labsub2=$_POST['I'];$labsub3=$_POST['J'];$labsub4=$_POST['K'];
                    $insert ="INSERT INTO auto_inter(regnum,intruniq,course,sem,time,internals,subj1,subj2,subj3,subj4,subj5,subj6,subj7,lab1,lab2,lab3,lab4,marksub1,marksub2,marksub3,marksub4,marksub5,marksub6,marksub7,marklab1,marklab2,marklab3,marklab4,attendance) VALUES ('$reg','$prikey','$ddn1','$ddn2','$time','$ddn3','$course1','$course2','$course3','$course4','$course5','$course6','$course7','$lab1','$lab2','$lab3','$lab4','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$labsub1','$labsub2','$labsub3','$labsub4','$att');";
                        $result = mysqli_query($conn, $insert);
                        if($result>0){
                            header("Location: http://127.0.0.1:5501/Registration.html");
                            exit();
                        }
    }
?>
