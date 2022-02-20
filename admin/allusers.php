
<!DOCTYPE html>
<head>
    <title>Users</title>
    <?php require_once 'admin-head.php'; ?>

</head>

<body id="page-top">

    <?php require_once 'sidebar-top.php'; ?>

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All users</h1>
       
        </div>

        <?php 
        
          require_once '../users/db.php'; 
					
        ?>


        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Fullname</th>
              <th scope="col">Email</th>
              <th scope="col">Rolecode</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            

            <?php
                $users = getAllUsers();

                foreach($users as $user){
            ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['fullname']; ?></td>
                    <td><?php echo $user['login']; ?></td>
                    <td><?php echo $user['role_id']; ?></td>
                    <td> <a class="btn btn-primary" href="oneuser.php?id=<?php echo $user['id']; ?>">Details</a></td>
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