<?php
require_once ('templutes/top.php');

if ($_POST)
	{
	$err = array();
	(empty($_POST['login'])) ? $err[] = 'Логин не введен' : false;
	(empty($_POST['password'])) ? $err[] = 'Пароль не введен' : false;

	// прверка

    $query = "SELECT * FROM USERS WHERE login= '".$_POST['login']."' AND password='".$_POST['password']."'";
    
	$res = $db->query($query);
	$user = $res->fetch(); //fetch создает массив из объекта
	if ($user['id']){  
        $_SESSION ['id'] = $user['id'];
        ?>
    <script>
        document.location.href = 'index.php';
    </script>
    <?
        
		}else{
        
        $err[]='No user';
        }

	// print_r($err);

	if ($err)
		{
		echo "<div class='bg-danger'>";
		foreach($err as $one)
			{
			echo $one;
			echo "<hr/>";
			}

		echo "</div>";
	
?>

        <?php
		}
	}

?>



            <h2>User Log In</h2>
            <form action='' method='POST' class="form-horizontal">

                <div class="form-group">
                    <label for="login" class="col-sm-2 control-label">Login</label>
                    <div class="col-sm-10">
                        <input type="text" name="login" class="form-control" id="login" placeholder="login">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="password">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Enter</button>
                    </div>
                </div>
            </form>

            <?php
require_once ('templutes/bottom.php');
 ?>




                Site Info | Disclaimer | Privacy Site Network | Add to favorites © 2009-2015 PHP Beautifier - All rights reserved Related terms: programming, coding, php, scripts, dev, programmers, code, Zend, Pear, javascript