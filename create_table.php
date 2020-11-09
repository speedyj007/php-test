<?php
require_once ("config.php");

$sql= "CREATE TABLE IF NOT EXISTS sms(id int(100) unsigned primary key auto_increment not null, name varchar(250) not null, cls varchar (250) not null, eng int(100) not null, hindi int(100) not null, hist int(100) not null,status int(100) not null )";

if(mysqli_query($con,$sql)) {

require_once ("insert_record.php");
}
