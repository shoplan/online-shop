
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Categories list</title>
    <?php require_once 'admin-head.php'; ?>
</head>
<body id="page-top">
    <?php
     require_once 'sidebar-top.php'; 
     ?>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Jenres</h1>
            <a class="btn btn-primary" href="addcategoryform.php">Add category</a>
        </div>

      <?php 
       require_once '../db.php'; 
      ?>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">name</th>
              <th scope="col">actions</th>
            </tr>
          </thead>
          <tbody>
            
            <?php
                $category = getAllCategories();
                foreach($category as $c){
            ?>
                <tr>
                    <td><?php echo $c['id']; ?></td>
                    <td><?php echo $c['name']; ?></td>
                    <td> <a class="btn btn-primary" href="onecategory.php?id=<?php echo $c['id']; ?>">Details</a></td>
                </tr>
            <?php
                }
            ?>
          </tbody>
        </table>
    </div>
    <?php
     require_once 'sidebar-bottom.php';
    ?>   
    
</body> 
</html>