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

