<?php
$basePath = __DIR__ . '/files/';
var_dump($_POST);
$file_name = $_POST['file_name'];
echo '</br>';
var_dump($file_name);
echo '</br>';
if (!empty($_FILES['user_file'])) {
    if (move_uploaded_file($_FILES['user_file'] ['tmp_name'], $basePath . "$file_name.json"))
        echo 'Ура! Файл загружен</br>'; 
    else 
        echo 'Ошибка при загрузке</br>'; 
}
?>
<a href="/admin.php">Загрузить еще файл</a>
</br>
<a href="/list.php">Посмотреть список тестов</a>