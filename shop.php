


<!doctype html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"> 
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>СочиИнТех</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body class="bg-dark mb-5"> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script> window.addEventListener('load',function(){
     
     <?php
      $connection = mysqli_connect('localhost','admin','admin','test');
      $i=1;
      $sql   = mysqli_query($connection,"SELECT COUNT(goods_id) FROM Goods");
      $row = $sql -> fetch_row();
      $count = (int)$row[0];
    
      $i=1;
      


     ?>
     
    
    
     for(let i=0; i < <?php echo $count;?> ;i++) {
      
    <?php
            
      $data = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM Goods"));
      
      
      $i++;
      ?>   
      
     
      let price = "<?php echo $data['goods_price'];?>";
      let name = "<?php echo $data['goods_name'];?>";
      let description = "<?php echo $data['goods_desc'];?>";
      

      let cardmarkup = ' <div class="card m-1"   style="width: 18rem;"> <img src="" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">'+name+'</h5> <p class="card-text">'+description+'</p><p class="card-text">'+price+' рублей</p> <a href="#" class="btn btn-primary">Купить</a></div>';
    
      document.getElementById('cardcontainer').innerHTML += cardmarkup;
      
      
      }
    
    
    
    
  });
<?php 
        mysqli_close($connection);
    ?>
 </script>
     
  


   
  
  
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
          <a class="navbar-item">
            <img src="images/1clogo.png" height="100">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="1C_Support.html">Сопровождение 1с</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="order.php">Оставить заявку</a>
              </li>
              <li><div class="btn-group dropend">
                <a class="btn nav-link active" type="button" href="shop.html" > <i class="fa-solid fa-cart-shopping fa-fade fa-lg"></i>Магазин</a> <!-- ссылка на магазин -->
                <button type="button" class="btn nav-link dropdown-toggle  dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>

                <ul class="dropdown-menu">
                    <li><h6 class="dropdown-header">Перейти к продукции фирмы:</h6></li>
                  <li><a class="dropdown-item" href="#">1c</a></li>
                  <li><a class="dropdown-item" href="#">Eset</a></li>
                  <li><a class="dropdown-item" href="#">DataMobile</a></li>
                  <li><a class="dropdown-item" href="#">Kaspersky</a></li>
                  
                </ul>
              </div>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
      
<div class="container position-relative  m-3 ">
  <button type="button position-absolute top-0 start-50"  class="btn btn-dark">1c</button>
  <button type="button position-absolute start-25" class="btn btn-dark">Kaspersky</button>
  <button type="button position-absolute start-0" class="btn btn-dark">Eset</button>
  <button type="button position-absolute start-100" class="btn btn-dark">DataMobile</button>

</div>
      
      
        <div class="container d-flex flex-wrap bg-light height:300; " id="cardcontainer">
           
        </div>
      
</body>
</html>
</doctype>