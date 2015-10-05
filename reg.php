<?php require_once('templutes/top.php');
if($_POST) {
/*echo "<pre>";
print_r ($_POST);
echo "</pre>";*/
$err = array();
if(empty($_POST['login'])){
$err[]='Логин не введен';
}
if(empty($_POST['password'])){
$err[]='Пароль не введен';
}
if(empty($_POST['repassword'])){
$err[]='Пароль не введен';
}
if(empty($_POST['email'])){
$err[]='Email не введен';
}

if($_POST['password'] != $_POST['repassword']){
$err []= "Passwords do not match";
}

//проверка на логин
$res = $db -> query("SELECT * FROM users WHERE login ='".$_POST['login']." ' " );

$user = $res ->fetch(); //fetch делает из объекта массив

if (isset ($user['login'])) {
$err [] = "User exists";
}
//print_r($err);
if($err){
echo "<div class='bg-danger'>";
foreach ($err as $one){

echo $one;
echo "<hr/>";
}
echo "</div>";
}else {
$query = "INSERT INTO users VALUES (NULL, '".$_POST['login']."', '".$_POST['password']."', '".$_POST['email']."',  NOW(), NOW(), 'unblock')";

$db -> exec ($query);
?>
    <script>
        document.location.href = "index.php";
    </script>
    <?

}
}
?>



        <h2>Форма регистрации</h2>
        <form action='' method='POST' class="form-horizontal">

            <div class="form-group">
                <label for="login" class="col-sm-2 control-label">Логин</label>
                <div class="col-sm-10">
                    <input type="text" name="login" class="form-control" id="login" placeholder="login">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="password">
                </div>
            </div>

            <div class="form-group">
                <label for="repassword" class="col-sm-2 control-label">Повтор пароля</label>
                <div class="col-sm-10">
                    <input type="password" name="repassword" class="form-control" id="inputPassword3" placeholder="repassword">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="email">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Регистрация</button>
                </div>
            </div>
        </form>

        <?require_once('templutes/bottom.php');?>