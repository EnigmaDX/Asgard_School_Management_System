<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>AsgardSchool</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link rel="stylesheet" media="all" href="../css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        require_once '../controller/define.php';

        require_once dirname(__FILE__) . '/../layout/menu.php';
        ?>


        <div class="divider"></div>

    <center>
        <div class="panel col-md-6 col-md-offset-3">
            <div class="panel-heading col-md-6 col-md-offset-3">
                <h3>Parent/Staff Login</h3>
            </div>
            <div class="col-md-6 col-md-offset-3 panel-body">
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="id" type="text" class="form-control" name="Id" placeholder="ID">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <br>
                    <!-- <div class="input-group"> -->
                    <a href="childinfo.html"><button type="button" class="btn btn-primary btn-block">Login</button></a>
                    <!-- </div> -->
                </form>
            </div>
            <div class="panel-footer col-md-6 col-md-offset-3">
                <a href="#">Forgot Password?</a>
            </div>
        </div>

    </center>
    <footer id="footer">
        <div class="container">
            <section>
                <article class="col-1">
                    <h3>Contact</h3>
                    <ul>
                        <li class="address"><a href="#">CT 3433<br>Cantonments, Accra</a></li>
                        <li class="mail"><a href="https://asgardnursery.wordpress.com/">sentinels@gmail.com</a></li>
                        <li class="phone last"><a href="#">(971) 536 845 924</a></li>
                    </ul>
                </article>

                <article class="col-2">
                    <h3>Social media</h3>
                    <p>Contact us through the following media.</p>
                    <ul>
                        <li class="facebook"><a href="#">Facebook</a></li>
                        <li class="google-plus"><a href="#">Google+</a></li>
                        <li class="twitter"><a href="#">Twitter</a></li>
                        <li class="pinterest"><a href="#">Pinterest</a></li>
                    </ul>
                </article>

                <article class="col-4">
                    <h3>Newsletter</h3>
                    <p>Subscribe if you want to receive letters from us.</p>
                    <form action="#">
                        <input placeholder="Email address..." type="text">
                        <button type="submit">Subscribe</button>
                    </form>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </article>
            </section>
            <p class="copy">Copyright 2017 Asgardian Nursery School. Created by <a href="https://asgardnursery.wordpress.com/" title="Designed by The Sentinels" target="_blank">The Sentinels</a>. All rights reserved.</p>
        </div>
        <!-- / container -->

        <div id="fancy">
            <h2>Login</h2>
            <form action="#">
                <div class="left">
                    <fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
                    <fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
                    <!--<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>-->
                </div>
                <div class="right">
                    <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
                </div>
                <div class="btn-holder">
                    <button class="btn blue" type="submit">Send request</button>
                </div>
            </form>
        </div>
    </footer>
    <!-- / footer -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
