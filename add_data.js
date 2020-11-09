$(document).ready(function () {
    $("#form1").on("submit",function (event) {

            event.preventDefault();


            var student_name = $("#name").val().trim();
            var cls = $("#cls").val().trim();
            var marks = $("#eng_marks").val().trim();
            var h_marks = $("#h_marks").val().trim();
            var hist_marks = $("#hist_marks").val().trim();



            var td1 = student_name;
            var td2 = cls;
            var td3 = marks;
            var td4 = h_marks;
            var td5 = hist_marks;

            var _tr = "<td><td>"+td1+"</td><td>"+td2+"</td><td>"+td3+"</td><td>"+td4+"</td><td>"+td5+"</td></tr>";

            $("#student_data").append(_tr);


            $.ajax({

                url: "add_data.php",
                method: "POST",

                data:
                    {
                        postName: student_name,
                        postcls: cls,
                        postMarks: marks,
                        posth_marks: h_marks,
                        postHist: hist_marks
                    },
                success: function (data) {

                    console.log(data);
                }


            });

        });

});