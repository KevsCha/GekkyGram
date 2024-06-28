<?php
 
 session_start();

require 'config.php';
 $x='3469';
 $y='k-e-v-i-n_13_@hotmail.com';

$sql2=mysqli_query($conect,("SELECT * FROM user "));

//$sql= mysqli_query($conect,("SELECT 'id' FROM user WHERE id != '$x' "));

$query=mysqli_num_rows($sql2);

while ($data = mysqli_fetch_array($sql2) ) {
    if ($data['id'] != $x) {
        echo $data['email']."\n-----";
    }
    
}

//$sql=mysqli_fetch_array($sql);
//$sql2=mysqli_fetch_array($sql2);

//print_r($sql2);
//print_r($sql2);

?>