<?php
include("../../config/connect.php");
if(
    !empty($_POST["date"]) &&
     !empty($_POST["time"]) &&
      !empty($_POST["user"]) &&
       !empty($_POST["type"]) )
{
    $date=$_POST["date"];
    $time=$_POST["time"];
    $user=$_POST["user"];
    $type=$_POST["type"];
    $loginquery = "SELECT * FROM customers WHERE EMAIL_ID = '$user'";
    $exutequery = mysqli_query($con, $loginquery);
    if (mysqli_num_rows($exutequery) == 1)
    {
        while($row=mysqli_fetch_assoc($exutequery))
        {
            $user_id=$row["CUSTOMER_ID"];
            $registerquery="INSERT INTO `appointmentbook` ( `APT_DATE`, `APT_TIME`, `TYPE`, `CUSTOMER_ID`) VALUES ( '$date', '$time', '$type', '$user_id')";
            $exutequeryforregister=mysqli_query($con,$registerquery);
   if($exutequeryforregister)
   {
    echo("1");
   }
   else{
    echo("2");
   }
}
        }
    }
   
 
   

   
?>