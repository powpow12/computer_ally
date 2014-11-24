<?php
$attributes = array(
		'role'          => 'form'
);
$email = array(
        'name'          => 'username',
        'id'            => 'inputEmail3',
		'class'			=> 'form-control',
        'value'         => '',
        //'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Email'

);

$password = array(
        'name'          => 'password',
        'id'            => 'inputPassword3',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Password'

);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Computer Ally App</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/css/starter-template.css");?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url("assets/js/ie8-responsive-file-warning.js");?>"></script><![endif]-->
    <script src="<?php echo base_url("assets/js/ie-emulation-modes-warning.js");?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!---<div class="starter-template">-->
      <div class="row">
        <div class="col-lg-12">
            <h1>Computer Ally App</h1>
            <p class="lead">Please log in.</p>
        </div>
      </div>
      
      
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
        <?php echo form_open('verifylogin', $attributes);?>
        <div class="form-group">
        	<label for="inputEmail3" >Email</label>          
        	<?php echo form_input($email);?>
       		
        </div>
       
        <div class="form-group">
        	<label for="inputPassword3">Password</label>
			<?php echo form_password($password);?>	
       </div>
        
        <div class="form-group">
        	<div class="col-sm-offset-2 col-sm-10">
		        <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                </div>
        	</div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            	<button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
        </form>
        </div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url("assets/js/ie10-viewport-bug-workaround.js");?>"></script>
  </body>
</html>
