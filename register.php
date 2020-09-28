<?php
/*
1. Сделать форму регистрации - +
2. Сделать отправку формы  - +
3. Сделать отправку письма со ссылкой на подтверждение регистрации
4. Сделать страницу с подтверждением регистрации
*/
 
include "config/db.php";
include $_SERVER['DOCUMENT_ROOT']."/parts/header.php";
// echo "<pre>";
if (isset($_GET['u_code'])) {

    // var_dump("TEST1");

    $sql = "SELECT * FROM users WHERE confirm_mail='" . $_GET['u_code'] . "'";

    $result = $conn->query($sql);

    if ($result -> num_rows > 0) {
 
        $user = mysqli_fetch_assoc($result);
        
        $sql = "UPDATE `users` SET `verified`=1 WHERE `id`=" . $user['id'];
        
        if ($conn->query($sql)){
            

            echo "<script>alert(\"Пользователь Верефицирован !\");location.href='/';</script>";
                        
        } else {
            echo "<script>alert(\"Пользователь НЕ верефицирован !\");</script>";
        }
    }
}


if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

    $password = md5($_POST["pass"]);
    $u_code = generateRandomString(20);
    // var_dump($password);

    //регистрация
    $sql = "INSERT INTO users(login, password, email, confirm_mail, first_name, second_name, phone) VALUES ('" . $_POST['user_name']. "', '" . $password . "', '" . $_POST['email']. "', '$u_code', '" . $_POST['first_name']. "', '" . $_POST['second_name']. "', '" . $_POST['phone']. "')";

    

    if ($conn->query($sql)) {

        echo "Зарегистрирован";
        $link = "<a href='http://smart.local/register.php?u_code=$u_code'>CONFIRM</a>";
        mail($_POST['email'],'My Subject', $link);

        

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
          <div id="register_block">
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
                                            <label class="text-success" for="exampleFormControlInput1">ВАШ ЛОГИН</label>
                                            <!-- <input type="hidden" name="user_id" value="1"> -->
                                            <input type="text" class="form-control" name="user_name">
                                        </div>
                                            <div class="form-group">
                                            <label class="text-success" for="exampleFormControlInput1">ВАШ ПАРОЛЬ</label>
                                            <input type="password" class="form-control" name="pass" >
                                        </div>

                                        <div class="form-group">
                                            <label class="text-success" for="exampleFormControlInput1">ВАШЕ ИМЯ</label>
                                            <input type="text" class="form-control" name="first_name" >
                                        </div>

                                        <div class="form-group">
                                            <label class="text-success" for="exampleFormControlInput1">ВАША ФАМИЛИЯ</label>
                                            <input type="text" class="form-control" name="second_name" >
                                        </div>

                                        <div class="form-group">
                                            <label class="text-success" for="exampleFormControlInput1">ВАША ТЕЛЕФОН</label>
                                            <input type="text" class="form-control" name="phone" >
                                        </div>

                                        <div class="form-group">
                                            <label class="text-success" for="exampleFormControlInput1">Email address</label>
                                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>

                                        </div>


                                        <button type="submit"  class="btn btn-secondary">РЕГИСТРАЦИЯ</button>
                                    </form>
                                </div>
                            </div>    
                        </div> <!-- /.col-9-->
                    </div><!-- /.row m-2-->
                </div><!-- /.container -->      
          </div>
        
</div>
</section>
<?php include $_SERVER['DOCUMENT_ROOT']."/parts/footer.php"; ?>
