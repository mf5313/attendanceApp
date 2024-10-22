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
                    <a id="page2" href="">View Student</a>

                </div>
            </div>
            <div class="col-md-10 p-0 m-0">
                <!-- TABS  -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" id="add">ADD</a>
                    </li>
                    <class="nav-item">
                        <a class="nav-link" id="csv">ADD CSV</a>
                        </li>
                </ul>
                <!-- TABS ENDS -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col" id="main-content">
                           
                            <!-- container -->

                        </div>
                    </div>
                </div>
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
        // csv
        $("#csv").on("click", function (e) {
            $("#csv").addClass("active");
            $("#add").removeClass("active");

            e.preventDefault();
            $.ajax({
                url: "add_student_csv_ajax.php",
                method: 'POST',
                success: function (data) {
                    $("#main-content").html(data);
                }
            })
        })

        // add
        $("#add").on("click", function (e) {
            $("#add").addClass("active");
            $("#csv").removeClass("active");
            e.preventDefault();
            $.ajax({
                url: "add_student_tab_ajax.php",
                method: 'POST',
                success: function (data) {
                    $("#main-content").html(data);
                }
            })

        })

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
                data: {regno: regno, name: name, sem: sem, email: email, endate: endate},
                success: function (data) {
                    $("#main-content").html(data);
                }
            });
        })
    })

</script>