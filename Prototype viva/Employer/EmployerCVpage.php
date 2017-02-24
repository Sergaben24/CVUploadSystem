<!DOCTYPE html>
<html style="position: relative; min-height: 100%;">
    <head>
        <meta name="viewport" content="width=device-width"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <link type="text/css" rel="stylesheet" href="../Cssstyles/optimisedMainPage.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <title>Logout Page</title>
    </head>
    <body style="margin: 0 0 120px;">

        <!--	<a class="navbar-brand">-->
        <nav class="navbar navbar-default" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                        <!--<span class="sr-only">Toggle navigation</span>-->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="containerImg"><a class="navbar-brand" href="#"><img id="logoImage" src="../CssStyles/images/KingstonLogo.png" ></a></div>
                </div>
                <div id="myNavbar" class="collapse navbar-collapse ">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.php">Logout</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact US</a></li>
                    </ul>
                </div><!--/.nav-collapse -->

            </div>

        </nav>

        <div class="container-fluid">
            <div class="container-fluid" id="mainTitle">
                <h1 id="Title">Welcome {Employer Name}</h1>
            </div>
            <div class ="container-fluid">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" ></div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" id="categoryColumn">
                        <div class ="container-fluid">
                            <h2 id="categoriesTitle"> Categories</h2>
                            <div class = "panel-group">
                                <div class ="panel panel default">
                                    <!--	<th colspan="3">Categories</th>-->
                                    <div class="panel-body">
                                        <div >
                                            <button type="button" class="btn btn-default btn-block">Computer Science</button>
                                            <!--<p>Category Name<span class></span>!</p>-->
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div >
                                            <button type="button" class="btn btn-default btn-block">Computer Science(Network Communications)</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div >
                                            <button type="button" class="btn btn-default btn-block">Software Engineering</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div >
                                            <button type="button" class="btn btn-default btn-block">Electrical Engineering</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div >
                                            <button type="button" class="btn btn-default btn-block">Mechanical Engineering</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div >
                                            <button type="button" class="btn btn-default btn-block">Information Systems</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div >
                                            <button type="button" class="btn btn-default btn-block">Computer Science(With Buisness Studies)</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div >
                                            <button type="button" class="btn btn-default btn-block">Computer Science(Games and Development)</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div >
                                            <button type="button" class="btn btn-default btn-block">Category Name</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="viewColumn">
                        <div class ="container-fluid" >
                            <h2 id="viewTitle"> View CV</h2>
                            <div class = "panel-group">
                                <div class ="panel panel default" id="viewCenterPanel">
                                    <!--	<th colspan="3">View CVs</th>-->
                                    <div class="panel-body viewCV">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique fugiat possimus, distinctio cumque, hic odio laborum eum delectus odit illo aspernatur? Alias provident ab animi dolores ea accusamus, molestiae perspiciatis.</p>
                                        <div>
                                            <a href="EmployerViewCV.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
                                        </div>
                                    </div>
                                    <div class="panel-body viewCV">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus modi delectus error! Expedita optio veritatis, sunt, consectetur quasi officia, fugiat obcaecati necessitatibus natus repudiandae vitae pariatur soluta adipisci. Itaque, ipsam!</p>
                                        <div>
                                            <a href="EmployerViewCV.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
                                        </div>
                                    </div>
                                    <div class="panel-body viewCV">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto similique reprehenderit, iste sint animi veniam praesentium sit officia magni eaque non assumenda perspiciatis ex accusantium, numquam maiores excepturi nesciunt neque.</p>
                                        <div>
                                            <a href="EmployerViewCV.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" ></div>
                </div>
            </div> 

        </div>
        <footer class="footer">
            <h2 id="FooterTitle">Copyright(c) Group 4</h2>     
        </footer>     

    </body>
</html>