<!DOCTYPE html>
<html>
    <head>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    </head>
    <body>
        <div class="container-fluid" id="containerFluid">
            <!--	<a class="navbar-brand">-->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <!--
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Action</a></li>
<li><a href="#">Another action</a></li>
<li><a href="#">Something else here</a></li>
<li role="separator" class="divider"></li>
<li class="dropdown-header">Nav header</li>
<li><a href="#">Separated link</a></li>
<li><a href="#">One more separated link</a></li>
</ul>
</li>
-->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../navbar/">Contact Us</a></li>
                            <li class="active"><a href="./">About Us<span class="sr-only">(current)</span></a></li>
                            <li><a href="index.php">Logout</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <div class="row">
            <div class=".col-xs-12 .col-sm-6 .col-md-8">
                <div class="page-header">
                    <h1>Your CV Space </h1>
                </div>
            </div>
        </div>


        <div id="username">
            <div id="button">
                <button type="button" class="btn btn-success btn-block">User Name</button>
            </div>
        </div>
        <div class="list-group">
            <button type="button" class="list-group-item">CV Space</button>
            <button type="button" class="list-group-item">CV Display</button>
            <button type="button" class="list-group-item">Feedback Comments</button>
        </div>


        <ul class="tab">
            <li><a href="javascript:void(0)" class="tablinks" onclick="openMe(event, 'CV Space')" id="defaultOpen">CV Space</a></li>
        </ul>
        <ul class="tab">
            <li><a href="javascript:void(0)" class="tablinks" onclick="openMe(event, 'CV Display')">CV Display</a></li>
        </ul>
        <ul class="tab">
            <li><a href="javascript:void(0)" class="tablinks" onclick="openMe(event, 'FeedBack Comments')">FeedBack Comments</a></li>
        </ul>

        <div id="CV Space" class="tabcontent">
            <h3></h3>
            <p></p>
        </div>

        <div id="CV Display" class="tabcontent">
            <h3></h3>
            <p></p>
        </div>

        <div id="FeedBack Comments" class="tabcontent">
            <h3></h3>
            <p></p>
        </div>


        <script>
            function openMe(evt, tName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
    </body>
</html>