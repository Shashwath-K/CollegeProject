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
        error_reporting(0);
        $regno=$_POST['regi-num'];
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
            <table border="2" class="table-pdetails">
                <tr>
                    <th colspan="5"><?php echo "K V G POLYTECHNIC SULLIA D.K";?></th>
                </tr>
                <tr>
                    <th colspan="5"><h2> DEPATMENT OF <?php 
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
                    <th rowspan="5"><img class="img-con" src="uploads/<?php echo $row['file_name'];?>" alt="placeholder"></th>
                    <th colspan="2" bgcolor="aqua">Name:</th>
                    <td colspan="2"><?php echo $row['name'];?></td>
                </tr>
                <tr>
                    <th bgcolor="aqua">Course:</th>
                    <td><?php echo $row['course'];?></td>
                    <th bgcolor="aqua">Sem:</th>
                    <td><?php echo $row['sem'];?></td>
                </tr>
                <tr>
                    <th bgcolor="aqua">Registered number:</th>
                    <td><?php echo $row['regno']?></td>
                    <th bgcolor="aqua">Gender:</th>
                    <td><?php echo $row['gender'];?></td>
                </tr>
                <tr>
                    <th bgcolor="aqua">Father name:</th>
                    <td><?php echo $row['father'];?></td>
                    <th bgcolor="aqua">Mother name:</th>
                    <td><?php echo $row['mother'];?></td>
                </tr>
                <tr>
                    <th bgcolor="aqua">Phone:</th>
                    <td><?php echo $row['phone_no'];?></td>
                    <th bgcolor="aqua">Parent's mobile Number:</th>
                    <td><?php echo $row['parentphone1'];?></td>
                </tr>
                <tr>
                    <th bgcolor="aqua">Alt Parent's Number:</th>
                    <td><?php echo $row['parentphone2'];?></td>
                    <th bgcolor="aqua">Permanent address:</th>
                    <td colspan="3"><?php echo $row['address'];?></td>
                </tr>
           <tr>
                <th colspan="2" bgcolor="aqua">Residing Address:</th>
                <td colspan="3"><?php echo $row['resaddress'];?></td>
            </tr>
            <tr>
                <th colspan="1" bgcolor="aqua">Date of birth</th> 
                <td><?php echo $row['dob'];?></td>
                <th colspan="2" bgcolor="aqua">Previous Course:</th>
                <td><?php echo strtoupper($row['prevcourse']);?></td>
            </tr>
            <tr>
                <th colspan="5" bgcolor="yellow"><?php echo strtoupper($row['prevcourse']);?> Marks</th>
            </tr>
            <tr>
                <th colspan="3" bgcolor="aqua">Subject</th>
                <th colspan="2" bgcolor="aqua">Marks:</th>
            </tr>
        <tr>
            <td colspan="3"><b><?php echo $row['course1'];?></b></td>
            <td colspan="2"><b><?php echo $row['sub1'];?></b></td>
        </tr>
        <tr>
            <td colspan="3"><b><?php echo $row['course2'];?></b></td>
            <td colspan="2"><b><?php echo $row['sub2'];?></b></td>
        </tr>
        <tr>
            <td colspan="3"><b><?php echo $row['course3'];?></b></td>
            <td colspan="2"><b><?php echo $row['sub3'];?></b></td>
        </tr>
        <tr>
            <td colspan="3"><b><?php echo $row['course4'];?></b></td>
            <td colspan="2"><b><?php echo $row['sub4'];?></b></td>
        </tr>
        <tr>
            <td colspan="3"><b><?php echo $row['course5'];?></b></td>
            <td colspan="2"><b><?php echo $row['sub5'];?></b></td>
        </tr>
        <tr>
            <td colspan="3"><b><?php echo $row['course6'];?></b></td>
            <td colspan="2"><b><?php echo $row['sub6'];?></b></td>
        </tr>
        <tr>
            <td colspan="3"><b><?php echo $row['course7'];?></b></td>
            <td colspan="2"><b><?php echo $row['sub7'];?></b></td>
        </tr>
        <tr>
            <td colspan="3"><b><?php echo $row['course8'];?></b></td>
            <td colspan="2"><b><?php echo $row['sub8'];?></b></td>
        </tr>
        </table>
        <?php
    }
    }
    ?>
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
            background: url(https://previews.agefotostock.com/previewimage/medibigoff/eedc59f810ce5b59dd17a5e93f3b37e9/esy-047636874.jpg) rgba(76, 175, 80, 0.3);
            background-repeat: no-repeat;
            background-position: 50% 0;
            background-size: cover;
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
        .img-con{
            width: 138px;
            float: left;
            min-height: 200px;
            max-height: 200px;
            padding-bottom:1.2%;
            background-color: black;
            border: 3px solid blueviolet;       
        }
        table ,tr,td,th,h2,b{
            background: whitesmoke;
        }
        .table-pdetails{
            width:100%;
            border: 2px solid;
        }
        .table-pdetails th{
            width: fit-content;
            height: 4vh;
            border: 2px solid;
        }
        .table-pdetails td{
            border: 2px solid;
            text-align: center;
        }
        .table-content{
            width:100%;
            height: fit-content;
            border: 2px solid;
        }
        .table-content td{
            max-width: 30px;
            border: 2px solid;
            height: fit-content;
        }
        .table-content td{
            font-family: Arial;
            font-size:7pt;
            width: 50px;
        }
        .table-content th{
            border: 2px solid;
            height: fit-content;
        }
        .tabl-row{
            width: fit-content;
            height: 4vh;
        }
        .tabl-row td{
            width: 50%,50%;
            height: fit-content;
        }
    </style>
    <?php

    }
    else{
        echo "No Records";
    }
    ?>
</body>
</html>