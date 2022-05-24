<?php 
file_put_contents('data/'.$_POST['title'], $_POST['description']); 
    
    /* 데이터 폴더에 정보 넣음 */
   
    /*
    서버--> 데이터로 보내거나 지울 때 URL 사용을 하지 않음. 
    어느 페이지로 오도록 만들기 위해 또는 공유할 때 사용함.
    */
?>