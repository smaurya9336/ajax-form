<?php
$data=$_GET['datavalue'];

$a=array('PUNE','MUMBAI');
$b=array('Lucknow','Gorakhpur');
$c=array('patna','Kishanganj');
$d=array('jhansi','chennai');

if($data=="Maharashtra"){
    foreach($a as $aone){
        echo "<option> $aone</option>";
    }
}

if($data=="UP"){
    foreach($b as $bone){
        echo "<option> $bone</option>";
    }
}

if($data=="Bihar"){
    foreach($c as $cone){
        echo "<option> $cone</option>";
    }
}

if($data=="Bhopal"){
    foreach($d as $done){
        echo "<option> $done</option>";
    }
}
?>





















