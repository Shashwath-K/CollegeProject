<?php
$connect = mysqli_connect("localhost", "root", "", "depart_ments");
$cid=$_GET['course'];
$batch=$_GET['sem'];
$int_id=$_GET['int'];
$sql="SELECT * FROM auto1,auto_inter WHERE auto1.course='$cid' AND auto1.regno=auto_inter.regnum AND auto1.sem=auto_inter.sem AND auto_inter.internals='$int_id'";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Message Data</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Message Data</h2><br/> 
    <table class="table table-bordered">
     <tr>  
                         <th>Name</th>  
                         <th>Internals</th> 
                         <th>Course</th> 
                         <th>Parent's Phone</th>  
                         <th>Message</th> 
                    </tr>
     <?php
     
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
     if($internal=="1IAT")
     {  
     $msg="[$int_id marks]
     $subject1 = $marksub1
     $subject2 = $marksub2
     $subject3 = $marksub3
     $subject4 = $marksub4
     $subjectla1 = $marklab1
     $subjectla2 = $marklab2
     $subjectla3 = $marklab3
     (The internals conducted is for the max marks of 20)";?>
       <tr>  
         <td><?php echo $row["name"];?></td>  
         <td><?php echo $internal;?></td> 
         <td><?php echo $row["course"];?></td> 
         <td><?php echo  "+91".$row["parentphone1"];?></td>  
         <td><?php echo $msg?></td>  
       </tr>  
<?php 
}
    if($internal=="2IAT")
     {  
     $msg="[$int_id marks]
     $subject1 = $marksub1
     $subject2 = $marksub2
     $subject3 = $marksub3
     $subject4 = $marksub4
     $subjectla1 = $marklab1
     $subjectla2 = $marklab2
     $subjectla3 = $marklab3
     (The internals conducted is for the max marks of 20)";?>
       <tr>  
         <td><?php echo $row["name"];?></td>  
         <td><?php echo $internal;?></td> 
         <td><?php echo $row["course"];?></td> 
         <td><?php echo  "+91".$row["parentphone1"];?></td>  
         <td><?php echo $msg?></td>  
       </tr>  
<?php 
}
     if($internal=="3IAT")
     {  
     $msg="[$int_id marks]
     $subject1 = $marksub1
     $subject2 = $marksub2
     $subject3 = $marksub3
     $subject4 = $marksub4
     (The internals conducted is for the max marks of 20)
     "; ?>  
       <tr>  
         <td><?php echo $row["name"];?></td>  
         <td><?php echo $internal;?></td> 
         <td><?php echo $row["course"];?></td> 
         <td><?php echo "+91".$row["parentphone1"];?></td>  
         <td><?php echo $msg;?></td>  
       </tr>  
       <?php   
     }
 }
     ?>
    </table>
    <br />
    <form method="POST" action="http://localhost/server/export.php?course=<?php echo $cid;?>">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
  <style type="text/css">
      .up-header{
            background: rgba(0, 0, 0, 0.7);
            padding: 1vw;
            border-radius: 40px;
            color: white;
            font-size: 1vw;
        }
        .up-header input{
            margin: 1vw;
        }
  </style>
 </body>  
</html>
