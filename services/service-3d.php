<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/parts/header.php";

	include $_SERVER['DOCUMENT_ROOT'] ."/modules/services/order-3d";
?>


<div class="container-fluid" id="form-service">
	<form method="POST">
		<div class="row">

			<div class="col">
				<h3 class="text-center text-dark h3">Параметры заказа</h3>
				  <div class="form-group">
				    <label for="model">Наименование модели</label>
				    <input name="model" class="form-control" id="model">
				  </div>
				  <div class="form-group">
				    <label for="description">Описание и дополнительно пояснение</label>
				    <input name="description" class="form-control" id="description">
				  </div>
			</div>

			<div class="col">
				<h3 class="text-center text-dark h3">Параметры работы</h3>
				 <div class="form-group">
				    <label for="size_model">Размеры модели</label>
				    <input name="size_model" class="form-control" id="size_model">
				  </div>
				  <div class="form-group">
				    <label for="scale">Масштаб</label>
				    <input name="scale" class="form-control" id="scale">
				  </div>
				   <div class="form-group">
				    <label for="accuracy">Точность</label>
				    <input name="accuracy" class="form-control" id="accuracy">
				  </div>
				  <div class="form-group">
				    <label for="material">Материал изготовления</label>
				    <input name="material" class="form-control" id="material">
				  </div>
				   <div class="form-group">
				    <label for="platform">Платформа</label>
				    <input name="platform" class="form-control" id="platform">
				  </div>
				  <div class="form-group">
				    <label for="packaging">Упаковка</label>
				    <input name="packaging" class="form-control" id="packaging">
				  </div>
			</div>

			<div class="col">
				<h3 class="text-center text-dark h3">Ваша информация</h3>
				 <div class="form-group">
				    <label for="modeles">Модели</label>
				    <input type="file" name="modeles" class="form-control-file" id="modeles">
				  </div>
				  <div class="form-group">
				    <label for="document">Example file input</label>
				    <input type="file" name="document" class="form-control-file" id="document">
				  </div>
			</div>

		</div><!-- /.row -->

		<div class="row text-center" id="btn-form">
			<button type="submit" class="btn btn-primary btn-block btn-lg">Оформить заказ</button>
		</div>
		
	</form>

</div>


<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"
?>