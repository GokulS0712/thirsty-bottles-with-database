<?php
    error_reporting(0);
    $n1=$_POST['name'];
    $n2=$_POST['phno'];
    $n3=$_POST['address'];
    $n4=$_POST['bottlematerial'];
    $n5=$_POST['bottletype'];
    $n6=$_POST['sipper'];
    $n7=$_POST['favcolor'];
    $n8=$_POST['quanbottle'];
    $n9=$_POST['bottleno'];
    $n10=$_POST['bottleprint'];
    $con=mysqli_connect('localhost','root','','gexp4');
    $sql="INSERT INTO checkg(AA,BB,CC,DD,EE,FF,GG,HH,II,JJ ) values('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10')";
    $result=mysqli_query($con,$sql);
?>