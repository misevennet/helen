<? require_once('templutes/top.php');
    $query = "SELECT*FROM tovars";
    $res = $db->query($query);
    $rows = $res->fetchALL();?>
        <table class="table">
            <tr class="info" width="100%">
                <td>Картинка</td>
                <td>Название</td>
                <td>Описание</td>
            </tr>
        <?foreach ($rows as $row):?>
              <tr>
                <td><img data_id="<?=$row['id']?>" class='sm_pic' width="100%" src='media/uploads/<?=$row['picture']?>'></td>
                <td class='sm_name'><?=$row['name']?></td>
                <td class="sm_name"><?=$row['body']?></td>
            </tr>
        <?endforeach;?>
        </table>
<?require_once('templutes/bottom.php')?>
<script src="media/js/model.js"></script>
