<?php require 'process.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Text Formate</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<hr>
	

	<div class="container">
		<div class="form-group">
		    <label>Text</label>
		    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		    <textarea class="form-control" id="text" name="text" rows="3" required><?php echo $text; ?></textarea>
		    <p style="color: red;"><?php echo $error; ?></p>
		    <hr>
		    <div class="row">
			    <div class="form-group col-6">
				    <label>Enter Password</label>
				    <input type="text" name="password" class="form-control" required>
		    		<p style="color: red;"><?php echo $error_pas; ?></p>
				</div>

			    <div class="form-group col-6">
				    <label>Select Type</label>
				    <select class="form-control" name="select">
				      <option>Encrypt</option>
				      <option>Decrypt</option>
				    </select>
				 </div>
			 </div>
		    <input type="submit" name="submit" value="Generate" class="btn btn-primary">
		    </form>
		</div>
	</div>

	<div class="container">
		<label>Result: </label>
		<h3 id="show"><?php echo htmlspecialchars($new_text); ?></h3>
	</div>


</body>
</html>