    <!DOCTYPE html>
<html lang="en">
<head>
    <title>School Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cyborg/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/00a6cf42ac.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="scripts/jquery.tabledit.js"></script>





</head>

<body>
<div class="container-fluid">
    <br>

<h1 >School Management System</h1>
<hr class = "hr1">

<br>

    <form name="add_data" action="" method="post" id="form1">
        <h5>Fill the below to add data : -</h5>
        <table>

            <tr>
        <td class="f1"><label class="l1" name="Student_Name" >Student Name:</td>

            <td class="f1"><input type="text " class="l1 t1" placeholder="Enter Student's Name" required id="name">
                </label></td></tr>

            <tr>
       <td class="f1"> <label class="l1" name="class" >Enter Class:</td>

            <td class="f1"><input type="text " class="l1 t1" placeholder="Enter Class" required id="cls">
        </label></td></tr>

        <tr>
       <td class="f1"><label class="l1" name="eng" >English Marks:</td>
       <td class="f1"><input type="text " class="l1 t1" placeholder="English Marks" required id="eng_marks">
           </label></td></tr>

            <tr>
                <td class="f1"><label class="l1" name="hindi" >Hindi Marks:</td>


                <td class="f1"><input type="text " class="l1 t1" placeholder="Hindi Marks" required id="h_marks">
                    </label></td></tr>


            <tr>
                <td class="f1"><label class="l1" name="hist" >History Marks:</td>

            <td class="f1"><input type="text " class="l1 t1" placeholder="history Marks" required id="hist_marks">
        </label></td>
            </tr>

            <tr>
                <td class="f1"><button type="submit"  class="btn btn-primary btn-block " id="submit" name="submit" value="add">Add</td>

                <td class="f1"><button type="reset" id="rest" class="btn btn-warning btn-block" name="rest" value="rest">Clear</button> </td>
            </tr>



        </table>
    </form>

    <br><br>
    <table id ="table1" class="table table-hover" >
        <thead style="background: grey; font-family: Rockwell;letter-spacing: 1px;font-size: medium;">
            <tr>
                <th><span class="sub ">ID</span></th>
                <th><span class="sub ">Name</span></th>
                <th><span class="sub "> Class</span></th>
                <th><span class="sub "> English</span></th>
                <th><span class="sub "> Hindi</span></th>
                <th><span class="sub "> History</span></th>
                <th><span class="sub "> Results</span></th>

            </tr>




        </thead>

        <tbody id ="student_data">


               <?php
                        require_once("config.php");


                        $sql = "select * from sms";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {

               while($row = $result->fetch_assoc()) {

                   ?>

                      <?php
                      echo "<tr><td id='id_row'>".$row["id"].""
                   ."</td><td>".$row["name"]."</td><td class='std' id='cls'>".$row["cls"]."<td id='eng' class='std eng'>".$row["eng"]."</td><td class='std' id='hindi'>".
                          "".$row["hindi"]."".
                          "</td><td class='std' id='hist'>".$row["hist"]."</td>";

                        ?>
                      <td><?php
                          $res = $row["eng"] + $row["hindi"] + $row["hist"];
                          $total = 300;


                          if($res > ($total/2))
                          {
                              echo "Passed";
                          }
                          else{
                              echo "Failed";
                          }

                          ?></td>


               </tr>
            <?php

                    }
                    }
                ?>

        </tbody>
    </table>
    
</div>
<script src="add_data.js"></script>

<script>

    $(document).ready(function(){
        $("#table1").Tabledit({
            url : "logic_data.php",
            columns:{
                identifier: [0,"ID"],
                editable:  [[1, "Name"], [3, "English"], [4, "Hindi"], [5, "History"]]
            },


            onDraw:function(){
                console.log('onDraw()');

            },

            onSuccess: function(data, textStatus, jqXHR)
            {
                console.log("onSuccess(data, textStatus, jqXHR)");
                console.log(data);
                console.log(textStatus);
                console.log(jqXHR);
            },

            onFail: function(jqXHR, textStatus, errorThrown)
            {
                console.log("onFail(jqXHR, textStatus, errorThrown)");
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },

            onAlways: function()
            {
                console.log("onAlways()");
            },

            onAjax: function(action, serialize)
            {
                console.log(action);
                console.log(serialize);
            }

        });


    });



</script>
</body>
</html>