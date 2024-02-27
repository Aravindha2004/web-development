<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$sname=$_POST['sname'];
$semail_id=$_POST['semail_id'];
$spass=$_POST['spass'];

$sql="update std_det_  set sname='$sname',spass='$spass' where semail_id='$semail_id'";

$res=$conn->query($sql);              

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>