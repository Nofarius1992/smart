<?php 
  include 'parts/header.php';
  $page = "personal";
 ?>


    <!-- ======= Portfolio Section ======= -->
<div id="first"> 
  <div class="first"> 
    <div class="first-block-0"></div>
    <div class="first-block-1">
        <form class="first-form-1">
          <h3 class="text-monospace font-weight-bold">Параметры заказа</h3>
          <div class="form-group">
            <label for="exampleFormControlSelect1" class="h5 font-weight-bold">Наименование оборудования</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="h5 font-weight-bold">Дата заказа</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Дата">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
      </form>
    </div>
    <div class="first-block-1">
    <form class="first-form-1">
          <h3 class="text-monospace font-weight-bold">Параметры работы</h3>
          <div class="form-group">
            <label for="exampleFormControlSelect1" class="h5 font-weight-bold">Тип использования</label>
            <select class="col-8 ml-3 form-control" id="exampleFormControlSelect1">
            <option></option>
              <option>Игры</option>
              <option>Обучение спорту</option>
              <option>Контроль проектирования</option>
              <option>Контроль производства</option>
              <option>Производственное обечение</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="h5 font-weight-bold">Количество пользователей одновременно</label>
            <input type="email" class="col-8 ml-3 form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1" class="h5 font-weight-bold">Место проведения</label>
            <select class="col-8 ml-3 form-control" id="exampleFormControlSelect1">
            <option></option>
              <option>Наша локация</option>
              <option>В вашем помещении</option>

            </select>
          </div>
      </form>
    </div>
    <div class="first-block-1"></div>
  </div>
</div>

 <?php 
  include 'parts/footer.php';
 ?>