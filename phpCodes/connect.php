<?php
$conect=mysqli_connect("localhost","root","","gabbyshop");
if($conect==true){
    echo"connected";
}
else{echo"Try again";

}
?>