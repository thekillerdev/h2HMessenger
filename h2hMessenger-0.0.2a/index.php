<?php

include('function.php');

html_header();

$_SESSION['s_sent_user_pass'] = "Info passed";

?>
		<div class="sixteen columns">
			<hr />
		</div>
		<div class="one-third column">
&nbsp;
		</div>
		<div class="one-third column">

<form method="POST" action="login.php">
Email Address: <input type="text" size="30" name="username" value=""><br />
Password: <input type="password" name="password" value=""><br />
<input type="submit" name="submit" value="Login">
</form>

<b>Register for an account <a href="register.php">here</a>

<?php

html_footer();

?>
