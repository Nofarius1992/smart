<?php 
include $_SERVER['DOCUMENT_ROOT']."../config/db.php";
$page = "orders";
// include $_SERVER['DOCUMENT_ROOT'] ."/modules/services/order-vr.php";

$sql = "SELECT * FROM `orders_vr` WHERE `id` ='" . $_GET['id'] . "' AND `user_id` = '" . $_GET['user_id'] . "' ORDER BY `use_type`";
// var_dump ($sql);
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
echo $row['address'];

?>

<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php"; ?>

    
      <!-- End Navbar -->

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                        <div class="card-body">
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="/admin/modules/orders.php">Заказы</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Детали</li>
                                  </ol>
                                </nav>
                                 <!-- --------------  --> 
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
								<img src="../../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../../assets/img/square-line.png">
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
								<img src="../../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../../assets/img/square-line.png">
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
								<img src="../../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../../assets/img/square-line.png">
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
								<img src="../../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../../assets/img/square-line.png">
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
								<img src="../../assets/img/square-check.png">
								<?php
							} else {
								?>
								<img src="../../assets/img/square-line.png">
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
 <!-- --------------  --> 
                        </div>
            </div>
          </div>
      </div>
  </div>
  <!--   Core JS Files   -->
<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php"; ?>
