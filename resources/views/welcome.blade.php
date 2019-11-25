<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway+Dots" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
  <body>
    <div class="container-fluid">
      <div class="row nav">
    		<div class="col-md-4">
          <img class="logo" src="img/logo.png">
        </div>
    		<div class="col-md-8">
    			<ul class="nav">
    				<li class="nav-item">
    					<a class="nav-link active" href="#">Home</a>
    				</li>
    				<li class="nav-item">
    					<a class="nav-link" href="#">About us</a>
    				</li>
    				<li class="nav-item">
    					<a class="nav-link" href="#">Contact information</a>
    				</li>
    				<li class="nav-item dropdown ml-md-auto">
    					 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Translate</a>
    					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Basque</a>
                <a class="dropdown-item" href="#">Spanish</a>
                <a class="dropdown-item" href="#">English</a>
    					</div>
    				</li>
    			</ul>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12">
    			<div class="page-header">
    				<h1>
    					LayoutIt! <small>Interface Builder for Bootstrap</small>
    				</h1>
    			</div>
    			<h2>
    				Heading
    			</h2>
    			<p>
    				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
    			</p>
    			<form role="form" action="{{route('sendMessage')}}" method="post">
    				<div class="form-group">

    					<label for="name">
    						Name
    					</label>
    					<input type="text" class="form-control" id="name">
    				</div>
    				<div class="form-group">

    					<label for="email">
    						Email address
    					</label>
    					<input type="email" class="form-control" id="email">
    				</div>
    				<div class="form-group">

    					<label for="message">
    						Message
    					</label>
    					<textarea class="form-control" id="message"></textarea>
    				</div>
    				<button type="submit" class="btn submit">
    					Send message
    				</button>
    			</form>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12">
    		</div>
    	</div>
    </div>
    <footer class="redesSociales">
        <ul>
          <li>
            <div class="facebook">
              <a href="https://facebook.com/colorlib/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </div>
            <span>Facebook</span>
          </li>
          <li>
            <div class="twitter">
              <a href="https://twitter.com/colorlib/">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </div>
            <span>Twitter</span>
          </li>
          <li>
            <div class="youtube">
              <a href="https://www.youtube.com/c/Colorlib">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
            </div>
            <span>YouTube</span>
          </li>
          <li>
            <div class="linkedin">
              <a href="https://www.linkedin.com/company/colorlib">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </div>
            <span>LinkedIn</span>
          </li>
          <li>
            <div class="instagram">
              <a href="https://www.linkedin.com/company/colorlib">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
            <span>Instagram</span>
          </li>
          <li>
            <div class="github">
              <a href="https://github.com/puikinsh/">
                <i class="fa fa-github" aria-hidden="true"></i>
              </a>
            </div>
            <span>Github</span>
          </li>
        </ul>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
