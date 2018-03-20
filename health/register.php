<?php
session_start();
$connection=mysqli_connect('localhost','root123','anits123proj','health');
if(!$connection){
    die("database connection failed" . mysql_error($connection));
}
    $add=$_POST['aadhar'];
    $pswd=$_POST['pass'];
   $nam=$_POST['name'];
   $ag=$_POST['age'];
   $gen=$_POST['gender'];
   $ht=$_POST['ht'];
   $wt=$_POST['wt'];
   $dt=$_POST['dob'];
   $bgp=$_POST['blood'];
   $phone=$_POST['num'];
   echo $sql="Insert into patientdetails values('$add','$pswd','$nam','$ag','$gen','$ht','$wt','$dt','$bgp','$phone')";
   $sql1="Insert into patient values('$add','$pswd','$nam')";
    $result1=mysqli_query($connection,$sql1);
    $result=mysqli_query($connection,$sql);
    if($result && $result1)
    {
    	header("Location:login.html");
    }
    else
    {
    
    	echo "<script type='text/javascript'>alert('Invalid aadharid')</script>";
    }
    

?>
