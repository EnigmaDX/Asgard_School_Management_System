<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>AsgardianNurserySchool</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link rel="stylesheet" media="all" href="../css/childinfo.css">
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php require_once('../layout/menu.php'); ?>

        <div class="divider box">
            <div class="menu-trigg"></div><br>
            <nav id="menuq">
                <ul>
                    <li><a href="#profile">BIO</a></li>
                    <li><a href="#title-aca">ACADEMIC INFO</a></li>
                    <li><a href="#title-finance">FINANCIAL INFO</a></li>
                    <li><a href="#">HEALTH AND NUTRITIONAL INFO</a></li>
                </ul>
            </nav>
        </div>
        <br><br>

        <!-- / navigation -->
        <!-- / header -->
        <div class="bodym box">
            <!-- picture of child -->
            <div class="profile-pic">
                <img id="profile" src="../images/phold.png">
            </div>

            <div class="bio-details">
                <!-- put in bio details of child -->
                <table class="bio-table">
                    <tr>
                        <td>NAME:</td>
                        <td><label>ChildName</label></td>
                        <td>CITIZENSHIP:</td>
                        <td><label>citizenship</label></td>
                    </tr>
                    <tr>
                        <td>GENDER:</td>
                        <td><label>ChildGender</label></td>
                        <td>OTHER FACTS:</td>
                        <td><label>others</label></td>
                    </tr>
                    <tr>
                        <td>DATE OF BIRTH:</td>
                        <td><label>DOB</label></td>
                        <td>OTHER FACTS:</td>
                        <td><label>otheres</label></td>
                    </tr>
                </table>
            </div><br>

            <p id="title-aca">ACADEMIC INFO</p>

            <div class="academic-details">
                <!-- put in academic details of child -->
                <h4>CURRENT LEVEL: <strong>A</strong> </h4>
                <h4>NUMBER OF COURSES: <strong>5</strong></h4><br>
                <table class="academic-table">
                    <tr>
                        <th class="heading">COURSE</th>
                        <th class="heading">%GRADE</th>
                        <th class="heading">LETTER GRADE</th>
                    </tr>
                    <tr>
                        <td>Arts and Drawing</td>
                        <td>89</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Communication</td>
                        <td>55</td>
                        <td>C</td>
                    </tr>
                </table>
            </div><br>
            <p id="title-finance">FINANCIAL INFO</p>
            <div class="fchart" id="dchart" style="width: 100%; height: 500px;"></div>


        </div><br>
        <!-- end of bodym -->

        <footer id="footer" class="box">
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
                    <article class="col-3">
                        <h3>Social media</h3>
                        <p>You can follow us on social media</p>
                        <ul>
                            <li class="facebook"><a href="#">Facebook</a></li>
                            <li class="google-plus"><a href="#">Google+</a></li>
                            <li class="twitter"><a href="#">Twitter</a></li>
                            <li class="pinterest"><a href="#">Pinterest</a></li>
                        </ul>
                    </article>
                </section>
                <p class="copy">Copyright 2017 Asgardian Nursery School. Created by <a href="https://asgardnursery.wordpress.com/" title="Designed by The Sentinels" target="_blank">The Sentinels</a>. All rights reserved.</p>
            </div>
            <!-- / container -->
        </footer>
        <!-- / footer -->

        <div id="fancy">
            <h2>Request information</h2>
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

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>window.jQuery || document.write("<script src='../js/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src=".../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="../js/charts.js"></script>
    </body>
</html>
