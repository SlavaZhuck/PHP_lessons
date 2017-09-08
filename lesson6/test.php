<?php
$test_number=$_GET["test_number"];
$file_data=file_get_contents(__DIR__ ."/files/" . $test_number . ".json", "r");
$json_data=json_decode($file_data);
$file_path=__DIR__ ."/files/" . $test_number . ".json";
if (file_exists($file_path)) {
    echo "Файл $file_path существует";
} else {
        echo "Файл $filename не существует";
}
?>

<body>    
    <form action="test_make.php" method="post" >
        <label for="name"> <?php echo $json_data->question; ?></label>
        <input id="name" type="text" name="name"/>   
        <input id="answer" type="hidden" name="answer" value="<?php echo $json_data->answer; ?>"/>   
        <input id="test_number" type="hidden" name="test_number" value="<?php echo $test_number; ?>"/> 
    </form>
</body>

