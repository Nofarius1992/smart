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
                          <li class="breadcrumb-item active" aria-current="page">Услуги</li>
                        </ol>
                      </nav>
                  <div >
                  <a href="create.php" type="button" class="btn btn-secondary">Создать услугу</a>   
                  </div>
                <div class="table" >
                <div class="form-row">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Название услуги
                      </th>
                      <th>
                        Описание
                      </th>
                      <th >
                        Опции
                      </th>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT * FROM services";
                      $result = $conn->query($sql);   
                      while ($row = mysqli_fetch_assoc($result)) { 
                      ?>
                        <tr>
                          <td style="max-width: 200px;">
                            <?php echo $row['title'] ?>
                          </td>
                          <td style="max-width: 900px;">
                            <?php echo $row['description'] ?>
                          </td>
                          <td>
                             <a href="edit.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary">EDIT</a>
                              <a href="delete.php?id=<?php echo $row['id'] ?>" name="del"  type="button" class="btn btn-secondary">DEL</a>
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
  <!--   Core JS Files   -->
<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php"; ?>
