<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "depart_ments");
$output = '';
$cid=$_GET['course'];
if(isset($_POST["export"]))
{
 $query="SELECT * FROM auto1,auto_inter WHERE auto1.course='$cid' AND auto1.regno=auto_inter.regnum AND auto1.sem=auto_inter.sem";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Internals</th> 
                         <th>Course</th> 
                         <th>Parent Phone</th>  
                         <th>Message</th> 
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
     $internal=$row['internals'];
        if($internal=="1IAT")
        {
            $int_id="1st Internal";
        }
        elseif($internal=="2IAT")
        {
            $int_id="2nd Internal";
        }
        elseif($internal=="3IAT")
        {
            $int_id="3rd Internal";
        }
        $subject1=$row['subj1'];  $marksub1=$row['marksub1'];
     $subject2=$row['subj2'];  $marksub2=$row['marksub2'];
     $subject3=$row['subj3'];  $marksub3=$row['marksub3'];
     $subject4=$row['subj4'];  $marksub4=$row['marksub4'];
     $subject5=$row['subj5'];  $marksub5=$row['marksub5'];
     $subjectla1=$row['lab1'];  $marklab1=$row['marklab1'];
     $subjectla2=$row['lab2'];  $marklab2=$row['marklab2'];
     $subjectla3=$row['lab3'];  $marklab3=$row['marklab3'];
     if($internal=="1IAT" || $internal=="2IAT")
     {  
     $msg="[$int_id marks]
     $subject1 = $marksub1
     $subject2 = $marksub2
     $subject3 = $marksub3
     $subject4 = $marksub4
     $subjectla1 = $marklab1
     $subjectla2 = $marklab2
     $subjectla3 = $marklab3";
   $output .= '
    <tr>    
         <td>'.$row["name"].'</td>  
         <td>'.$internal.'</td> 
         <td>'.$row['course'].'</td> 
         <td>'.$row["parentphone1"].'</td>  
         <td>'.$msg.'</td>  
       </tr>  
   ';
  }
  if($internal=="3IAT")
     {  
     $msg="[$int_id marks]
     $subject1 = $marksub1
     $subject2 = $marksub2
     $subject3 = $marksub3
     $subject4 = $marksub4
     ";
  $output .= '
  <tr>  
         <td>'.$row["name"].'</td>  
         <td>'.$internal.'</td> 
         <td>'.$row['course'].'</td> 
         <td>'.$row["parentphone1"].'</td>  
         <td>'.$msg.'</td>  
       </tr>
  ';
}
}
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Details.xls');
  echo $output;
 }
}
?>