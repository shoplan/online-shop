<?php
    require_once 'db.php';
 
   
    if(isset($_GET['category']))
        $food = getFoodsByCat($_GET['category']);
    else

       $food = getAllFood();
       $category =  getAllCategories();

  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="libs/jquery/jquery-3.3.1.min.js">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Hello, world!</title>
  </head> 
  <body>  
   <div class="container"> <!--container start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">    
        <a class="navbar-brand" href="index.php">Foodshop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php foreach($category as $c){  ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo 'index.php?category='.$c['id']; ?>"><?php echo $c['name']; ?></a>
            </li>
            <?php } ?>
          </ul>
        </div>
        <div class="d-flex">
          <span lass="badge bg-dark text-white ms-1 rounded-pill">
          <a class="btn btn-outline-warning" aria-current="page" href="users/loginform.php">  <i class="fas fa-sign-in-alt"></i> </a> </span>
        </div>
      </div>
    </nav>
<br>
   <div class="block">
   <diV class="column-1">    

<!--card start-->

<div class="row row-cols row-cols-md g-4">
<?php
                    if($food != null){
                        foreach($food as $f){ 
                    ?>
    <div class="col">
      <div class="card" style="max-width:15rem;"  data-id="<?php echo $f['id']; ?>">
        <img src="<?php echo "img/".$f['img']; ?>"  style="height:100px;" class="product-img" alt="...">
        <div class="card-body text-center">
          <h5 class="item-title"><?php echo $f['title']; ?></h5>
          <p>(<?php echo $f['ingredient']; ?>)</p>
          <h6><small data-items-in-box class="text-muted"><?php echo $f['qty']; ?>????</small></h6>
          <div class="details-wrapper">
            <div class="items counter-wrapper">
              <div class="items__control" data-action="minus">-</div>
              <div class="items__current" data-counter>1</div>
              <div class="items__control" data-action="plus">+</div>
            </div>
            <div class="price">
              <div class="price__currency"><?php echo $f['price']; ?><span>????</span></div>
              <div class="price__weight">180??</div>
            </div> 
          </div>
          <div class="d-grid gap-2"> 
            <button  data-cart type="button" class="btn btn-outline-warning">+ ?? ?????????????? <i class="fas fa-shopping-cart"></i></button>
           </div>
        </div>
      </div>
    </div>
    <?php
                        }
                    }
                    ?>
     
</div>
<!--card finish-->
   </div>

   <div class="column-2">
   <!-- ?????????????? -->
   <div class="card">
    <div class="card-body">
      <h5 class="card-title">?????? ??????????</h4>
      <div data-cart-empty class="alert alert-secondary" role="alert">
        ?????????????? ??????????
      </div>
      <!-- cart-wrapper -->
      <div class="cart-wrapper">
      </div>
      <!-- // cart-wrapper -->
      <!-- ?????????????????? ???????????? -->
      <div class="cart-total">
        <p data-cart-delivery class="none">
          <span class="h5">????????????????:</span> 
          <span class="delivery-cost"> 500????</span> <br>
            <span class="small">???????????????????? ?????? ???????????? ???? 6000 ????</span>
        </p>
        <p><span class="h6">??????????:</span> <span class="total-price">0</span> <span class="tenge">????</span></p>
      </div>
      <!-- // ?????????????????? ???????????? -->

    </div>

    <!-- ???????????????? ?????????? -->
    <div id="order-form" class="card-body border-top none">
       <button type="submit" class="btn btn-outline-dark"  onclick="document.getElementById('id01').style.display='block'" >???????????????? ??????????</button>
    </div>
    <!-- // ???????????????? ?????????? -->

  </div>
  <!-- // ?????????????? -->

      
 </div>  
</diV><!--block finish-->
<br>




<div id="id01" class="modal">
    <div class="container">
      <label for="uname"><b>?????? <span class="err">*</span></b></label>
  
      <input type="text" placeholder="?????????????? ??????" name="uname" required>

      <label for="num"><b>?????????????? <span class="err">*</span></b></label>
      <input type="text" placeholder="?????????????? ??????????????" name="num" required>

      <label for="uname"><b>??????????<span class="err">*</span></b></label>
      <input type="text" placeholder="?????????????? ??????????" name="adr" required>

      <div class="col-md">
        <label for="uname"><b>???????????? ???????????? <span class="err">*</span></b></label>
        <div class="form-floating">
          <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
            <option selected>??????????????????</option>
            <option value="1">???????????? ???????????? ???? ??????????</option>
            <option value="2">?????????? ??????????</option>
          </select> 
        </div>
      </div>
      <br>
      <div class="d-grid gap-2">
        <button class="btn btn-dark" type="button">????????????????</button>
      </div> 
    </div>
    </div>




<footer>
    <a href="mailto:t.skenderova@mail.ru">t.skenderova@mail.ru</a></p>
  </footer>
</div><!--container finish-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   	<!-- ???????????????????? ?????????????? -->
<script src="./js/renderProducts.js"></script>	
<script src="./js/calCartPrice.js"></script>
<script src="./js/toggleCartStatus.js"></script>
<script src="./js/counter.js"></script>
<script src="./js/cart-01.js"></script>
<script src="./js/modal.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>