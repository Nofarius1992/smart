<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/parts/header.php";

	include $_SERVER['DOCUMENT_ROOT'] ."/modules/services/order-vr.php";
?>


<div class="container-fluid" id="form-service">
	<form method="POST">
		<div class="row">
			<div class="col">
				<h3 class="text-center text-dark h3">Параметры заказа</h3>
				  <div class="form-group">
				    <label for="equi">Оборудование</label>
					<select name="equi" class="form-control" id="equi">
						<option></option>
						<option>Hololens 2</option>
						<option>HTC Vive</option>
						<option>Lenovo Explorer</option>
						<option>Epson Moverio BT-300</option>
						<option>Xiaomi Mi VR 2</option>
					</select>
				  </div>
				  <div class="form-group">
				    <label for="description">Описание и дополнительно пояснение</label>
				    <input name="description" class="form-control" id="description">
				  </div>
			</div>

			<div class="col">
				<h3 class="text-center text-dark h3">Параметры работы</h3>
				<div class="form-group">
					<label for="model">Тип использования</label>
						<select class="form-control" name="use_type" id="use_type">
							<option></option>
							<option>Игры</option>
							<option>Контроль проектирования</option>
							<option>Контроль строительтсва</option>
							<option>Реклама</option>
							<option>Кинематограф</option>
						</select>
				</div>
				<div class="form-group">
					<label for="model">Количество одновременный ссесий</label>
						<select class="form-control" name="quantity" id="quantity">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
				</div>
				<div class="form-group">
					<label for="model">Место проведения</label>
						<select class="form-control" name="place" id="place">
							<option>Наш офис</option>
							<option>Ваша локация</option>

						</select>
				</div>
			</div>

			<div class="col">
				<h3 class="text-center text-dark h3">Дополнительные требования</h3>
				<div id="other">
				<div class="form-group">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="photo" id="photo" value="1">
							<label class="form-check-label" for="inlineCheckbox1">Организация фотоссесии</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="balls" id="balls" value="1">
							<label class="form-check-label" for="inlineCheckbox1">Украшение шарами</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="clothes" id="clothes" value="1">
							<label class="form-check-label" for="inlineCheckbox1">Наши специалисты в косплей одежде</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="eat" id="eat" value="1">
							<label class="form-check-label" for="inlineCheckbox1">Пицца, суши и т.д.</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="quest" id="quest" value="1">
							<label class="form-check-label" for="inlineCheckbox1">Организация соревнований, квестов</label>
						</div>
					</div>
				</div>
					
			</div>
		</div><!-- /.row -->

		<div class="col-md-12 text-center" id="btn-form">
			<button type="submit" class="btn btn-primary btn-sm">Оформить заказ</button>
		</div>
		
	</form>

</div>


<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"
?>