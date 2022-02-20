
<!DOCTYPE html>
<html>
<head>
	<title>Add food list</title>
	<?php require_once 'admin-head.php'; ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php 
			include '../db.php'; 
			$category = getAllCategories();
	?>
	
	<?php require_once 'sidebar-top.php'; ?>

	<div class="container-fluid">
			<form action="addfood.php" method="post" enctype="multipart/form-data">
				<label class="form-label">name</label>
				<input type="text" name="fname" class="form-control" required>
				<label class="form-label">ingredient</label>
				<textarea cols="30" rows="5" name="fingr" class="form-control" required></textarea>
				<label class="form-label">price</label>
				<input type="number" name="fprice" class="form-control" required>
				<label class="form-label">Quantity</label>
				<input type="number" name="fqty" class="form-control" required>
				<label class="form-label">category</label>
				<select name="fcat" class="form-select" required>
				<?php
					if($category != null){
						foreach($category as $c){
				?>
					<option value="<?php echo $c['id']; ?>"><?php echo $c['name']; ?></option>
				<?php
						}
					}
				?>
				</select>
			    <label for="formFile" class="form-label">Image</label>
  				<input class="form-control" type="file" name="fpic" id="formFile">
				<button type="submit" class="btn btn-primary mt-3">Add food</button>
			</form>
		
	</div>

	<?php require_once 'sidebar-bottom.php'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>