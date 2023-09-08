<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    </div>
    <?php
        include 'dbConfig.php';
        include 'connect.php';
        
        $regno=$_GET['reg'];
        $query="SELECT * FROM auto1 WHERE regno='$regno'";
        $query_run=mysqli_query($conn,$query);
        $check=mysqli_num_rows($query_run);

    if($check>0){
        while($row=mysqli_fetch_array($query_run))
        {
            if($row!=null)
            {
            ?>

            <div class="container">
        <div class="row">
            <div class="col">
                <div class="per-info">
                    <div class="per-info-body">
                       <div class="form-container">
                        <form method="POST" action="cert_gen.php?course=<?php echo$row['course'];?>&reg=<?php echo $row['regno'];?>">
                            <div class="up-header">
                        <select name="sem_id">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="first">I</option>
                                    <option value="second">II</option>
                                    <option value="third">III</option>
                                    <option value="fourth">IV</option>
                                    <option value="fifth">V</option>
                                    <option value="sixth">VI</option>
                        </select>
                         <input type="checkbox" name="int1">Internal-1
                         <input type="checkbox" name="int2">Internal-2
                         <input type="checkbox" name="int3">Internal-3
                         <input type="checkbox" name="lab-int-1">Lab Internal-1
                         <input type="checkbox" name="lab-int-2">Lab Internal-2
                             <input type="Submit" name="Change" value="Change">
                         </form>
                     </div>
            <table border="2" class="table-pdetails">
                <tr>
                    <th colspan="8"><?php echo "K V G POLYTECHNIC SULLIA D.K";?></th>
                </tr>
                <tr>
                    <th colspan="8"><h2> DEPATMENT OF <?php 
                    $crs=$_GET['course'];
                    if($crs=='AT')
                    {
                        $header1="AUTOMOBILE ENGINEERING";
                    }
                    elseif ($crs=='CV') 
                    {
                        $header1="CIVIL ENGINEERING";
                    }
                    elseif ($crs=='CS') 
                    {
                        $header1="COMPUTER SCIENCE & ENGINEERING";
                    }
                    elseif ($crs=='EE') 
                    {
                        $header1="ELECTRICAL AND ELECTRONICS ENGINEERING";
                    }
                    elseif ($crs=='EC') 
                    {
                        $header1="ELECTRONICS & COMMUNICATION ENGINEERING";
                    }
                    elseif ($crs=='ME') 
                    {
                        $header1="MECHANICAL ENGINEERING";
                    }
                    echo strtoupper($header1);?>
                    </h2></th>
                </tr>
                <tr>
                    
                    <th colspan="2" >Name:</th>
                    <td colspan="6"><?php echo $row['name'];?></td>
                </tr>
                <tr>
                    <th colspan="1">Course:</th>
                    <td colspan="2"><?php echo $row['course'];?></td>
                    <th colspan="1">Sem:</th>
                    <td colspan="2"><?php echo $row['sem'];?></td>
                </tr>
                <tr>
                    <th colspan="1">Registered number:</th>
                    <td colspan="2"><?php echo $row['regno']?></td>
                    <th colspan="1">Date of birth:</th>
                    <td colspan="2"><?php echo $row['dob'];?></td>
                    <img src="plogo.png" class="img-blr">
                </tr>
        </table>
        <div class="tab-backg">
            
        <?php 
                     }
                     }
                     } 
                     ?>
        <?php                   error_reporting(0);
                                $sem_id=$_POST['sem_id'];
                                $int1=$_POST['int1'];
                                $int2=$_POST['int2'];
                                $int3=$_POST['int3']; 
                                $labint1=$_POST['lab-int-1'];
                                $labint2=$_POST['lab-int-2'];                                                               
                                if(isset($_POST['int1']))
                                {
                                    $j=1;
                                    $uniq_id=$regno.'1IAT'.$sem_id;
                                        $query2="SELECT * FROM auto_inter WHERE intruniq='$uniq_id'";
                                        $run_query=mysqli_query($conn,$query2);
                                        $check3=mysqli_num_rows($run_query);
                                        if($check3>0)
                                        {
                                            while($row2=mysqli_fetch_array($run_query))
                                             {?> 
                                              <table class="mark_details">  
                                        <tr>
                                            <th colspan="4">Internals-1</th>
                                        </tr>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Max.Marks</th>
                                            <th>Obt.Marks</th>
                                        </tr>
                                            <?php 
                                            for($i=1;$i<=6;$i++)
                                            {   
                                            if($row2['marksub'.$i]!=0)
                                            {
                                            ?>
                                            <tr>
                                                <td ><label class="label"><?php echo $row2['subj'.$i];?></label></td>
                                                <th>20</th>
                                                <th colspan="4"><label><?php echo $row2['marksub'.$i];?></label></th>
                                            </tr>

                                       <?php 
                                       } 
                                   }
                                   ?>
                                   <tr>
                                        <td>Attendance:(Out of 32 days)</td>
                                        <th colspan="2"><input type="hidden" name="att1" value="<?php echo $row2['attendance'];?>"><?php echo $row2['attendance'];?></th>
                                    </tr>
                                   <?php
                               }
                           }
                       }
                                if(isset($_POST['int2']))
                                {
                                    $j=2;
                                    $uniq_id=$regno.'2IAT'.$sem_id;
                                        $query2="SELECT * FROM auto_inter WHERE intruniq='$uniq_id'";
                                        $run_query=mysqli_query($conn,$query2);
                                        $check3=mysqli_num_rows($run_query);
                                        if($check3>0)
                                        {
                                            while($row2=mysqli_fetch_array($run_query))
                                             {?> 
                                                <table class="mark_details">
                                        <tr>
                                            <th colspan="4">Internals-2</th>
                                        </tr>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Max.Marks</th>
                                            <th>Obt.Marks</th>
                                        </tr>
                                            <?php 
                                            for($i=1;$i<=6;$i++)
                                            {   
                                            if($row2['marksub'.$i]!=0)
                                            {
                                            ?>
                                            <tr>
                                                <td ><label class="label"><?php echo $row2['subj'.$i];?></label></td>
                                                 <th>20</th>
                                                <th colspan="4"><label><?php echo $row2['marksub'.$i];?></label></th>
                                            </tr>

                                       <?php 
                                       } 
                                   }
                                   ?>
                                   <tr>
                                        <td>Attendance:(Out of 32 days)</td>
                                        <th colspan="2"><input type="hidden" name="att2" value="<?php echo $row2['attendance'];?>"><?php echo $row2['attendance'];?></th>
                                    </tr>
                                   <?php
                               }
                           }

                                }
                                if(isset($_POST['int3']))
                                {
                                    $j=3;
                                    $uniq_id=$regno.'3IAT'.$sem_id;
                                        $query2="SELECT * FROM auto_inter WHERE intruniq='$uniq_id'";
                                        $run_query=mysqli_query($conn,$query2);
                                        $check3=mysqli_num_rows($run_query);
                                        if($check3>0)
                                        {
                                            while($row2=mysqli_fetch_array($run_query))
                                             {?> 
                                                <table class="mark_details">
                                        <tr>
                                            <th colspan="4">Internals-3</th>
                                        </tr>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Max.Marks</th>
                                            <th>Obt.Marks</th>
                                        </tr>
                                            <?php 
                                            for($i=1;$i<=6;$i++)
                                            {   
                                            if($row2['marksub'.$i]!=0)
                                            {
                                            ?>
                                            <tr>
                                                <td ><label class="label"><?php echo $row2['subj'.$i];?></label></td>
                                                 <th>20</th>
                                                <th colspan="4"><label><?php echo $row2['marksub'.$i];?></label></th>
                                            </tr>

                                       <?php 
                                       } 
                                   }
                                   ?>
                                   <tr>
                                        <td>Attendance:(Out of 32 days)</td>
                                        <th colspan="2"><input type="hidden" name="att3" value="<?php echo $row2['attendance'];?>"><?php echo $row2['attendance'];?></th>
                                    </tr>
                                   <?php
                               }
                           }

                                }
                                if(isset($_POST['lab-int-1']))
                                {
                                    $j=1;
                                    $uniq_id=$regno.'1IAT'.$sem_id;
                                        $query2="SELECT * FROM auto_inter WHERE intruniq='$uniq_id'";
                                        $run_query=mysqli_query($conn,$query2);
                                        $check3=mysqli_num_rows($run_query);
                                        if($check3>0)
                                        {
                                            while($row2=mysqli_fetch_array($run_query))
                                             {?> 
                                                <table class="mark_details">
                                        <tr>
                                            <th colspan="4">Lab Internals-1</th>
                                        </tr>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Max.Marks</th>
                                            <th>Obt.Marks</th>
                                        </tr>
                                            <?php 
                                            for($i=1;$i<=6;$i++)
                                            {   
                                            if($row2['marklab'.$i]!=0)
                                            {
                                            ?>
                                            <tr>
                                                <td><label class="label"><?php echo $row2['lab'.$i];?></label></td>
                                                 <th>20</th>
                                                <th colspan="4"><label><?php echo $row2['marklab'.$i];?></label></th>
                                            </tr>

                                       <?php 
                                       } 
                                   }
                               }
                                }
                                if(isset($_POST['lab-int-2']))
                                {
                                    $j=2;
                                    $uniq_id=$regno.'2IAT'.$sem_id;
                                        $query2="SELECT * FROM auto_inter WHERE intruniq='$uniq_id'";
                                        $run_query=mysqli_query($conn,$query2);
                                        $check3=mysqli_num_rows($run_query);
                                        if($check3>0)
                                        {
                                            while($row2=mysqli_fetch_array($run_query))
                                             {?> 
                                                <table class="mark_details">
                                        <tr>
                                            <th colspan="4">Lab Internals-2</th>
                                        </tr>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Max.Marks</th>
                                            <th>Obt.Marks</th>
                                        </tr>
                                            <?php 
                                            for($i=1;$i<=6;$i++)
                                            {   
                                            if($row2['marklab'.$i]!=0)
                                            {
                                            ?>
                                            <tr>
                                                <td><label class="label"><?php echo $row2['lab'.$i];?></label></td>
                                                 <th>20</th>
                                                <th colspan="4"><label><?php echo $row2['marklab'.$i];?></label></th>
                                            </tr>

                                       <?php 
                                       } 
                                   }
                               }

                                }
                            }
                        }
                                ?>
                                    <?php 
                                        
                                    ?>
                                </div>
                            </table>
                            <table class="table-sign">
                                <tr>
                                    <th>...............................</th>
                                    <th>...............................</th>
                                    <th>...............................</th>
                                </tr>
                                <tr>
                                    <th>Signature of the Parent </th>
                                    <th>Signature of the Student</th>
                                    <th>Signature of the HOD</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        *{
            padding: 0;
            border: 0;
            box-sizing: border-box;
            font-size: 2vw;
            background: url(https://previews.agefotostock.com/previewimage/medibigoff/eedc59f810ce5b59dd17a5e93f3b37e9/esy-047636874.jpg);
            background-repeat: no-repeat;
            background-position: 50% 0;
            background-size: cover;
        }
        table ,tr,td,th,h2,b{
            background: whitesmoke;
        }
        .up-header{
            background: rgba(0, 0, 0, 0.7);
            padding: 3vw;
            border-radius: 40px;
            color: white;
            font-size: 2vw;
        }
        .up-header select{
            border-radius: 40px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
        }
        .up-header select option{
            border-radius: 40px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            transition: 0.6s ease;
        }
        .up-header input[type=submit]{
            background: rgba(0, 0, 0, 0.7);
            border-radius: 40px;
            color: white;
            padding: 1vw;
        }
        .up-header input[type=checkbox]{
            margin-left: 2vw;
        }
        @media print {
            .up-header {
                visibility: hidden;
                max-height: 0;
            }
        }
        .img-blr{
            position: absolute;
            background: none;
            z-index: 999;
            margin-right:35% ;
            margin-left:20% ;
            margin-top: 10%;
            opacity: 0.1;
            width: 50vw;
            min-height: 5vh;
            pointer-events: none;
        }
        .tab-backg{
            background: whitesmoke;
            border: 2px solid black;
        }
        .mark_details{
            width: 90%;
            border: 2px solid;
            position: relative;
            margin-left: 4vw;
            margin-right: 4vw;
            height: 0.4vh;
        }
        .mark_details , .mark_details th, .mark_details td{
            width: 90%;
            border: 2px solid;
            background: whitesmoke;
            outline: none;
        }
        .mark_details td label, .mark_details th label{
            width: 50%, 50%;
            background: whitesmoke;
            outline: none;  
        }
        .container{
          width: 97%;
          display: inline-block;
          margin: 2%;
        }
        .per-info-body{
            padding: 5px 15px;
        }
        
        
        .form-container{
            width: 100%;
            float: left;
        }
        
        .table-pdetails{
            width:100%;
            height: 0.7vh;
            border: 2px solid;
        }
        .table-pdetails tr th, .table-pdetails tr td{
            float: left;
            margin-top: 0.8vw;
            margin-bottom: 0.8vw;
        }
        .table-pdetails tr th{
            float: left;
            margin-left: 6vw;
        }
        .table-content{
            width:100%;
            height: fit-content;
            border: 2px solid;
        }
        .table-sign{
            border: 1px solid;
            width: 100%;
            background: whitesmoke;
            padding: 3vw;
        }
        .tabl-row{
            width: fit-content;
            height: 1.1vh;
        }
        table tr{
            height:0.5vh;
        }
        .tabl-row td{
            width: 50%,50%;
            height: fit-content;
        }
    </style>
</body>
</html>