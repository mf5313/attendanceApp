<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/sidebar.css">
    <style>
        .nav-tabs .nav-link {
            background-color: #563d7c;
            color: white;
            border: 1px solid transparent;
        }

        /* Styling for active tab */
        .nav-tabs .nav-link.active {
            background-color: #fff;
            color: #563d7c;
            border-color: #563d7c #563d7c #fff;
            font-weight: bold;
        }

        /* Hover state for inactive tabs */
        .nav-tabs .nav-link:hover {
            background-color: #6f5499;
            color: #fff;
        }

        /* Optional: Padding around the tabs for better spacing */
        .nav-tabs {
            margin-bottom: 1rem;
            margin-top: 1rem;
        }

        #main-content {
            height: 100%;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include "logcheck.php";
    include "header.php";
    ?>

    <!-- main content statrts from here -->
    <div class="container-fluid m-0">
        <div class="row">
            <div class="col-md-2 p-0 m-0">
                <div class="sidebar" id="tabs">
                    <a class="active" href="student.php" id="page1">Add Student</a>
                    <!-- href is require because link color changed -->
                    <a id="page2" href="#">View Student</a>

                </div>
            </div>
            <div class="col-md-10 p-0 m-0" id="main-content">
                <!-- TABS  -->
                <div id="addform" style="background-color:smog;">

                    <fieldset class="p-3">
                        <div id="showmsg"></div>

                        <legend>Add Student</legend>

                        <label for="regno" class="form-label">Registration Number</label>
                        <input type="text" class="form-control" id="regno" name="regno" autocomplete="off" required>

                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>

                        <label for="sem" class="form-label">Semester</label>
                        <input type="text" class="form-control" id="sem" name="sem" required>

                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>

                        <label for="endate" class="form-label">Enrollment Date</label>
                        <input type="date" class="form-control" id="endate" name="endate" required>

                        <button type="submit" id="subbtn"
                            class="btn btn-outline-primary align-content-center mt-2">Add</button>
                        <button type="reset" class="btn btn-outline-secondary align-content-center mt-2">Reset</button>
                    </fieldset>

                </div>
                <!-- TABS ENDS -->

            </div>
        </div>
    </div>

    <?Php require_once "footer.php" ?>
</body>

</html>

<!-- jquery including -->

<script src="./jquery/jquery-3.7.1.js"></script>

<script rel="text/javascript">
    $(document).ready(function () {

        $("#page1").on("click", function (e) {
            $("#page1").addClass("active");
            $("#page2").removeClass("active");
        })
        //LOADTABLE
        function loadPage2() {
            $("#page2").addClass("active");
            $("#page1").removeClass("active");
            $.ajax({
                url: "view_student_ajax.php",
                method: "POST",
                success: function (data) {
                    $("#main-content").html(data);
                }
            });
        }

        //add data studetn
        $("#subbtn").on("click", function (e) {

            e.preventDefault();
            var regno = $("#regno").val();
            var name = $("#name").val();
            var sem = $("#sem").val();
            var email = $("#email").val();
            var endate = $("#endate").val();

            $.ajax({
                url: "add_student_ajax.php",
                method: 'POST',
                data: { regno: regno, name: name, sem: sem, email: email, endate: endate },
                success: function (data) {
                    $("#showmsg").html(data);
                }
            });
        })

        //view data student
        $("#page2").on("click", function (e) {
           
            e.preventDefault();
            loadPage2();
        })
        //on click edit
        $(document).on('click', '.edit-btn', function (e) {
            var s_id = $(this).data("eid");

            $.ajax({
                url: 'edit_student_ajax.php',
                method: 'POST',
                data: { id: s_id },
                success: function (data) {
                    $("#main-content").html(data);
                }
            });
        });
            // on save edit
            $(document).on('click', '#esubbtn', function (e) {
            e.preventDefault();
            var id = $("#id").val();
            var name=$("#ename").val();
            var regno=$("#eregno").val();
            var sem=$("#esem").val();
            var email=$("#eemail").val();
            var endate=$("#eendate").val();

            $.ajax({
                url: 'update_edit_student_ajax.php',
                method: 'POST',
                data: {id:id,name:name,regno:regno,sem:sem,email:email,endate:endate},
                success: function (data) {
                    loadPage2();  

                }
            });
        });
    })

</script>