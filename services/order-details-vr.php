<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/parts/header.php";

	include $_SERVER['DOCUMENT_ROOT'] ."/modules/services/order-vr.php";

	$sql = "SELECT * FROM `orders_vr` WHERE `user_id` = '" . $_COOKIE['polzovatel_id'] . "' ORDER BY `use_type`";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);

?>

<div id="login_block">
          <header class="section-header">
            <h3 class="section-title">ЗАКАЗ</h3>
              </header>
<div class="container-fluid" id="form-service" style="padding-top: 50px; padding-bottom: 50px; background-color: #fff; width: 1300px;">
	<form method="POST">
		<div class="row">
			<div id="form-text" class="col">
				<h3 class="text-center text-dark h3">Параметры заказа</h3>
				  <div  class="form-group">
				    <label for="equi">Оборудование</label>
					<h5 class="text-dark-h3" > <?php echo $row['equi'] ?></h5>
				  </div>
				  <div class="form-group">
				    <label for="description">Описание и дополнительно пояснение</label>
					<h5 class="text-dark-h3" > <?php echo $row['description'] ?></h5>
				  </div>
				  <div class="form-group">
					<label for="document">Адрес доставки</label>
					<h5 class="text-dark-h3" > <?php echo $row['address'] ?></h5>
				    <!-- <input type="file" name="document" class="form-control-file" id="document"> -->
				  </div>
			</div>

			<div id="form-text" class="col">
				<h3 class="text-center text-dark h3">Параметры работы</h3>
				<div class="form-group">
					<label for="model">Тип использования</label>
					<h5 class="text-dark-h3" > <?php echo $row['use_type'] ?></h5>
				</div>
				<div class="form-group">
					<label for="model">Количество одновременный ссесий</label>
					<h5 class="text-dark-h3" > <?php echo $row['quantity'] ?></h5>
				</div>
				<div class="form-group">
					<label for="model">Место проведения</label>
					<h5 class="text-dark-h3" > <?php echo $row['place'] ?></h5>
				</div>
			</div>


			<div class="col">
				<h3 class="text-center text-dark h3">Дополнительные требования</h3>
				<div id="other">
				<div class="form-group">
						<div class="form-check form-check-inline">
						<?php 
							if ($row['photo']=1) {
								?>
								<img src="../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../assets/img/square-line.png">
								<?php
							}
						?>
						<label class="form-check-label" for="inlineCheckbox1">Организация фотоссесии</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
						<?php 
							if ($row['balls']=1) {
								?>
								<img src="../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../assets/img/square-line.png">
								<?php
							}
						?>
							<label class="form-check-label" for="inlineCheckbox1">Украшение шарами</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
						<?php 
							if ($row['clothes']=1) {
								?>
								<img src="../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../assets/img/square-line.png">
								<?php
							}
						?>
							<label class="form-check-label" for="inlineCheckbox1">Наши специалисты в косплей одежде</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
						<?php 
							if ($row['eat']=1) {
								?>
								<img src="../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../assets/img/square-line.png">
								<?php
							}
						?>
							<label class="form-check-label" for="inlineCheckbox1">Пицца, суши и т.д.</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
						<?php 
							if ($row['quest']=0) {
								?>
								<img src="../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../assets/img/square-line.png">
								<?php
							}
						?>
							<label class="form-check-label" for="inlineCheckbox1">Организация соревнований, квестов</label>
						</div>
					</div>
				</div>
					
			</div>
		</div><!-- /.row -->

		
	</form>

</div>


<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"
?>