<? require_once('/config/config.php');
   // print_r($_POST);
$query = "SELECT * FROM tovars WHERE id=".$_POST['id'];

$res=$db->query($query);
$rows=$res->fetch(); 
           ?>  
                <img data_id="<?=$rows['id']?>" class='sm_pic' width="100%" src='media/uploads/<?=$rows['picture']?>'>
               
        
    
    
