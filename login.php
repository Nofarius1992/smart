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

    $password = md5($_POST["pass"]);
    $u_code = generateRandomString(20);

    // Аутентификация
    $sql = "SELECT * FROM users WHERE login='" . $_POST['user_name'] ."' AND password= '$password'";
    
    $result = $conn->query($sql);

	if ($result -> num_rows > 0) {

        echo "<script>alert(\"Мы узнали Вас!\");</script>";
        // header("location:/index.php");
        $polzovatel = mysqli_fetch_assoc($result);
         //cсоздаем куки для данных пользователя
        setcookie("polzovatel_id", $polzovatel["id"], time() + 60*60);
        //перенапровление на нужную страницу
        header("location:/");

    } else {

        echo "<script>alert(\"Это точно Вы?\");</script>";
    
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
                                    <label class="text-success" for="exampleFormControlInput1">ВАШЕ ИМЯ</label>
                                    <!-- <input type="hidden" name="user_id" value="1"> -->
                                    <input type="text" class="form-control" name="user_name">
                                    </div>
                                        <div class="form-group">
                                        <label class="text-success" for="exampleFormControlInput1">ВАШ ПАРОЛЬ</label>
                                        <input type="password" class="form-control" name="pass" >
                                    </div>
                                </div>
                                    <button type="submit"  class="btn btn-secondary">ВХОД</button>

                            </form>
                                <a href="/register.php" type="button"  class="btn btn-secondary">РЕГИСТРАЦИЯ</a>            
                        </div>
                    </div>    
                </div> <!-- /.col-9-->
                </div><!-- /.row m-2-->
            </div><!-- /.container -->
        </div>   
</div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT']."/parts/footer.php"; ?>
