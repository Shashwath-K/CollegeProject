<?php
	include'connect.php';
	include'dbConfig.php';
	$name=$_POST['reg-info-1'];
	$course=$_POST['reg-info-2'];
	$sem=$_POST['reg-info-3'];
	$regnum=$_POST['reg-info-4'];
	$email=$_POST['reg-info-5'];
	$phone=$_POST['reg-info-6'];
	$pphone1=$_POST['reg-info-7'];
	$pphone2=$_POST['reg-info-8'];
	$paddress=$_POST['reg-info-9'];
	$resaddress=$_POST['reg-info-10'];
	$dob=$_POST['reg-info-11'];
	$prikey=$_POST['prik'];
	$id1=$_GET['sem'];
	$attend=$_POST['attend'];
	$gender=$_POST['gender'];
	$batch=$_POST['reg-info-12'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];

	$Iint1=$_POST['1int1'];$Iint2=$_POST['1int2'];$Iint3=$_POST['1int3'];$Iint4=$_POST['1int4'];$Iint5=$_POST['1int5'];

	$IIint1=$_POST['2int1'];$IIint2=$_POST['2int2'];$IIint3=$_POST['2int3'];$IIint4=$_POST['2int4'];$IIint5=$_POST['2int5'];

	$IIIint1=$_POST['3int1'];$IIIint2=$_POST['3int2'];$IIIint3=$_POST['3int3'];$IIIint4=$_POST['3int4'];$IIIint5=$_POST['3int5'];

    $Ilab1=$_POST['1labia1'];$Ilab2=$_POST['1labia2'];$Ilab3=$_POST['1labia3'];

    $IIlab1=$_POST['2labia1'];$IIlab2=$_POST['2labia2'];$IIlab3=$_POST['2labia3'];


    $sql="UPDATE auto1 SET name='$name',gender='$gender',course='$course',sem='$sem',phone_no='$phone',email='$email',parentphone1='$pphone1',parentphone2='$pphone2',address='$paddress',resaddress='$resaddress',dob='$dob',batch='$batch',father='$fname',mother='$mname'
    WHERE regno='$prikey'";
    $query_run=mysqli_query($conn,$sql);

    if($uniq=$prikey."1IAT".$id1){
    $sql2="UPDATE auto_inter SET attendance='$attend',marksub1='$Iint1',marksub2='$Iint2',marksub3='$Iint3',marksub4='$Iint4',marksub5='$Iint5',marklab1='$Ilab1',marklab2='$Ilab2',marklab3='$Ilab3' 
     WHERE intruniq='$uniq'";
     echo $uniq;
     $query_run2=mysqli_query($conn,$sql2);
 }
 	if($uniq=$prikey."2IAT".$id1){
    $sql2="UPDATE auto_inter SET attendance='$attend',marksub1='$IIint1',marksub2='$IIint2',marksub3='$IIint3',marksub4='$IIint4',marksub5='$IIint5',marklab1='$IIlab1',marklab2='$IIlab2',marklab3='$IIlab3' 
     WHERE intruniq='$uniq'";
     echo $uniq;
     $query_run2=mysqli_query($conn,$sql2);
 }
  	if($uniq=$prikey."3IAT".$id1){
    $sql2="UPDATE auto_inter SET attendance='$attend',marksub1='$IIIint1',marksub2='$IIIint2',marksub3='$IIIint3',marksub4='$IIIint4',marksub5='$IIIint5'
     WHERE intruniq='$uniq'";
     echo $uniq;
     $query_run2=mysqli_query($conn,$sql2);
 }
		header("Location: adminpage.php");
        exit();
?>