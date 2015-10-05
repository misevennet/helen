<? require_once('templutes/top.php');
 
if($_GET){
    $query = "SELECT *  FROM tovars WHERE id=".$_GET['id'];
    $res = $db -> query($query);
    $row = $res -> fetch();
    
    if($_POST)
        $query = "UPDATE tovars SET name"
}
?>

<form enctype="multipart/form-data" method="POST" action="">
            <!--enctype дает возможность загрузки данных!-->
            <div class="form-group">
                <label for="exampleInputEmail1">Товар</label>
                <input type="text" class="form-control" name="tName" id="exampleInputEmail1" placeholder="" value="<?$row['name']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Описание</label>
                <textarea type="textarea" class="ckeditor" name="editor1" id="exampleInputPassword1" placeholder="" value="<?$row['body']?>"> </textarea>
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
<? require_once('templutes/bottom.php')?>


<?=>