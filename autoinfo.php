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
            ?>

            <div class="container">
        <div class="row">
            <div class="col">
                <div class="per-info">
                    <div class="per-info-body">
                       <div class="form-container">
            <table border="2" class="table-pdetails">
                <tr>
                    <th colspan="5">Department of Automobile Engineering</th>
                </tr>
                <tr>
                    <th rowspan="5"><img class="img-con" src="uploads/<?php echo $row['file_name'];?>" alt="placeholder"></th>
                    <th colspan="2">Name:</th>
                    <td colspan="2"><?php echo $row['name'];?></td>
                </tr>
                <tr>
                    <th>Course:</th>
                    <td><?php echo $row['course'];?></td>
                    <th>Sem:</th>
                    <td><?php echo $row['sem'];?></td>
                </tr>
                <tr>
                    <th>Registered number:</th>
                    <td><?php echo $row['regno']?></td>
                    <th>E-mail:</th>
                    <td><?php echo $row['email'];?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?php echo $row['phone_no'];?></td>
                    <th>Parent's mobile Number:</th>
                    <td><?php echo $row['parentphone1'];?></td>
                </tr>
                <tr>
                    <th>Alt Parent's Number:</th>
                    <td><?php echo $row['parentphone2'];?></td>
                    <th>Permanent address:</th>
                    <td><?php echo $row['address'];?></td>
                </tr>
            </table>
        </div>
        <table border="2" class="table-content">
           <tr>
                <th>Residing Address:</th>
                <th>Date of birth</th>
            </tr>
            <tr>
                <td><?php echo $row['resaddress'];?></td>
                <td><?php echo $row['dob'];?></td>
            </tr>
        </table>
        <?php
    }
    ?>
            <?php
            include 'dbConfig.php';
            include 'connect.php';
            $regno=$_POST['regi-num'];
            $inter="1IAT";
            $uniq=$regno.$inter;
            $query2="SELECT * FROM auto_inter WHERE regnum='$regno' AND intruniq='$uniq'";
            $query_run2=mysqli_query($conn,$query2);
            $check2=mysqli_num_rows($query_run2);
            if($check2>0){
            while($row2=mysqli_fetch_array($query_run2))
            {?>
            <table border="2" class="table-content">
            <tr>
                <th colspan="2">Internals-1</th>
                <th colspan="2">Internals-2</th>
                <th colspan="2">Internals-3</th>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj1'];?></td><th><?php echo $row2['marksub1'];?></b></th>
                <td><b><?php echo $row2['subj1'];?></td><td><?php echo $row2['marksub1'];?></b></td>
                <td><b><?php echo $row2['subj1'];?></td><td><?php echo $row2['marksub1'];?></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj2'];?></td><td><?php echo $row2['marksub2'];?></td>
                <td><b>Subject</td><td>Marks:</td>
                <td><b>Subject</td><td>Marks:</td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj3'];?></td><td><?php echo $row2['marksub3'];?></td>
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
            </tr>
            <tr class="tabl-row">
                <td><?php echo $row2['subj4'];?></td><td><?php echo $row2['marksub4'];?></td>
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
            </tr>
            <tr class="tabl-row">
                <td><?php echo $row2['subj5'];?></td><td><?php echo $row2['marksub5'];?></td>
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
            </tr>
            <tr class="tabl-row">
                <td><?php echo $row2['subj6'];?></td><td><?php echo $row2['marksub6'];?></td>
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
            </tr>
            <tr class="tabl-row">
                <td><?php echo $row2['subj7'];?></td><td><?php echo $row2['marksub7'];?></td>
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
            </tr>
            <tr class="tabl-row">
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
            </tr>
        </table> 
        <table class="table-content">
            <tr class="tabl-row">
                <th colspan="2">Lab Internals-1</th>
                <th colspan="2">Lab-Internals-2</th>
            </tr>
            <tr class="tabl-row">
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
            </tr>
            <tr class="tabl-row">
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
            </tr>
            <tr class="tabl-row">
                <td>Subject</td><td>Marks:</td>
                <td>Subject</td><td>Marks:</td>
            </tr>
        </table>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php
        }

    }
    else{
        echo "No Records";
    }
    ?>
    <style>
        *{
            padding: 0;
            border: 0;
            box-sizing: border-box;
        }
        
        .container{
          width: 97%;
          display: inline-block;
          margin: 2%;
        }
        body{
    background-image: linear-gradient(to top, rgb(247, 152, 35),rgb(255, 221, 3),rgb(251, 233, 73),rgb(129, 255, 3));

    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }


        .per-info-body{
            padding: 5px 15px;
        }
        
        
        .form-container{
            width: 100%;
            float: left;
        }
        .img-con{
            width: 133px;
            float: left;
            min-height: 200px;
            max-height: 200px;
            padding-bottom:1.2%;
            background-color: black;
            border: 3px solid blueviolet;       
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