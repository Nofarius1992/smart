<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";
$page = "category";
// HEATER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";
// HEATER
?>

<div class="content">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb col-3">
          <li class="breadcrumb-item"><a href="/admin/index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Категории</li>
        </ol>
      </nav>
    <div >
    <a href="add_cat.php" type="button" class="btn btn-secondary">Создать категорию</a>  
    </div>
    <div class="content">
    <div >
            <li class="col-6 mb-2 list-group-item d-flex justify-content font-weight-bold">
              <span class="mx-4 badge badge-primary badge-pill">ID</span>  
             <span class="mx-4">Категория</span>         
             <span class="mx-4">Описание</span>             

                    </div > 
            </li>
                 <?php 
                  $sql = "SELECT * FROM `categories`";
                  $result = $conn->query($sql);
                  while ($row = mysqli_fetch_assoc($result)) { 
                    ?>

                    <li class="col-6 list-group-item d-flex justify-content-between align-items-center" >
                        <span class="mx-4 badge badge-primary badge-pill "><?php echo $row['cat_id']; ?></span>
                        <div>
                        <span ><?php echo $row['title_cat']; ?></span>                    
                        </div>
                        <div>
                        <span><?php echo $row['cat_disc']; ?></span>                     
                        </div>
                        <div>
                        <a href="edit_cat.php?id=<?php echo $row['cat_id'] ?>" name="edit"  type="button" class="btn float-right">РЕДАКТИРОВАТЬ</a> 
                        <a href="delete_cat.php?id=<?php echo $row['cat_id'] ?>" name="edit"  type="button" class="btn float-right">УДАЛИТЬ</a>   
      
                        <?php
                        } 
                        ?>
                      </div>
              </li>             
</div>



<?php
// FOOTER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php";
// FOOTER


?>
