<?php
$host='localhost';
$user='root';
$pass='';
$db='student';


$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$sname=$_POST['sname'];
$semail_id=$_POST['semail_id'];
$spass=$_POST['spass'];
$sql="insert into std_det_(sname,semail_id,spass) values('$sname','$semail_id','$spass')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>