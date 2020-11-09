<?php
require_once ("config.php");

$sql = "select * from sms";
$result = $con->query($sql);

$input = filter_input_array(INPUT_POST);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc() )
    {




        if($input["action"]==="edit")
        {
            $sql = "update sms"." set name = '" .$input["Name"]."', eng ='". $input["English"]."', hindi ='". $input["Hindi"]."', hist ='".$input["History"]."', status = 1 where id = '".$input["ID"]."'";
            $result = $con->query($sql);


        }
        if($input["action"]==="delete")
        {
            $sql = "update sms "." set status = 0 where id = '" .$input["ID"]. "'";
            $result = $con->query($sql);
        }
        if($input["action"]==="restore")
        {
            $sql = "update sms "." set status = 1 where id = '" .$input["ID"]. "'";
            $result = $con->query($sql);
        }


        echo json_encode($input);
    }
}
else{
    echo "0 results";
}