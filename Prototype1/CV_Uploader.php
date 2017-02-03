<!DOCTYPE html>
<html>
<head>
  <title>CV Uploader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="Stylesheet"  href="../Prototype1/CssStyles/Style_For_CV_Website.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
          function generate(l) {
        if (typeof l==='undefined'){var l=8;}
        /* c : alphanumeric character string */
        var c='abcdefghijknopqrstuvwxyzACDEFGHJKLMNPQRSTUVWXYZ12345679',
        n=c.length,
        /* p : special character string */
        p='!@#$+-*&_',
        o=p.length,
        r='',
        n=c.length,
        /* s : determinate the position of the special character */
        s=Math.floor(Math.random() * (p.length-1));

        for(var i=0; i<l; ++i){
            if(s == i){
                /* special charact insertion (random position s) */
                r += p.charAt(Math.floor(Math.random() * o));
            }else{
                /* alphanumeric insertion */
                r += c.charAt(Math.floor(Math.random() * n));
            }
        }
        return r;
      }
      var returnedValue = generate();


  </script>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" >CV Trial website</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="Your_profile.html">Your profile</a></li>
        <li class="active"><a href="#">CV uploader</a></li>
        <li><a href="#">CV feedback</a></li>
      </ul>
    </div>
  </nav>
  <div class="page-header">
      <div class="jumbotron">
        <h1>Upload your CV</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
        responsive, mobile-first projects on the web.</p>
      </div>

  </div>



    <form>
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
      </div>
      <div class="form-group">
        <label id="passwordGenerated"></label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>

      <button class="btn btn-default" onclick="getElementById('passwordGenerated').innerHTML=returnedValue">Submit</button>
    </form>


</body>



</html>
