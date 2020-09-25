<?php 
include $_SERVER['DOCUMENT_ROOT']."./config/db.php";
$page = "products";
?>

<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php"; ?>

    
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
                          <li class="breadcrumb-item"><a href="/admin/index.php">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Продукт</li>
                        </ol>
                      </nav>
                  <div >
                  <a href="create.php" type="button" class="btn btn-secondary">Создать товар</a>  
                  <a href="add_cat.php" type="button" class="btn btn-secondary">Создать категорию</a>  
                  </div>
                <div class="table" >
                <div class="form-row">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Имя
                      </th>
                      <th>
                        Описание
                      </th>
                       <th>
                        Полное описание
                      </th>
                      <th>
                        Категория
                      </th>
                      <th >
                        Опции
                      </th>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT * FROM products";
                      $result = $conn->query($sql);   
                      // var_dump($sql);
                      while ($row = mysqli_fetch_assoc($result)) { 
                      ?>
                        <tr>
                          <td style="width: 30px;">
                            <?php echo $row['id'] ?>
                          </td>
                          <td style="width: 50px;">
                            <?php echo $row['title'] ?>
                          </td>
                          <td style="width: 170px;">
                            <?php echo $row['disc_short'] ?>
                          </td>
                            <td style="width: 600px;">
                            <?php echo $row['disc_long'] ?>
                          </td>
                          <td>
                            <?php echo $row['category_id'] ?></td>
                          <td >
                            <div>
                              <a href="edit.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary">EDIT</a>
                              <a href="delete.php?id=<?php echo $row['id'] ?>" name="del"  type="button" class="btn btn-secondary">DEL</a>
                            
                            </div>
                          </td>
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
  <!--   Core JS Files   -->
<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php"; ?>
