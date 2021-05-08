<?php 

	if(isset($_POST["submit"])){
		$email = htmlspecialchars($_POST["email"]);
		$title = htmlspecialchars($_POST["title"]);
		$ingredients = htmlspecialchars($_POST["ingredients"]);

		// check email
		if(empty($email)){
			echo "An email is required <br/>";
		} else {
			echo $email . "<br/>";
		}

		// check title
		if(empty($title)){
			echo "A title is required <br/>";
		} else{
			echo $title . "<br/>";
		}

		// check ingredients
		if(empty($ingredients)){
			echo "At least one ingredient is required <br/>";
		} else{
			echo $ingredients . "<br/>";
		}

	} // end POST check

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add an item</h4>
		<form action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email">
			<label>Pizza Title</label>
			<input type="text" name="title">
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>