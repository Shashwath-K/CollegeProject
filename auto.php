<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body{
    background-image: linear-gradient(to top, rgb(247, 152, 35),rgb(255, 221, 3),rgb(251, 233, 73),rgb(129, 255, 3));
    background-attachment: fixed;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    section{
    width:80vw;
    margin: 5% auto;
    padding-top: 40;
    text-align: center;
    line-height: 25px;
    }
    h1{
    margin-bottom: 2vh;
    }
    .course-year{
    margin-left: 35%;
    margin-right: 35%;
    }
    .course-year ul{
    list-style: none;
    display: inline-block;
    text-decoration: none;
    }
    .course-year a:link, a:visited {
    background-color: #a8f436;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 3%;
    width:30vw;
    height: fit-content;
    border-radius: 30px;
    }
  
  .course-year a:hover, a:active {
    background-color: rgb(0, 255, 102);
  }
</style>
    
</head>
<body>
    
    <nav class="navbar">
            <h2><?php 
            $crs=$_GET['course_name'];
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
            echo strtoupper($header1);?></h2>    
    </nav>
    <style>
        .navbar{
        min-height:10vh;
        border-bottom: solid 4px yellowgreen;
        box-shadow: 2px 2px 35px 2px rgb(3, 61, 3);
        padding: 12px 28px;
        font-size: larger;
        font-weight: 700;
        letter-spacing: 3px;
        text-align: center;
        }
    </style>
    <div class="center-logo">
        
    </div>
    <?php
    error_reporting(0);
        include 'dbConfig.php';
        include 'connect.php';
        $sem_id=$_GET['sem_id'];
    $query="SELECT * FROM auto1 WHERE year='$sem_id' AND course='$crs'";
    $query_run=mysqli_query($conn,$query);
    $check=mysqli_num_rows($query_run);

    if($check>0){
        while($row=mysqli_fetch_array($query_run))
        {
            ?>
            
        <form method="POST" action="http://localhost/server/autostuinfo.php?course=<?php echo $crs; ?>">
            <div id="container">    
                <div class="product-details">
                <h1>Name:<?php echo strtoupper($row['name']);?></h1>
                            <p class="information"><b>Register no:</b><?php echo $row['regno']?><input type="hidden" name="regi-num" value="<?php echo $row['regno']?>"></p>
                            <p class="information"><b>Sem:</b><?php echo $row['sem'];?></p>
                            <p class="information"><b>Course:</b><?php echo $row['course'];?></p>
                            <p class="information"><b>Address:</b><?php echo $row['address'];?></p>
            <div class="control">
                <button class="btn">
               <span class="submit" onclick="this.form.submit()">Full Details</span>
             </button>
         </div>
        </div>
        <div class="product-image">
            <img src="uploads/<?php echo $row['file_name'];?>" class="per-info-disp">
        </div>
</div>
                    </table>
                </form>
            <?php
        }

    }
    else{
        echo "No Records";
    }
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=EB+Garamond:ital,wght@0,500;1,800&display=swap');


            body {
            background: #DFC2F2;
                background-image: linear-gradient( to right, #ffffb3,#ffe6e6);
                background-attachment: fixed;   
                background-size: cover;
              
                }

            #container{
                box-shadow: 0 15px 30px 1px grey;
                background: rgba(255, 255, 255, 0.90);
                text-align: center;
                border-radius: 5px;
                overflow: hidden;
                margin: 2%;
                height: 30vh;
                max-height: 300px;
                width: 29.3%;
                float: left;         
            }
            .product-details {
                position: relative;
                text-align: left;    
                padding: 30px;
                height: 100%;
                float: left;
                width: 40%;

            }
            .information{
                font-size: 1vw;
            }
            #container .product-details h1{
                font-family: 'Bebas Neue', cursive;
                display: inline-block;
                position: relative;
                font-size: 1vw;
                color: #344055;
                margin: 0;
                
            }

            #container .product-details > p {
            font-family: 'EB Garamond', serif;
                text-align: left;
                font-siz;
                color: #7d7d7d;
                
            }
            .btn {
                transform: translateY(0px);
                transition: 0.3s linear;
                background:  #809fff;
                border-radius: 5px;
              position: relative;
              overflow: hidden;
                cursor: pointer;
                outline: none;
                border: none;
                color: #eee;
                padding: 0;
                margin: 0;
                margin-top: 5px;
                
            }
            .btn .submit{
                font-size: 0.8vw;
            }
            .btn:hover{
                transform: translateY(-1px);
                background: #1a66ff;}

            .btn span {
                font-family: 'Farsan', cursive;
                transition: transform 0.3s;
                display: inline-block;
                padding: 10px 20px;
                font-size: 1vw;
                margin:0;
                
            }

            .product-image {
                transition: all 0.3s ease-out;
                display: inline-block;
                position: relative;
                overflow: hidden;
                height: 100%;
                float: right;
                width: 45%;
                display: inline-block;
            }

            #container img {width: 100%;height: 100%;}

            .info {
                background: rgba(27, 26, 26, 0.9);
                font-family: 'Bree Serif', serif;
                transition: all 0.3s ease-out;
                transform: translateX(-100%);
                position: absolute;
                line-height: 1.8;
                text-align: left;
                font-size: 105%;
                cursor: no-drop;
                color: #FFF;
                height: 100%;
                width: 100%;
                left: 0;
                top: 0;
            }

            .info h2 {text-align: center}
            .product-image:hover .info{transform: translateX(0);}

            .info ul li{transition: 0.3s ease;}
            .info ul li:hover{transform: translateX(50px) scale(1.3);}

            .product-image:hover img {transition: all 0.3s ease-out;}
            .product-image:hover img {transform: scale(1.2, 1.2);}
    </style>
    
</body>
</html>