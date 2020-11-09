<?php
require_once ("config.php");

$name   = $_POST["postName"];
$cls    = $_POST["postcls"];
$eng    = $_POST["postMarks"];
$hindi  = $_POST["posth_marks"];
$hist   = $_POST["postHist"];
$status = 1;

$stmt = $con->prepare("insert into sms (name, cls, eng, hindi, hist, status) values(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $name,$cls, $eng, $hindi, $hist, $status );

if($stmt->execute()===true)
{
    echo "Success";
}
else{
    echo "error :".mysqli_error($con);
}