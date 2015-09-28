<FORM method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name" value="<?php echo $name;?>">
	<span class="error">*<?php echo $nameErr;?></span><br>
	Email: <input type="text" name="Email" value="<?php echo $email;?>">
	<span class="error">*<?php echo $emailErr;?></span><br>
	Website: <input type="text" name="Website" value="<?php echo $website?>">
	<span class="error">*<?php echo $webErr?></span><br>
	Gender:
	<input type="radio" name="gender" <?php if(isset($gender)&&$gender=="Female") echo "checked";?>value="Female">Female
	<input type="radio" name="gender" <?php if(isset($gender)&&$gender="Male") echo "checked";?>value="Male">Male
	<span class="error">*<?php echo $genderErr;?></span><br>
	<input type="submit" name="submit" value="Submit">
</FORM>