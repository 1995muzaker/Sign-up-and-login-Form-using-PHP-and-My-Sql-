<?php
	include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="firstname" required="">
			<input type="text" name="last" placeholder="Lastname" required="">
			<input type="text" name="email" placeholder="E-mail" required="">
			<input type="text" name="uid" placeholder="Username" required="">
			<input type="text" name="pwd" placeholder="Password" required="">
			<button type="submit" name="submit">Signup</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
