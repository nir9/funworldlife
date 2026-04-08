<?php $this->load->view("header.php", $title) ?>
		<div align="center">
		<?php echo form_open('login/submit'); ?>
		<img src='<?php print base_url(); ?>images/Login Main Image.png'>
		<fieldset>
		<br>
		<br>
			How do you login? first of all, if you don't have a user you need to create one. Click on register and fill in the details and remember the password and username.
			Afterwards, login with your username and password. Do not share your password. Afterwards click "Login". If there login issues, send an email to the website and
			we'll answer within 72 hours. If not, resend an email. Email address: <a href="mailto:admin@funworldlife.com">admin@funworldlife.com</a>
			Thanks.
<br><br><table style="background-image:url(../images/bgdown.png) ; width: 900;" align="center">
		Username: <?php echo form_input($username); ?><a href="forgot">
		Forgot username?</a><br>
		Password: <?php echo form_password($password); ?> <a href="forgot">
		Forgot password?</a>
		<br>
		<?php echo form_submit('submit', 'Login'); ?>
		<input type='reset' value='Clear form'>
		</table>
		<br><br>
		<br>
		</fieldset>
<?php echo form_close(); ?>
		<a href="register"><img src="<?php print base_url() ?>images/register_login.png"></a>
		</div>
				<br>
		<br>
		<?php include("footer.php") ?>
	</body>
</html>
