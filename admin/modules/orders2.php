<?php 
include $_SERVER['DOCUMENT_ROOT']."./config/db.php";
$page = "orders";
?>

<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php"; ?>

    
      <!-- End Navbar -->

      <div class="content m-0">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              
              <div class="card-body">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item active" aria-current="page">Заказы</li>
                        </ol>
                      </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);   

while ($row = mysqli_fetch_assoc($result)) 

{ ?>
 <div class="content m-0">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                 <div class="card-body">
                  <div class="table" >
                     <div class="form-row">
                        <table class="  table">
                          <thead class="text-primary">
                          <th>
                            ID
                          </th>
                          <th >
                            Имя пользователя
                          </th>
                          <th>
                            Телефон
                          </th>
                          <th>
                        </thead>
                        <tbody>
                         <tr> 
                          <td style="width: 30px;">
                            <?php echo $row['user_id'] ?>
                        </td>
                            <?php
                              $sql = "SELECT * FROM `users` WHERE `id` =" . $row['user_id'];
                              $result_or = $conn->query($sql);  
                              $row_or = mysqli_fetch_assoc($result_or);

                              ?>
                        <td style="width: 50px;">
                            <?php echo $row_or['login'] ?>
                        </td>

                          <td style="width: 170px;">
                            <?php echo $row_or['phone'] ?>
                          </td>
                          <table class="table">
                          <thead class=" text-primary">
                            <th>
                              Наименование товара
                            </th>
                            <th>
                              Количество
                            </th>
                            <th >
                              Опции
                            </th>
                          </thead>


                          <?php
                      
                                echo("<pre>");
                                $sql = "SELECT * FROM orders";
                                $result = $conn->query($sql);   

                                while ($row = mysqli_fetch_assoc($result)) 
                                
                                  { ?>                              
                                <tr> 
                                    <td style="width: 30px;">
                                      <?php echo $row['user_id'] ?>
                                    </td>
                                      <?php
                                        $sql = "SELECT * FROM `users` WHERE `id` =" . $row['user_id'];
                                        $result_or = $conn->query($sql);  
                                        $row_or = mysqli_fetch_assoc($result_or);

                                        ?>
                                    <td style="width: 50px;">
                                      <?php echo $row_or['login'] ?>
                                    </td>

                                    <td style="width: 170px;">
                                      <?php echo $row_or['phone'] ?>
                                    </td>
                                    <?php
                                        $sql = "SELECT * FROM orders";
                                        $result = $conn->query($sql);   

                                        while ($row = mysqli_fetch_assoc($result)) 
                                              
                                        {
                                          $basket = json_decode($row['products'], true);}
                                          for ($i=0; $i < count($basket['basket']); $i++)
                                              {                                            
                                                $sql = "SELECT * FROM `products` WHERE `id` =" . $basket['basket'][$i]['product_id'];
                                                $result_pro = $conn->query($sql);  
                                                $row_pro = mysqli_fetch_assoc($result_pro); 
                                                
                                                                                            
                                                ?>
                                                  <td style="width: 600px;">
                                                  
                                                  <?php echo  $row_pro["title"];
                                              }?>

                                    
                                  </td>
                                  

                                  
                                    <td>
                                      <!-- <?php echo "TEST" ?></td> -->
                                    <td >
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
  </div>
    <?php
                                  }
                                  ?>
  <!--   Core JS Files   -->
<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php"; ?>
