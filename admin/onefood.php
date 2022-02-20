
<!DOCTYPE html>
<html>
<head>
	<?php require_once 'admin-head.php'; ?>
	<title>food details</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php require_once 'sidebar-top.php'; ?>

    <div class="container-fluid">
     
		<?php
					if(isset($_GET['id']) && !empty($_GET['id'])){
						require_once '../db.php';
						$foodid = $_GET['id'];

						$food = getFood($foodid);
						if($food != null){
							$cats = getAllCategories();
				?>

							<form action="updatefood.php" method="post">
								<input type="hidden" value="<?php echo $food['id']; ?>" name="fid" class="form-control">
								<label class="form-label">name</label>
								<input type="text" value="<?php echo $food['title']; ?>" name="fname" class="form-control" required>
								<label class="form-label">ingredient</label>
								<textarea cols="30" rows="5" name="fingr" class="form-control" required><?php echo $food['ingredient']; ?></textarea>
								<label class="form-label">price</label>
								<input type="number" value="<?php echo $food['price']; ?>" name="fprice" class="form-control" required>
								<label class="form-label">Quantity</label>
								<input type="number" value="<?php echo $food['qty']; ?>" name="fqty" class="form-control" required>
								<label class="form-label">category</label>
								<select name="fcat" class="form-select" required>
								<?php
									if($cats != null){
										foreach($cats as $c){
								?>
									<option value="<?php echo $c['id']; ?>" <?php if($food['category_id'] == $c['id']) echo "selected"; ?> ><?php echo $c['name']; ?></option>
								<?php
										}
									}
								?>
								</select>
		
								<button type="submit" class="btn btn-primary mt-3">Update</button>
								<button type="button" class="btn btn-danger mt-3 ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
							</form>
					<?php
							}
						}
					?>

	</div>

	<?php require_once 'sidebar-bottom.php'; ?>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        Really want to remove???
	      </div>
	      <div class="modal-footer">
	        <form action="deletefood.php" method="POST">
	        	<input type="hidden" value="<?php echo $food['id']; ?>" name="fid" class="form-control">
	        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
	        	<button type="submit" class="btn btn-danger">YES</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>