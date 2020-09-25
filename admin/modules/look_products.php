
<?php
include $_SERVER['DOCUMENT_ROOT']. '/configs/db.php';
$page = "order";
?>

<?php
include $_SERVER['DOCUMENT_ROOT']. "/admin/parts/header.php";
?>



<div class="main-panel">
    <div class="content">
        <div class="container-fluid">                    
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header">
                            <h4 class="card-title">Products
                                <h5 class="card-title">Users 
                                    <?php /*Тут виводжу айді користувача
                                    перебираючи всіма ордерами і роблю порівняня між, і якщо так то 
                                    виводимо наш айді*/
                                    $sql = "SELECT * FROM `orders`";
                                    $result = $conn -> query($sql);
                                    while ($row = mysqli_fetch_assoc($result)) 
                                    { if ($row['id'] == $_GET['id']) { echo $row['id'];} }?>
                                </h5> 
                            </h4>   <!-- ./card-title -->
                        </div>  <!-- ./card-header -->

                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active"><a href="/admin/order.php">Order products</a></li>
                            
                          </ol>
                        </nav>

                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Product ID</th>
                                    <th>Title</th>
                                    <th>Count</th>
                                    <th>Price product</th>
                                    <th>Price count Product</th>
                                    
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `orders`";
                                    $result = $conn -> query($sql);
                                    while ($row = mysqli_fetch_assoc($result)) 
                                    {
                                    ?>
                                     <tr>
                                       
                                        <?php 
                                        $basket = json_decode($row['products'], true);
                                        for ($i=0; $i < count($basket['basket']); $i++) 
          { 
            $sql = "SELECT * FROM `products` WHERE `id`= '".$basket['basket'][$i]['product_id']."'";
            $result = $conn -> query($sql);
            $product = mysqli_fetch_assoc($result);
          ?>
            <tr>
              <td scope="row">
                  <?php echo $product['id']; ?>
              </td>
              <td>
                  <?php echo $product['title']; ?>
              </td>
              <td>
                
                <a class="btn btn-light" id="count_product_id_<?php echo $product['id']; ?>">
                  <?php echo $basket['basket'][$i]['count']; ?>
                </a>
                
              </td>
              <td>
                <a class="btn btn-light" id="one_price_product_id_<?php echo $product['id']; ?>">
                  <?php echo $product['price']; ?>
                </a>
              </td>
              <td>
                <a class="btn btn-light" id="price_product_id_<?php echo $product['id']; ?>">
                  <?php echo $basket['basket'][$i]['price']; ?>
                </a>
              </td>
              
            </tr>
      <?php
          }
                                         ?>
                                        
                                    </tr>                                               
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  <!-- ./card-body table-full-width table-responsive -->
                    </div>  <!-- ./card strpied-tabled-with-hover -->
                </div>  <!-- ./col-md-12 -->
            </div>  <!-- ./row -->
        </div>  <!-- ./container-fluid -->
    </div>  <!-- ./content -->
</div>  <!-- ./main-panel -->
                   
<?php
    include $_SERVER['DOCUMENT_ROOT']. "/admin/parts/footer.php";
?>
        
