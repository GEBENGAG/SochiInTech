<!doctype html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"> 
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title >СочиИнТех</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body class="bg-dark mb-5">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php
$array = array();

include 'databaseconnection.php';
global $connection;

$result = (mysqli_query($connection,"SELECT ServiceName, idServices FROM services"));
while($row = mysqli_fetch_assoc($result)) { $array[] = $row;}

mysqli_close($connection);
?> 
  <script>
     

    


   
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
                <a class="nav-link active" href="order.php">Оставить заявку</a>
              </li>
              <li><div class="btn-group dropend">
                <a class="btn nav-link" type="button" href="shop.php" > <i class="fa-solid fa-cart-shopping fa-fade fa-lg"></i>Магазин</a> <!-- ссылка на магазин -->
               <button type="button" class="btn nav-link  dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
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
      <div class="order_form w-50  fs-md-4 mx-auto bg-light p-3 ">
        <h2 class="text-center p-3 " >Заполните форму ниже на интересующую Вас услугу</h1>
        <form   id="orderForm">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Адрес электронной почты</label>
                <input type="email" id="userEmail" class="form-control" required aria-describedby="emailHelp">
                <div  class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputName" class="form-label ">Ваше имя</label>
                <input type="text" id="userName" class="form-control" required  aria-describedby="emailHelp">
                <div  class="form-text">Как мы можем к Вам обращаться</div>
              </div>
              <div class="mb-3">
                <label for="inputOrgName" class="form-label ">Название организации</label>
                <input type="text" name="UserOrgName" class="form-control" id="inputOrgName"  aria-describedby="">
                <div  class="form-text"></div>
                
                <div class="form-check mt-3 mb-3">
                  <input class="form-check-input" name="UserIsFisical" type="checkbox" value=""  id="isFisical">
                  <label class="form-check-label"  for="isFisical">
                    Я физическое лицо
                  </label> 
                  </div>
                  <div class="mb-3">
                    <label for="userPhone" class="form-label ">Номер телефона</label>
                    <input type="text" id="userPhone" class="form-control" id="inputOrgName" required aria-describedby="">
                    <div  class="form-text">Для обратной связи</div>
                  
              </div>
              <div class="mb-3">
                    <label for="userСomment" class="form-label ">Комментарий</label>
                    <input type="text" id="userComment" class="form-control"  aria-describedby="">
                    <div  class="form-text">Оставьте Ваши пожелания</div>
                  
              </div>
              <select class="form-select" name="serviceSelect" id="servicecombo" required
               aria-label="Пример выбора по умолчанию">
                <option  disabled selected>Выберите услугу</option>
                
              </select>
              <!-- <div class="form-check mt-5">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  
                </label> -->
              <!-- </div> -->
              <p class="form-label text-color-red" id="paragerror"></p>
              <button class="btn-primary mt-5 " id="send" type="submit"   > Отправить заявку</button>
            
              
        </form>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ошибка</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        Не все поля заполнены или введенные данные не правильны.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        
      </div>
    </div>
  </div>
</div>
        <script>
           let clientType;
        window.addEventListener('load',function(){

        const jsArray = <?php echo json_encode($array);?>;    
        for (let i = 0; i < jsArray.length;i++){

         let item =jsArray[i];
        document.getElementById("servicecombo").innerHTML +="<option value="+item.idServices+">"+item.ServiceName+"</option>"
         }



        
          let checkvalue = document.getElementById('isFisical');
          let field = document.getElementById('inputOrgName');

          $(checkvalue).on("click",function () {
          if ($(this).is(":checked")) {

           field.disabled = true;
          clientType = "Физическое лицо";
          }
          else {
             field.disabled = false;
         } 
        })

      });
    
          const selector = document.getElementById("servicecombo");
          const btn = document.getElementById("orderForm");  
          

          btn.addEventListener("submit", function(event) {


      const currentDate = new Date();
      const year = currentDate.getFullYear();
      const month = currentDate.getMonth()+1;
      const day = currentDate.getDate();
      const formattedDate = ""+year+"-"+month+"-"+day+"";

      const formData = new FormData();
      formData.append("name", document.getElementById("userName").value);

      formData.append("email", document.getElementById("userEmail").value);
      formData.append("orgname", document.getElementById("inputOrgName").value||clientType);
      formData.append("phone", document.getElementById("userPhone").value);
      formData.append("comment", document.getElementById("userComment").value||null);
      formData.append("serviceid", selector.value);
      formData.append("date", formattedDate);


      $.ajax({
            url: 'post.php', //url серверного обработчика
            type: 'POST', // тип запроса 
            data: formData, // объект с данными берем из замыкания
            processData: false,
            contentType: false,
            beforeSend: (data)=>{
              
            }, //этот коллбэк выполняется перед отправкой запроса
            // этот обработчик выполняется, когда сервер присылает 
            // успешный ответ
            success: (data)=>{
                // data - это тело ответа сервера
                window.location.href = 'successend.html';              
            },
            // этот коллбэк выполняется, когда сервер присылает ошибку (коды 300+)
            error: (xhr)=>{
              alert("Остались пустые поля или неправильно введены данные");

            }     
    })
 
  window.location.href='successend.html';
},false)
 
          
        </script>
      </div>
</body>
</html>
</doctype>