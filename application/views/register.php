<div class="col-md-9 main">
<!-- register -->
	<div class="clearfix"> </div>
	<div class="clearfix"> </div>

	<div class="sign-up-form">
		<div class="sign-up">
				<?php echo form_open('user/register'); ?>
				 <h3 class="tittle reg">Personal Information <i class="glyphicon glyphicon-user"></i></h3>
				<div class="sign-u">
					<div class="sign-up1">
						<h4 class="a"><?php echo form_label('First Name', 'firstname'); ?>*:</h4>
					</div>
					<div class="sign-up2">
						<?php  echo form_error('firstname') ?>
						<?php echo form_input(array('name' => 'firstname', 'id' => 'firstname', 'maxlength' => 95, 'placeholder' => 'Enter your firstname', 'value' => set_value('firstname'), 'tabindex' => 1));
						 ?>

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4 class="a"><?php echo form_label('Last Name', 'lastname'); ?>*:</h4>

					</div>
					<div class="sign-up2">
						<?php  echo form_error('lastname') ?>
						<?php echo form_input(array('name' => 'lastname', 'id' => 'lastname', 'maxlength' => 95, 'placeholder' => 'Enter your lastname', 'value' => set_value('lastname'), 'tabindex' => 2)); ?>

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4 class="a"><?php echo form_label('Email Address', 'email'); ?>*:</h4>
					</div>
					<div class="sign-up2">
						<?php  echo form_error('email') ?>
						<?php echo form_input(array('name' => 'email', 'id' => 'email', 'maxlength' => 95, 'placeholder' => 'Enter your email', 'value' => set_value('email'), 'tabindex' => 3)); ?>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="sign-u">
					<div class="sign-up1">
						<h4 class="a"><?php echo form_label('Password', 'password'); ?>*:</h4>
					</div>
					<div class="sign-up2">
						<?php  echo form_error('password') ?>
						<?php echo form_password(array('name' => 'password', 'id' => 'password', 'maxlength' => 95, 'placeholder' => 'Enter your password', 'value' => set_value('password'), 'tabindex' => 4)); ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4 class="a"><?php echo form_label('Confirm Password', 'confirmpassword'); ?>*:</h4>
					</div>
					<div class="sign-up2">
						<?php  echo form_error('confirmpassword') ?>
						<?php echo form_password(array('name' => 'confirmpassword', 'id' => 'confirmpassword', 'maxlength' => 95, 'placeholder' => 'Confirm Password', 'value' => set_value('confirmpassword'), 'tabindex' => 5)); ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4 class="a"><?php echo form_label('Gender', 'gender'); ?>:*</h4>
					</div>
					<div class="sign-up2">
						<?php  echo form_error('gender') ?>
						<?php echo form_dropdown('gender', $gender, set_value('gender'), array('class' => "sign-up2", 'tabindex' => 6));  ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4 class="a"><?php echo form_label('Age', 'age'); ?>:</h4>
					</div>
					<div class="sign-up2">
						<?php  echo form_error('age') ?>
						<?php echo form_input(array('name' => 'age', 'id' => 'age', 'maxlength' => 3, 'placeholder' => 'Enter your age(Optional)', 'value' => set_value('age'), 'tabindex' => 7)); ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4 class="a"><?php echo form_label('City', 'city'); ?>:</h4>
					</div>
					<div class="sign-up2">
						<?php echo form_input(array('name' => 'city', 'id' => 'city', 'maxlength' => 95, 'placeholder' => 'Enter your city(Optional)', 'value' => set_value('city'), 'tabindex' => 8)); ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="sign-u">
					<div class="sign-up1">
						<h4 class="a"><?php echo form_label('Country', 'country'); ?>:</h4>
					</div>
					<div class="sign-up2">
						<?php echo form_input(array('name' => 'country', 'id' => 'country', 'maxlength' => 95, 'placeholder' => 'Enter your country(Optional)', 'value' => set_value('country'), 'tabindex' => 9)); ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php echo form_submit(array('name' => 'submit', 'value' => 'Register'));?>
			</div>
	<?php echo form_close(); ?>
		</div>
