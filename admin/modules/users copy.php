<?php 
include $_SERVER['DOCUMENT_ROOT']."./config/db.php";
$page = "users";
// HEADER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";
?>

  <!-- End Navbar -->

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item active" aria-current="page">Пользователи</li>
                        </ol>
                      </nav>
                <div class="table" >
                <div class="form-row">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Логин
                      </th>
                      <th >
                        Имя
                      </th>
                      <th >
                        Фамилия
                      </th>
                      <th >
                        Телефон
                      </th>
                      <th>
                        Почта
                      </th>
                      <th >
                        
                      </th>
                      <th >
                        Опции
                      </th>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT * FROM users";
                      $result = $conn->query($sql);   
                      while ($row = mysqli_fetch_assoc($result)) { 
                      ?>
                        <tr>
                          <td style="max-width: 200px;">
                          <?php echo $row['login'] ?>
                          </td>

                          <td style="max-width: 200px;">
                            <?php echo $row['first_name'] ?>
                          </td>

                          <td style="max-width: 200px;">
                            <?php echo $row['second_name'] ?>
                          </td>

                          <td style="max-width: 200px;">
                            <?php echo $row['phone'] ?>
                          </td>
                          <td style="max-width: 900px;">
                            <?php echo $row['email'] ?>
                          </td>
                          <!-- <td style="max-width: 200px;">
                          <a href="edit_user.php?id=<?php echo $row['id'] ?>">ИЗМЕНИТЬ</a>
                          </td> -->

                          <td>
                             <?php 
                        		if($row['admin_param'] == 'User') {
                        			?>
                        			<form method="POST">
		                            	<select class="form-control" name="admin_param">
										  <option><?php echo $row['admin_param'] ?></option>
										  <option>Admin</option>
										</select>
										<input name="orderId" type="hidden" value="<?php echo $row["id"]; ?>">
										<button type="submit" class="btn btn-primary">Изменить</button>
									</form>


                  <?php
									if(isset($_POST['admin_param'])) {
										$sql = "UPDATE `users` SET `admin_param` = '" . $_POST['admin_param'] . "' WHERE `users`.`id` =" . $_POST["orderId"];
										if ($conn->query($sql)) {
											header("location: /admin/modules/users.php");
										} else {
											echo 'ERROR';
										}
									}
								} else {
									?>
									<form method="POST">
		                            	<select class="form-control" name="admin_param">
										  <option><?php echo $row['admin_param'] ?></option>
										  <option>User</option>
										</select>
										<input name="orderId" type="hidden" value="<?php echo $row["id"]; ?>">
										<button type="submit" class="btn btn-primary">Изменить</button>
									</form>
									<?php 

										if(isset($_POST['admin_param'])) {
										$sql = "UPDATE `users` SET `admin_param` = '" . $_POST['admin_param'] . "' WHERE `users`.`id` =" . $_POST["orderId"];
											if ($conn->query($sql)) {
												header("location: /admin/modules/users.php");
											} else {
												echo 'ERROR';
											}
										}

									}
								 ?>
                              <a href="delete_user.php?id=<?php echo $row['id'] ?>" name="del"  type="button" class="btn btn-secondary">Удалить</a>

                          </td>
                        </tr>
                      <?php
                      }

                      ?>
                      
                    </tbody>
                  </table>
                                       
                </div>
              </div>
              </div>
            </div>
          </div>
    </div>
  </div>

<!-- -->




<?php

// FOOTER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php";
// FOOTER


?>