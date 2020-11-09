<?php

require_once ("config.php");

    $stmt = $con->prepare("insert into sms (name, cls, eng, hindi, hist, status) values(?,?,?,?,?,?) ");
    $stmt->bind_param("ssssss", $name, $cls, $eng, $hindi, $hist, $status);

    $name = "Ramesh Jadhav";
    $cls = "8";
    $eng = 78;
    $hindi = 85;
    $hist = 98;
    $status = 1;
    $stmt->execute();

    $name = "Suresh Panday";
    $cls = "6";
    $eng = 68;
    $hindi = 88;
    $hist = 92;
    $status = 1;
    $stmt->execute();

    $name = "Anil Sen";
    $cls = "9";
    $eng = 87;
    $hindi = 77;
    $hist = 89;
    $status = 1;
    $stmt->execute();

    $name = "Rameez Khan";
    $cls = "10";
    $eng = 76;
    $hindi = 66;
    $hist = 65;
    $status = 1;
    $stmt->execute();

    $name = "Shazia Ansari";
    $cls = "8";
    $eng = 71;
    $hindi = 94;
    $hist = 62;
    $status = 1;
    $stmt->execute();

    $name = "Palavi Joshi";
    $cls = "9";
    $eng = 70;
    $hindi = 60;
    $hist = 72;
    $status = 1;
    $stmt->execute();

    if ($stmt !== false) {
        echo "Database updated";

        $stmt->close();
        $con->close();
    } else {
        echo "Error :" . mysqli_errno($con->error_list);
        $stmt->close();
        $con->close();
    }
