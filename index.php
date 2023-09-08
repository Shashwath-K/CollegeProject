<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
        <title>Login</title>
        <script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
</script>
        <style>
            body{
                font-family: 'Nunito', sans-serif;
                background: rgba(0, 0, 0, 0.5);
                background-image: url("http://www.kvgpolytechnic.org.in/Images/Sliders/College%20Photo.jpg");
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .form1{
                color:rgb(255, 255, 255);
                border:8vh solid transparent;
                border-radius: 3vh;
                background: rgba(0, 0, 0, 0.5);
                text-decoration-color:white;
                max-width: 15%;
                min-width: 190px;
                height: auto;
                font-family: 'Nunito', sans-serif;              
            }
            .form1 input[type=text] , .form1 input[type=password]{
                display: block;
                max-width:auto;
                border-radius: 20px;
                border:none;
                min-height: 4%;
                height:auto;
                min-width: 200px;
                width:100%;
                background: whitesmoke;
                margin: 5px 10px 5px 0;
                padding: 10px;
                border: transparent;
                color: black;
            }
            .form1 input[type=submit]{
                border-radius: 20px;
                border:none;
                min-height: 4%;
                height:auto;
                width:50%;
            }
            .form1 input[type=text]:focus, .form1 input[type=password]:focus {
             background-color: #ddd;
             outline: none;
             color:black;
            }
            
            .midpos{
                border:25%;
                padding-top: 9%;
            }
        </style>
    </head>
    <body>
        <form method="POST" action=""><center class="midpos">
            <h1 style="color: white;">Login</h1>
          <div class="form1">
            Username:<input type="text" name="userid" placeholder="Email" autocomplete="off"><br/>
            Password:<input type="password" name="password" placeholder="Password" autocomplete="off"><br/><br/>
            <input type="Submit" name="Submit" value="Login">
          </div>
            </center>
        </form>
    </body>
</html>
<?php
    include("init.php");
    session_start();

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: http://127.0.0.1:5501/index.html");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>