<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/sidebar.css">
    <style>
    </style>
</head>

<body>
    <?php
    session_start();
    include "logcheck.php";
    include "header.php";
    ?>

    <!-- main content statrts from here -->

    <div class="container-fluid">
        <div class="row" Id="select_area">
            <div class="col-md-2 p-0">
                <div class="sidebar" id="tabs">
                    <a class="active" href="faculty.php" id="page1">Add Faculty</a>
                    <a id="page2" href="">View Faculty</a>

                </div>
            </div>
            <div class="col-md-10 p-0" id="main-content">
                <!-- add faculty form design -->
                <form id="addform" style="background-color:smog;">

                    <fieldset class="p-3" >

                        <div id="showmsg" >

                        </div>
                        <legend>Add Faculty</legend>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>


                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="username" name="username" required>

                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" required>


                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>



                        <div class="col mt-4">
                            <button type="submit" id="subbtn"
                                class="btn btn-outline-primary align-content-center">Add</button>
                            <button type="reset" class="btn btn-outline-secondary align-content-center">Reset</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>

    <?Php require_once "footer.php" ?>






    <!-- jquery including -->

    <script src="./jquery/jquery-3.7.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {


            
            // click on add faculty
            $("#page1").on("click", function (e) {
            // code for link active settings
            $("#page2").removeClass();
            $("#page1").addClass("active");
        });

            //definin pag2 fun
            function loadPage2() {
            $("#page1").removeClass();
            $("#page2").addClass("active");
            $.ajax({
                url: "load_page2_ajax.php",
                method: "POST",
                success: function (data) {
                    $("#main-content").html(data);
                }
            });
        }


            //click on view faculty
            $("#page2").on("click", function (e) {
            e.preventDefault();
            loadPage2();  
        });

            // add form
            $("#subbtn").on('click', function (e) {
            e.preventDefault();
            var name = $("#name").val();
            var username = $("#username").val();
            var pass = $("#pass").val();
            var email = $("#email").val();

            $.ajax({
                url: 'add_faculty_ajax.php',
                method: 'POST',
                data: { name: name, username: username, pass: pass, email: email },
                success: function (data) {
                    $("#showmsg").html(data);
                    
                }
            });
        });

            // on click edit
            $(document).on('click', '.edit-btn', function (e) {
            var f_id = $(this).data("eid");

            $.ajax({
                url: 'edit_faculty_ajax.php',
                method: 'POST',
                data: { id: f_id },
                success: function (data) {
                    $("#main-content").html(data);
                }
            });
        });

            // on save edit
            $(document).on('click', '#esubbtn', function (e) {
            e.preventDefault();
            var id = $("#id").val();
            var name = $("#ename").val();
            var username = $("#eusername").val();
            var pass = $("#epass").val();
            var email = $("#eemail").val();

            $.ajax({
                url: 'update_edit_faculty_ajax.php',
                method: 'POST',
                data: { id: id, name: name, username: username, pass: pass, email: email },
                success: function (data) {
                    loadPage2();  

                }
            });
        });
        // delete
        $(document).on('click','.delete-btn',function(){
                var id=$(this).data("did");
                var conf=confirm("Press a button!");
                if(conf==true)
                {
                $.ajax({
                    url:'delete_faculty_ajax.php',
                    method:'POST',
                    data:{id:id},
                    success:function(data){
                        loadPage2();
                    }
                })
            }
        })
        })

    </script>
</body>

</html>