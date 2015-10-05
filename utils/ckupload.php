<?php
$callback = $_GET['CKEditorFuncNum'];
$file_name = $_FILES['upload']['name'];
$file_name_tmp = $_FILES['upload']['tmp_name'];
$file_new_path = $_SERVER ['DOCUMENT_ROOT'].'/media/upload/';
$full_path = $file_new_path.$file_name;
$http_path = '/media/upload/'.$file_name;
$error = '';
if(move_uploaded_file($file_name_tmp,$full_path)){
    
}else{
    $error = 'не удалось загрузить';
}
echo "<script> 
window.parent.CKEDITOR.tools.callFunction(".$callback.",\"".$http_path."\",\"".$error."\");
</script>";
