
<!DOCTYPE html>
<html>
<head>
	<title>Add category</title>
	<?php require_once 'admin-head.php'; ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php 
			require_once '../db.php';
			require_once 'sidebar-top.php';
	?>
	
	<div class="container-fluid">
			<form action="addcategory.php" method="post">
				<label class="form-label">name</label>
				<input type="text" name="cname" class="form-control" required>
				<button type="submit" class="btn btn-primary mt-3">Add category</button>
            </form>	
	</div>

	<?php require_once 'sidebar-bottom.php'; ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>