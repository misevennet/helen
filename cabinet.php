<?php require_once('templutes/top.php');
if($_SESSION['id']){
//$query= "SELECT * FROM users WHERE id=".$_SESSION['id'];
// $res = $db -> query($query);
//$user = $res ->fetch(); 
//    print_r($user);
//    echo 'USER'.$user[login];
//    if($_POST){
//        echo "<pre>";
///       print_r($_POST);
//        print_r($_FILES);
//        echo "</pre>";
//}
    
//    if($_FILES['img']['type']=='image/jpeg'){
//move_uploaded_file($_FILES['img']['tmp_name'], time().'.jpg');
//        echo 'ok';
//    }else{
//        echo 'no file';
//    
//    }
    if($_POST){
    $dir=$_SERVER['DOCUMENT_ROOT'].'/media/uploads/';
    $picture=time().'.jpg';
    $pic=$dir.$picture;
    
        
    if($_FILES['img']['type']=='image/jpeg'){
        $query= "INSERT INTO tovars VALUES (NULL,
        '".$_SESSION['id']. "',
        '".$_POST['tName']. "',
        '".$_POST['editor1']. "',
        '".$picture."',
        '',
        NOW(), 
        'show')";
      // echo $query;
      $db -> exec($query);
            
        
move_uploaded_file($_FILES['img']['tmp_name'], $pic);?>
    <script>
        document.location.href = 'cabinet.php';

    </script>
    <?php 
    }else{
        echo 'no file';
    
    }
    }
    
?>

        <form enctype="multipart/form-data" method="POST" action="">
            <!--enctype дает возможность загрузки данных!-->
            <div class="form-group">
                <label for="exampleInputEmail1">Товар</label>
                <input type="text" class="form-control" name="tName" id="exampleInputEmail1" placeholder="Название товара">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Описание</label>
                <textarea type="textarea" class="ckeditor" name="editor1" id="exampleInputPassword1" placeholder="Описание товара"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Фото</label>
                <input type="file" name="img" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

<? require_once('templutes/top.php');
    $query = "SELECT*FROM tovars WHERE user_id=".$_SESSION['id'];
    $res = $db->query($query);
    $rows = $res->fetchALL();?>
        <table  class="table">
            <tr class="info" width="100%">
                <td>Картинка</td>
                <td>Название</td>
                <td>Описание</td>
            </tr>
        <?foreach ($rows as $row):?>
              <tr>
                <td><img data_id="<?=$row['id']?>" class='sm_pic' width="100%" src='media/uploads/<?=$row['picture']?>'></td>
                <td class="sm_name"><?=$row['name']?></td>
                <td class="sm_name"><?=$row['body']?></td>
                <td> <button type="delete"  class="btn btn-default">Delete</button>
                   <button type="edit" class="btn btn-default">Edit</button>
                     <button type="edit" class="btn btn-default">Change picture</button>
                  </td>
                
            </tr>
        <?endforeach;?>
        </table>
<?require_once('templutes/bottom.php')?>
<script src="media/js/model.js"></script>


        <?php
}else{
echo'Ошибка входа';
}
?>


            <?php require_once('templutes/bottom.php');?>
                <script type='text/javascript' src='media/ckeditor/ckeditor.js'></script>
<script type='text/javascript' src='media/js/account.js'></script>
<!--<a href="#" onclick="deletePosition ('deltov.php', 'Вы хотите удалить?')"></a>   НА КНОПКУ УДАЛЕНИЯ ТОВАРА--!>
