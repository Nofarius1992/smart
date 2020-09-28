<?php
/*
1. Сделать форму регистрации - +
2. Сделать отправку формы  - +
3. Сделать отправку письма со ссылкой на подтверждение регистрации
4. Сделать страницу с подтверждением регистрации
*/
 
include "config/db.php";
include $_SERVER['DOCUMENT_ROOT']."/parts/header.php";

if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){



    // вносим новый почтовый

    $sql = "UPDATE `users` SET `email`='" . $_POST['email'] . "' WHERE `id`= " . $_COOKIE["polzovatel_id"];



    if ($conn->query($sql)) {


        $sql = "SELECT *  FROM `users` WHERE `id` = " . $_COOKIE["polzovatel_id"];

        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);

        $u_code_c = $row['confirm_mail'];
        
        // var_dump($u_code_c);

    
        echo "<script>alert(\"Код верификации отправлен повторно!\");</script>";
        $link = "<a href='http://smart.local/register.php?u_code=$u_code_c'>CONFIRM</a>";
        mail($_POST['email'],'Повторная верификация', $link);


    } else {

        echo "ERROR";

    }



}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>



<section id="portfolio" class="section-bg">
    <div class="container" data-aos="fade-up">
      <div id="login_block">
            <div class="container">
            <div class="row m-2">
            <!-- <?php 
            include $_SERVER['DOCUMENT_ROOT']."/cat_nav.php";
                ?> -->
                <div class="col-6">
                    <div class="container">
                        <div>
                            <form method="POST" >
                                <div class="form-group">
                                    <label class="text-success" for="exampleFormControlInput1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                            <button type="submit"  class="btn btn-secondary">Отправить</button>
                            </form>
                        </div>
                    </div>    
                </div> <!-- /.col-9-->
                </div><!-- /.row m-2-->
            </div><!-- /.container -->
        <div>
    <div>     
</section>

<?php include $_SERVER['DOCUMENT_ROOT']."/parts/footer.php"; ?>
