<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        a {
            padding-right: 40px;
            text-decoration: none;
            color:rgba(168, 26, 4, 0.955);
        }

        #hd {
            background-color:rgb(211, 162, 63);
            color:rgba(168, 26, 4, 0.955) ;
        }center
         {
             font-size: 150%;
         }
         

    </style>
</head>
<body>

 <div id="hd">
       <CENTER> <h3>STUDENTS DETAILS
            <hr>
        </h3>

        <div id="nav">
       <a href="home1_std.html">Home</a>
            <a href="new_std.html"> new student </a>
            <a href="mod_std.html">Modify student</a>
            <a href="rem_std.html">Remove student</a>
            <a href="vie_std.php">View student</a>
        </div>
    </div></CENTER><br><br>
    <?php

$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);

$sql="select * from std_det_";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['sname'].'</td>';
      echo '<td>'.$row['semail_id'].'</td>';
      echo '<td>'.$row['spass'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>