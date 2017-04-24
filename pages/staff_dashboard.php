<html>
    <head>
        <meta charset="utf-8">
        <title>Staff-Asgardian Nursery School</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link rel="stylesheet" media="all" href="../css/style.css">
        <!--<link rel="stylesheet" media="all" href="../css/dashboard.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

    <?php require_once('../layout/menu.php'); ?>
    <body>
        <div class="divider"></div>
        <h2 id="stlist" align="center">
                <?php 
                session_start();
                $myuser = $_SESSION['uname'];
                echo "<strong style='color:white;'>USER: ".$myuser."</strong>"; 
                ?>
            </h2>
        
        <div id="wrapper">
            <div>
                <nav class="nav-sidebar left">
                    <ul>
                        <li><a href="https://www.google.com" id="profile">PROFILE</a></li>
                        <li><a href="https://www.google.com" id="classinfo">CLASS INFO</a></li>
                        <li><a id="students" onclick="studentsURL()">STUDENTS</a></li>
                        <li><a href="https://www.google.com" id="instructors">REGISTER STUDENT</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-content right">
                <iframe id="frame" src="view_students.php"></iframe>
            </div>
        </div>

        <!-- /#wrapper -->
        <script src="../js/dashboard.js"></script>
        <script src="../js/ajax.js"></script>
        <script src="../js/sidebar.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>