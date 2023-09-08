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
  $name=$_POST['nm'];
  $ddn1=$_POST['drop-dwn-menu1'];
  $ddn2=$_POST['drop-dwn-menu2'];
  $reg=$_POST['rgn'];
  $dob=$_POST['dob'];
  $mail=$_POST['email'];
  $addr=$_POST['address'];
  $resaddr=$_POST['resaddress'];
  $phone=$_POST['phn'];
  $parent1=$_POST['parent1'];
  $parent2=$_POST['parent2'];
  $p_phone=$_POST['parent-contact1'];
  $p_phone2=$_POST['parent-contact2'];
  $precour=$_POST['precourse1'];
  $year_id=$_POST['year_id'];
  $gender=$_POST['gender'];
  $academeic=$_POST['academic_year'];
   $sub1=$_POST['A']; $sub2=$_POST['B']; $sub3=$_POST['C']; $sub4=$_POST['D']; $sub5=$_POST['E']; $sub6=$_POST['F']; $sub7=$_POST['G']; 
   $course1=$_POST['sub1'];$course2=$_POST['sub2'];$course3=$_POST['sub3'];$course4=$_POST['sub4'];$course5=$_POST['sub5'];$course6=$_POST['sub6'];$course7=$_POST['sub7'];$course8=$_POST['sub8'];
  $timeupl=time();    
        $statusMsg = '';
        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            $allowTypes = array('jpg','png','jpeg','gif','pdf');
            if(in_array($fileType, $allowTypes)){
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    $insert ="INSERT INTO auto1(name,course,sem,regno,phone_no,email,parentphone1,parentphone2,address,resaddress,dob,file_name, upload_on,prevcourse,sub1,sub2,sub3,sub4,sub5,sub6,sub7,course1,course2,course3,course4,course5,course6,course7,batch,year,father,mother,gender) VALUES ('$name','$ddn1','$ddn2','$reg','$phone','$mail','$p_phone','$p_phone2','$addr','$resaddr','$dob','".$fileName."','$timeupl','$precour','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$course1','$course2','$course3','$course4','$course5','$course6','$course7','$academeic','$year_id','$parent1','$parent2','$gender');";
                        $result = mysqli_query($conn, $insert);
                    if($insert){
                        $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                        header("Location: http://127.0.0.1:5501/Registration.html");
                        exit();
                    }else{
                        $statusMsg = "File upload failed, please try again.";
        
                    } 
                }else{
                    $statusMsg = "Sorry, there was an error uploading your file.";
    
                }
            }else{
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';

            }
        }else{
            $statusMsg = 'Please select a file to upload.';
        }
        echo $statusMsg;
?>
