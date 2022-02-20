
<!DOCTYPE html>
<html>
<head>
	<?php require_once 'admin-head.php'; ?>
	<title>category details</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php require_once 'sidebar-top.php'; ?>

    <div class="container-fluid">
       

		<?php
					if(isset($_GET['id']) && !empty($_GET['id'])){
						require_once '../db.php';
						$catid = $_GET['id'];

                        $cat = getCategory($catid);

				?>

							<form action="updatecat.php" method="post">
								<input type="hidden" value="<?php echo $cat['id']; ?>" name="cid" class="form-control">
								<label class="form-label">name</label>
								<input type="text" value="<?php echo $cat['name']; ?>" name="cname" class="form-control" required>
								<button type="submit" class="btn btn-outline-primary mt-3">Update</button>
								<button type="button" class="btn btn-outline-danger mt-3"  data-toggle="modal" data-target="#deleteModal">delete <i class="far fa-trash-alt"></i></button>
							
							</form>
					<?php
							}
						
					?>

	</div>

	<?php require_once 'sidebar-bottom.php'; ?>
       <!-- Logout Modal-->
       <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">do want delete????</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                <form action="deletecat.php" method="POST">
                <input type="hidden" value="<?php echo $cat['id']; ?>" name="cid" class="form-control">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">NO</button>
                    <button class="btn btn-danger">YES</button>
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