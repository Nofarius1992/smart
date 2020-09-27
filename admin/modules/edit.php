<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";

$page = "products";
// HEADER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";



if(isset($_POST['save'])){
		//перенапровление на нужную страницу
		// header("location:/");

	 $sql = "UPDATE `services` SET `title` = '" . $_POST["title"] . "', `description` = '" . $_POST["description"] . "' WHERE `services`.`id` = '" . $_GET['id']   . "'";

	 if($conn->query($sql)) {
    
    header("location: /admin/modules/services.php");
  } else {
    echo 'ERROR';
  }
  

} else {

			$sql = "SELECT * FROM `services` WHERE `id` = '" . $_GET['id']  . "'";
			$result = $conn->query($sql);
      $row = mysqli_fetch_assoc($result);

}

?>
  <div class="content">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb col-3">
              <li class="breadcrumb-item"><a href="/admin/modules/services.php">Услуги</a></li>
              <li class="breadcrumb-item active" aria-current="page">Редактировать услугу</li>
            </ol>
          </nav>
    <h4 class="card-title"> Введите новые значения</h4>
		<form method="POST">
		<div class="card-body">
              
                <form method="post">

                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Название услуги</label>
                                <input type="text" name="title" class="form-control" placeholder="Company" value="<?php echo $row['title']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Описание</label>
                                 <textarea name="description" class="form-control" ><?php echo $row['description']; ?> </textarea>
                                
                            </div>
                        </div>
                    </div>
                     
					  <div >
					    <button name="save" class="btn btn-secondary">SAVE</button>
					    <!-- <button name="cancel" class="btn btn-secondary">CANCEL</button> -->
					    <div class="clearfix"></div>	    
					  </div>
				  </form>
            </div>
		</form>

</div>
<?php

// FOOTER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php";
// FOOTER


?>