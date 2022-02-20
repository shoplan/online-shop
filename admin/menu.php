<?php
    require_once '../db.php';
       
    if(isset($_GET['category']))
        $food = getFoodsByCat($_GET['category']);
    else

    $food = getAllFood();
       $category =  getAllCategories();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book list</title>
    <?php require_once 'admin-head.php'; ?>

</head>

<body id="page-top">

    <?php require_once 'sidebar-top.php'; ?>

    <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Menu</h1>
            <a class="btn btn-primary" href="addformfood.php">Add food</a>
        </div>
       <?php require_once '../db.php'; ?>
       <table class="table">
          <thead thead class="table-Secondary">
            <tr>
              <th scope="col">№</th>
              <th scope="col">name</th>
              <th scope="col">price</th>
              <th scope="col">ingredient</th>
              <th scope="col">quantity</th>
              <th scope="col">image</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            
            <?php
                
                foreach($food as $f){
            ?>
                <tr>
                    <td><?php echo $f['id']; ?></td>
                    <td><?php echo $f['title']; ?></td>
                    <td><?php echo $f['price']; ?></td>
                    <td><?php echo $f['ingredient']; ?></td>
                    <td><?php echo $f['qty']; ?></td>
                    <td><img  style="height:40px;" src="<?php echo "../img/".$f['img']; ?>"> </td>
                    <td><a class="btn btn-primary"  href="onefood.php?id=<?php echo $f['id']?>">details</a></td>
                </tr>

            <?php
                }
            ?>


          </tbody>
        </table>
    </div>
    
    <?php require_once 'sidebar-bottom.php'; ?>        

</body>
</html>