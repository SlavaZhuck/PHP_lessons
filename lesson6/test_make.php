<?php

$name = $_POST['name'];
$answer = $_POST['answer'];
$test_number = $_POST['test_number'];

if ($name===$answer)
    {
    echo 'right';
    echo '</br>';
    echo <<<END
    
    <a href="/admin.php">Загрузить еще тест</a>
END;
}
else {
    echo 'wrong';
    echo '</br>';
    echo <<<END
    
    <a href="/test.php?test_number=$test_number">попробовать еще раз</a>
END;
}


?>


