<?php
require('Connect.php');
extract($_POST);
if(isset($save))
{
    $qsl=mysqli_query($conect,"select * from users where UserEmail='$YourEmail'");
    $num_rows=mysqli_num_rows($qsl);

     if($num_rows==true)
     {
        $error="<font color='red'>This user already exists</font>";
     }
     else
     {
         //encrypt your password
$pass=md5($Password);

$query="insert into users values('','$UserName','$YourEmail','$pass')";
mysqli_query($conect,$query);
$error="<font color='red'>You've been registered</font>";
     }

}


?>
	<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$error;?></Td>
	</Tr></table>