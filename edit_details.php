    <div class="container">
        <div class="row">
            <div class="col">
                <div class="per-info">
                    <div class="per-info-body">
                       <div class="form-container">
                        <?php
                        include 'dbConfig.php';
                        include 'connect.php';
                        if(isset($_GET['id']))
                        {
                        $regno=$_GET['id'];
                        $query="SELECT * FROM auto1 WHERE regno='$regno'";
                        $query_run=mysqli_query($conn,$query);
                        $check=mysqli_num_rows($query_run);

                    if($check>0){
                        while($row=mysqli_fetch_array($query_run))
                        {
                            ?>
                            <form method="POST" action="update_edit.php">
            <table border="2" class="table-pdetails">
                <tr>
                    <th colspan="5">Department of Automobile Engineering</th>
                </tr>
                <tr>
                    <th rowspan="5" class="img-size-row"><img class="img-con" src="uploads/<?php echo $row['file_name'];?>" alt="placeholder"></th>
                    <th colspan="2">Name:</th>
                    <td colspan="2"><input type="hidden" name="prik" value="<?php echo $regno;?>">
                        <input type="text" name="reg-info-1"value="<?php echo $row['name'];?>"></td>
                </tr>
                <tr>
                    <th>Course:</th>
                    <td><input type="text" name="reg-info-2"value="<?php echo $row['course'];?>"></td>
                    <th>Sem:</th>
                    <td><input type="text" name="reg-info-3"value="<?php echo $row['sem'];?>"></td>
                </tr>
                <tr>
                    <th>Registered number:</th>
                    <td><input type="hidden" name="reg-info-4" value="<?php echo $row['regno'];?>"><?php echo $row['regno'];?></td>
                    <th>E-mail:</th>
                    <td><input type="text"name="reg-info-5" value="<?php echo $row['email'];?>"></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><input type="text" name="reg-info-6"value="<?php echo $row['phone_no'];?>"></td>
                    <th>Parent's mobile Number:</th>
                    <td><input type="text" name="reg-info-7"value="<?php echo $row['parentphone1'];?>"></td>
                </tr>
                <tr>
                    <th>Alt Parent's Number:</th>
                    <td><input type="text" name="reg-info-8"value="<?php echo $row['parentphone2'];?>"></td>
                    <th>Permanent address:</th>
                    <td><input type="text" name="reg-info-9"value="<?php echo $row['address'];?>"></td>
                </tr>
        
           <tr>
                <th colspan="3">Residing Address:</th>
                <th colspan="2">Date of birth</th>
            </tr>
            <tr>
                <td colspan="3"><input type="text" name="reg-info-10"value="<?php echo $row['resaddress'];?>"></td>
                <td colspan="2"><input type="date" name="reg-info-11"value="<?php echo $row['dob'];?>"></td>
            </tr>
        </table>
        <?php
}
}
}
    ?>
            <?php
            if($uniq=$regno."1IAT"){
            $query2="SELECT * FROM auto_inter WHERE regnum='$regno' AND intruniq='$uniq'";
            $query_run2=mysqli_query($conn,$query2);
            $check2=mysqli_num_rows($query_run2);
            if($check2>0)
            {
            while($row2=mysqli_fetch_array($query_run2))
            {
            
            	?>
            <table border="2" class="table-content1">
            <tr>
                <th colspan="2">Internals-1</th>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj1'];?></td><td><input type="text" name="1int1" value="<?php echo $row2['marksub1'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj2'];?></td><td><input type="text" name="1int2" value="<?php echo $row2['marksub2'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj3'];?></td><td><input type="text" name="1int3" value="<?php echo $row2['marksub3'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj4'];?></td><td><input type="text" name="1int4" value="<?php echo $row2['marksub4'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj5'];?></td><td><input type="text" name="1int5" value="<?php echo $row2['marksub5'];?>"></b></td>
            </tr>
        </table>
        <?php 
    		}
            }
            }	
    		?>
        <?php
            if($uniq=$regno."2IAT"){
            $query2="SELECT * FROM auto_inter WHERE regnum='$regno' AND intruniq='$uniq'";
            $query_run2=mysqli_query($conn,$query2);
            $check2=mysqli_num_rows($query_run2);
            if($check2>0)
            {
            while($row2=mysqli_fetch_array($query_run2))
            {?>
        <table border="2" class="table-content1">
            <tr>
                <th colspan="2">Internals-2</th>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj1'];?></td><td><input type="text" name="2int1" value="<?php echo $row2['marksub1'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj2'];?></td><td><input type="text" name="2int2" value="<?php echo $row2['marksub2'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj3'];?></td><td><input type="text" name="2int3" value="<?php echo $row2['marksub3'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj4'];?></td><td><input type="text" name="2int4" value="<?php echo $row2['marksub4'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj5'];?></td><td><input type="text" name="2int5" value="<?php echo $row2['marksub5'];?>"></b></td>
            </tr>
        </table>
        <?php 
    		}
            } 
        }?>
        <?php
            if($uniq=$regno."3IAT"){
            $query2="SELECT * FROM auto_inter WHERE regnum='$regno' AND intruniq='$uniq'";
            $query_run2=mysqli_query($conn,$query2);
            $check2=mysqli_num_rows($query_run2);
            if($check2>0)
            {
            while($row2=mysqli_fetch_array($query_run2))
            {
                ?>
        <table border="2" class="table-content1">
            <tr>
                <th colspan="2">Internals-3</th>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj1'];?></td><td><input type="text" name="3int1" value="<?php echo $row2['marksub1'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj2'];?></td><td><input type="text" name="3int2" value="<?php echo $row2['marksub2'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj3'];?></td><td><input type="text" name="3int3" value="<?php echo $row2['marksub3'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj4'];?></td><td><input type="text" name="3int4" value="<?php echo $row2['marksub4'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['subj5'];?></td><td><input type="text" name="3int5" value="<?php echo $row2['marksub5'];?>"></b></td>
            </tr>
        </table>
        <?php 
            } 
        }
        
    }?>
        <?php
            if($uniq=$regno."1IAT"){
            $query2="SELECT * FROM auto_inter WHERE regnum='$regno' AND intruniq='$uniq'";
            $query_run2=mysqli_query($conn,$query2);
            $check2=mysqli_num_rows($query_run2);
            if($check2>0)
            {
            while($row2=mysqli_fetch_array($query_run2))
            {
                ?>
        <table class="table-content1">
            <tr class="tabl-row">
                <th colspan="2">Lab Internals-1</th>
            </tr>
            <tr class="tabl-row">
                <input type="hidden" name="uniq_key" value="<?php echo $uniq; ?>">
                <td><b><?php echo $row2['lab1'];?></td><td><input type="text" name="1labia1" value="<?php echo $row2['marklab1'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['lab2'];?></td><td><input type="text" name="1labia2" value="<?php echo $row2['marklab2'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['lab3'];?></td><td><input type="text" name="1labia3" value="<?php echo $row2['marklab3'];?>"></b></td>
            </tr>
        </table>
        <?php 
            } 
        }
        
    }?>
        <?php
            if($uniq=$regno."2IAT"){
            $query2="SELECT * FROM auto_inter WHERE regnum='$regno' AND intruniq='$uniq'";
            $query_run2=mysqli_query($conn,$query2);
            $check2=mysqli_num_rows($query_run2);
            if($check2>0)
            {
            while($row2=mysqli_fetch_array($query_run2))
            {
                ?>
        <table class="table-content1">
            <tr class="tabl-row">
                <input type="hidden" name="uniq_key" value="<?php echo $uniq; ?>">
                <th colspan="2">Lab Internals-2</th>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['lab1'];?></td><td><input type="text" name="2labia1" value="<?php echo $row2['marklab1'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['lab2'];?></td><td><input type="text" name="2labia2" value="<?php echo $row2['marklab2'];?>"></b></td>
            </tr>
            <tr class="tabl-row">
                <td><b><?php echo $row2['lab3'];?></td><td><input type="text" name="2labia3" value="<?php echo $row2['marklab3'];?>"></b></td>
            </tr>
        </table>
        <?php 
            } 
        }
        
    }?>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php

    ?>
    <style>
        *{
            padding: 0;
            border: 0;
            box-sizing: border-box;
        }
        
        .container{
          width: 97%;
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
        .img-size-row{
            max-width: 100px;
        }
        .img-con{
            max-width: 138px;
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
            width: 100%;
            height: fit-content;
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
        .table-content1{
            width:50%;
            float: left;
            height: fit-content;
            border: 2px solid;
        }
        .table-content1 td{
            max-width: 30px;
            border: 2px solid;
            height: fit-content;
        }
        .table-content1 td{
            font-family: Arial;
            font-size:7pt;
            width: 50px;
        }
        .table-content1 th{
            border: 2px solid;
            height: fit-content;
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


    ?>
    <input type="Submit" name="update" value="Update">
</form>
</body>
</html>
