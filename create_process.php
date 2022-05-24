<?php 
    file_put_contents('data/'.$_POST['title'], $_POST['description']);
    header('Location: /index.php?id='.$_POST['title']);
?>

<!-- create.php 의 form에서 작성된 데이터. 서버의 create_process.php 로 전송 -->