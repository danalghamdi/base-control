<?php
$mysqli = new mysqli('localhost','root','','test') or die(mysqli_error($mysqli));

$sql = "SELECT * FROM directions";
$result = $mysqli->query($sql);

if(isset($_GET['right'])){
    $right=$_GET['right'];
    $mysqli->query("insert into directions(direction) 
                 values ('$right')")
                
                         or die($mysqli->error);
}else if(isset($_GET['stop'])){
    $stop=$_GET['stop'];
    $mysqli->query("insert into directions(direction) 
                  values ('$stop')")
                  
                           or die($mysqli->error);
}else if(isset($_GET['left'])){
    $left=$_GET['left'];
    $mysqli->query("insert into directions(direction) 
                  values ('$left')")
                  
                           or die($mysqli->error);
}else if(isset($_GET['forward'])){
    $forward=$_GET['forward'];
    $mysqli->query("insert into directions(direction) 
                  values ('$forward')")
                  
                           or die($mysqli->error);
}else if(isset($_GET['backward'])){
    $backward=$_GET['backward'];
    $mysqli->query("insert into directions(direction) 
                  values ('$backward')")
                  
                           or die($mysqli->error);
}

if(isset($_GET['save'])){
    $s1=$_GET['s1'];
    $s2=$_GET['s2'];
    $s3=$_GET['s3'];
    $s4=$_GET['s4'];
    $s5=$_GET['s5'];
    $s6=$_GET['s6'];

    $mysqli->query("insert into dta(s1,s2,s3,s4,s5,s6) values ('$s1','$s2','$s3','$s4','$s5','$s6')") or
             die($mysqli->error);

    $result = $mysqli->query("SELECT * FROM `dta` WHERE 1") or die($mysqli->error);
        
        if($result)
             {
                 echo "Data are Saved";
             }
         }

?>