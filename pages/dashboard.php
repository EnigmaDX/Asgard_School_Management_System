<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard-Asgardian Nursery School</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link rel="stylesheet" media="all" href="../css/style.css">
        <!--<link rel="stylesheet" media="all" href="../css/dashboard.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <?php require_once '../layout/menu.php'; ?>
    <body>


        <div class="divider"></div>

        <div id="wrapper">
            <div>
                <nav class="nav-sidebar left">
                    <ul>
                        <li><a id="profile" onclick="parentProfileURL()" >PROFILE</a></li>
                        <li><a id="ward" onclick="wardURL()" >WARD (S)</a></li>
                        <li><a id="financial" onclick="financialURL()" >FINANCIAL</a></li>
                        <li><a id="teacher" onclick="teacherURL()" >TEACHER</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-content right">
                <iframe id="frame" src="pdash/profile.php"></iframe>
            </div>
        </div>


        <div id="fancy">
            <h2>Request information</h2>
            <form action="#">
                <div class="left">
                    <fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
                    <fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
                    <fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
                </div>
                <div class="right">
                    <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
                </div>
                <div class="btn-holder">
                    <button class="btn blue" type="submit">Send request</button>
                </div>
            </form>
        </div>

        <!-- /#wrapper -->
        <script src="../js/sidebar.js"></script>
        <script src="../js/dashboard.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
