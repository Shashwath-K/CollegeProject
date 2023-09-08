    <?php
        include 'dbConfig.php';
        include 'connect.php';
        error_reporting(0);
        $regno=$_POST['regi-num'];
        $cour=$_POST['course'];
        $query="SELECT * FROM auto1,mech1,comsc1,elece1,elec1,civ1 WHERE regno='$regno' AND course='$cour'";
        $query_run=mysqli_query($conn,$query);
        $check=mysqli_num_rows($query_run);

    if($check>0){
        while($row=mysqli_fetch_array($query_run))
        {
            print "<table border=2>";
            print "<tr>";
            print "<th>Name</th>";
            print "<th>Regno</th>";
            print "<th>Course</th>";
            print "</tr>";
            print "<tr>";
            print "<td>".$row['name']."</td>";
            print "<td>".$row['sem']."</td>";
            print "<td>".$row['regno']."</td>";
            print "<td>".$row['course']."</td>";
        }
    }
            ?>
