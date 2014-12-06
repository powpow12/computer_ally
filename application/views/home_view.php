<?php
//business form elements - begin
$attributes = array(
		'role'          => 'form'
);
$business_name = array(
        'name'          => 'business',
        'id'            => 'business',
		'class'			=> 'form-control',
        'value'         => '',
        //'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Name of Business'

);

$business_address = array(
        'name'          => 'business_street',
        'id'            => 'business_street',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Street Address'

);

$business_unit = array(
        'name'          => 'business_unit',
        'id'            => 'business_unit',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Unit #'

);

$business_city = array(
        'name'          => 'business_city',
        'id'            => 'business_city',
		'class'			=> 'form-control',
        'value'         => '',
        //'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'City'

);

$business_state = array(
        'name'          => 'business_state',
        'id'            => 'business_state',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'State'

);

$business_zip = array(
        'name'          => 'business_zip',
        'id'            => 'business_zip',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Zip code'

);

$poc_fname = array(
        'name'          => 'poc_fname',
        'id'            => 'poc_fname',
		'class'			=> 'form-control',
        'value'         => '',
        //'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'First Name'

);

$poc_lname = array(
        'name'          => 'poc_lname',
        'id'            => 'poc_lname',
		'class'			=> 'form-control',
        'value'         => '',
        //'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Last Name'

);

$poc_phone= array(
        'name'          => 'poc_phone',
        'id'            => 'poc_phone',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Phone'

);

$poc_ext = array(
        'name'          => 'poc_ext',
        'id'            => 'poc_ext',
		'class'			=> 'form-control',
        'value'         => '',
        //'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Extension'

);

$poc_phone2= array(
        'name'          => 'poc_phone2',
        'id'            => 'poc_phone2',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Phone #'

);

$poc_ext2 = array(
        'name'          => 'poc_ext2',
        'id'            => 'poc_ext2',
		'class'			=> 'form-control',
        'value'         => '',
        //'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Extension'

);
$poc_email= array(
        'name'          => 'poc_email',
        'id'            => 'poc_email',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Email'

);

$poc_email2= array(
        'name'          => 'poc_email2',
        'id'            => 'poc_email2',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Email'

);


// business form elements - end

//hardware form elements - begin

$business_options = array(
		'default' => 'Please select',
		'1' => 'Computer Ally',
		'2' => 'Global Ed',
		'3' => 'YMCA'
		);

$hardware_options = array(
		'default' => 'Please select',
		'computer' => 'Computer',
		'server' => 'Server',
		'network' => 'Network',
   		'printer' => 'Printer',
		'monitor' => 'Monitor'
		);

$hardware_make = array(
 		'name'          => 'hardware_make',
        'id'            => 'hardware_make',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Make'					
		);

$hardware_model = array(
 		'name'          => 'hardware_model',
        'id'            => 'hardware_model',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Model'					
		);

$hardware_serial = array(
 		'name'          => 'hardware_serial',
        'id'            => 'hardware_serial',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Serial #'					
		);

$hardware_location = array(
 		'name'          => 'hardware_location',
        'id'            => 'hardware_location',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Office #'					
		);

$software_os = array(
 		'name'          => 'software_os',
        'id'            => 'software_os',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Operating Software'					
		);

$software = array(
 		'name'          => 'software',
        'id'            => 'software',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Special Software Added'					
		);

$login = array(
 		'name'          => 'login',
        'id'            => 'login',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Login'					
		);

$password = array(
 		'name'          => 'password',
        'id'            => 'password',
		'class'			=> 'form-control',
        'value'         => '',
       // 'maxlength'     => '100',
        'size'          => '50',
		'placeholder'   => 'Password'					
		);

$hardware_notes = array(
 		'name'          => 'hardware_notes',
        'id'            => 'hardware_notes',
		'class'			=> 'form-control',
        'row'         => '20',
        'cols'          => '50',
		'placeholder'   => 'Notes...'					
		);

//hardware form elements - end


//website form elements - begin

$default_options= array(
		'default' => 'Please select',
		'0' => 'No',
		'1' => 'Yes'
		);

$web_url = array(
 		'name'          => 'web_url',
        'id'            => 'web_url',
		'class'			=> 'form-control',
        'row'         => '20',
        'cols'          => '50',
		'placeholder'   => 'Domain Name'					
		);

$web_create_date = array(
 		'name'          => 'web_create_date',
        'id'            => 'web_create_date',
		'class'			=> 'form-control',
        'row'         => '20',
        'cols'          => '50',
		'placeholder'   => 'Created Date'					
		);

$cost = array(
 		'name'          => 'cost',
        'id'            => 'cost',
		'class'			=> 'form-control',
        'row'         => '20',
        'cols'          => '50',
		'placeholder'   => 'Cost to develop'					
		);

$charged = array(
 		'name'          => 'charged',
        'id'            => 'charged',
		'class'			=> 'form-control',
        'row'         => '20',
        'cols'          => '50',
		'placeholder'   => 'Amount Charged'					
		);

$ssl_cert = array(
 		'name'          => 'ssl_dt',
        'id'            => 'ssl_dt',
		'class'			=> 'form-control',
        'row'         => '20',
        'cols'          => '50',
		'placeholder'   => 'SSL Cert Date'					
		);

$hosting_charge = array(
 		'name'          => 'hosting_charge',
        'id'            => 'hosting_charge',
		'class'			=> 'form-control',
        'row'         => '20',
        'cols'          => '50',
		'placeholder'   => 'Charge for hosting'					
		);



//website form elements - end


?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
           <fieldset><legend>Add</legend>
            <ul class="nav nav-pills">
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#add_business">Business</a></li>
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#add_hardware">Hardware</a></li>
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#add_website">Website</a></li>
            </ul>
            </fieldset>
        </div>
      </div>
        
      <div class="row plus_ten">
        <div class="col-lg-12">
       <ul id="myTab" class="nav nav-tabs">
   		<li class="active"><a href="#business" data-toggle="tab">Business Dashboard</a></li>
        <li><a href="#hardware" data-toggle="tab">Hardware</a></li>
        <li><a href="#website_hosting" data-toggle="tab">Website & Hosting</a></li>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="search" placeholder="Search">
            </div>
        </form>
       </ul>
        <div class="tab-content">
          <div class="tab-pane fade in active" id="business">
          <!--- start business table -->
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                      <tr>
                        <td></td>
                        <td>Business Name</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Phone</td>
                        <td>Email</td>
                     </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>1</td>
                          <td><a href="#">Computer VIP</a></td>
                          <td>Bill</td>
                          <td>Ng</td>
                          <td>111-222-3333</td>
                          <td>bill@computervip.com</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td><a href="#">My Global Ed</a></td>
                          <td>John</td>
                          <td>Smith</td>
                          <td>111-222-3333</td>
                          <td>jsmith@gmail.com</td>
                      </tr>
                    </tbody>
                </table>
              </div>
          </div>
          <div class="tab-pane fade" id="hardware">
          <!--- start hardware table -->
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                      <tr>
                        <td></td>
                        <td>Business Name</td>
                        <td>Computer(s)</td>
                        <td>Monitor(s)</td>
                        <td>Network Device(s)</td>
                        <td>Printer(s)</td>
                     </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>1</td>
                          <td><a href="#">Computer VIP</a></td>
                          <td>20</td>
                          <td>20</td>
                          <td>3</td>
                          <td>2</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td><a href="#">My Global Ed</a></td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>0</td>
                      </tr>
                    </tbody>
                </table>
              </div>
          </div>
          <div class="tab-pane fade" id="website_hosting">
          <!--- start website table -->
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                      <tr>
                        <td></td>
                        <td>Business Name</td>
                        <td>Url#1</td>
                        <td>Url#2</td>
                        <td>Url#3</td>
                        <td>host fee</td>
                        <td>created date</td>
                        <td>cost</td>
                        <td>ssl cert type</td>
                        <td>ssl cert expiration</td>
                     </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>1</td>
                          <td><a href="#">Computer VIP</a></td>
                          <td>computervip.com</td>
                          <td>computervip.biz</td>
                          <td>computervip.net</td>
                          <td>$200</td>
                          <td>05/12/2010</td>
                          <td>$2000</td>
                          <td>premium</td>
                          <td>05/12/2015</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td><a href="#">My global ed</a></td>
                          <td>myglobaled.com</td>
                          <td>myglobaled.biz</td>
                          <td>myglobaled.net</td>
                          <td>$200</td>
                          <td>05/12/2010</td>
                          <td>$2000</td>
                          <td>premium</td>
                          <td>05/12/2015</td>
                      </tr>
                    </tbody>
                </table>
              </div>
          </div>
        </div>
        </div>
    </div>
</div>
<!-- modal forms-->
<!-- add business form--> 
<div class="modal fade" id="add_business" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Buiness</h4>
            </div>
            <div class="modal-body">
                <h3>Business</h3>
                       <?php echo form_open('add_business', $attributes);?>
                        <div class="form-group"><?php echo form_input($business_name);?></div>
                        <div class="form-group"><?php echo form_input($business_address);?></div>
                        <div class="form-group"><?php echo form_input($business_unit);?></div>
                        <div class="form-group"><?php echo form_input($business_city);?></div>
                        <div class="form-group"><?php echo form_input($business_state);?></div>
                        <div class="form-group"><?php echo form_input($business_zip);?></div>
				<h3>Point of Contact</h3>                        
                        <div class="form-group"><?php echo form_input($poc_fname);?></div>
                        <div class="form-group"><?php echo form_input($poc_lname);?></div>
                        <div class="form-group"><?php echo form_input($poc_phone);?></div>
                        <div class="form-group"><?php echo form_input($poc_ext);?></div>
                        <div class="form-group"><?php echo form_input($poc_phone2);?></div>
                        <div class="form-group"><?php echo form_input($poc_ext2);?></div>                                                
                        <div class="form-group"><?php echo form_input($poc_email);?></div>
                        <div class="form-group"><?php echo form_input($poc_email2);?></div>
                        
                        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
  </div>
</div>

<!-- add hardware form--> 
<div class="modal fade" id="add_hardware" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Hardware</h4>
            </div>
            <div class="modal-body">
                <h3>Hardware</h3>
                       <?php echo form_open('add_hardware', $attributes);?>
                        <div class="form-group"><label for='business_name'>Select Business</label>
						<?php echo form_dropdown('business_name', $business_options, 'default');?></div>
                        <div class="form-group"><label for='business_name'>Select Business</label>
						<?php echo form_dropdown('hardware', $hardware_options, 'default');?></div>
                        <div class="form-group"><?php echo form_input($hardware_make);?></div>
                        <div class="form-group"><?php echo form_input($hardware_model);?></div>
                        <div class="form-group"><?php echo form_input($hardware_serial);?></div>
                <h3>If applicable...</h3>         
                        <div class="form-group"><?php echo form_input($login);?></div>
                        <div class="form-group"><?php echo form_input($password);?></div>
                        <div class="form-group"><?php echo form_input($software_os);?></div>
                        <div class="form-group"><?php echo form_input($software);?></div>
                        <div class="form-group"><?php echo form_input($hardware_location);?></div>
                        <div class="form-group"><?php echo form_textarea($hardware_notes);?></div>
                        
                        
                        <!-- activate if need conditional form handlings 
                        <div class="form computer>
                          <div class="form-group"><?php echo form_input($business_unit);?></div>
                        </div>
                        <div class="form server">
                          <div class="form-group"><?php echo form_input($business_unit);?></div>
                        </div> 
                        <div class="form network">
                          <div class="form-group"><?php echo form_input($business_unit);?></div>
                        </div>
                        <div class="form printer">
                          <div class="form-group"><?php echo form_input($business_unit);?></div>
                        </div>                          
	                    <div class="form printer">
                          <div class="form-group"><?php echo form_input($business_unit);?></div>
                        </div>-->
                        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
  </div>
</div>


<!-- add website form--> 
<div class="modal fade" id="add_website" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Website</h4>
            </div>
            <div class="modal-body">
                <h3>Website</h3>
                        <?php echo form_open('add_website', $attributes);?>
                        <div class="form-group"><label for='business_name'>Select Business</label>
					    <?php echo form_dropdown('business_name', $business_options, 'default');?></div>
                        <div class="form-group"><?php echo form_input($web_url);?></div>
                        <div class="form-group"><?php echo form_input($web_create_date);?></div>
                        <div class="form-group"><?php echo form_input($cost);?></div>
                        <div class="form-group"><?php echo form_input($charged);?></div>
                <h3>If applicable...</h3>                        
                        <div class="form-group"><label for='ssl_purchased'>Purchased SSL?</label>
					    <?php echo form_dropdown('ssl_purchased', $default_options, 'default');?></div>
                        <div class="form-group"><?php echo form_input($ssl_cert);?></div>
                        <div class="form-group"><label for='domain'>Owner of domain?</label>
					    <?php echo form_dropdown('domain', $default_options, 'default');?></div>
                        <div class="form-group"><label for='vip_referred'>VIP referred?</label>
					    <?php echo form_dropdown('vip_referred', $default_options, 'default');?></div>
                        <div class="form-group"><label for='hosting'>Hosting?</label>
					    <?php echo form_dropdown('hosting', $default_options, 'default');?></div>
                        <div class="form-group"><?php echo form_input($hosting_charge);?></div>
                        <div class="form-group"><?php echo form_input($login);?></div>
                        <div class="form-group"><?php echo form_input($password);?></div>                                                
                      
                        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
  </div>
</div>


 