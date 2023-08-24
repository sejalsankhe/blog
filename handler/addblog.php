<?php 
include('db.php');
$imagelink = $_POST['imagelink'];
$blogtitle = $_POST['blogtitle'];
$blogtext = $_POST['blogtext'];
$btn = $_POST['btn'];


if(isset($btn)){ // agar btn click kiya tho
$insert = "INSERT into blogs('imglink, title, text) values ('$imagelink', '$blogtitle', '$blogtext')";
if($db->query($insert)){
    echo "works";
}
else{
    echo $db->error;
}
}






?>