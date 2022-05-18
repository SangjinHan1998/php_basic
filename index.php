<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Start</title>
</head>
<body>
  <h1><a href = "index.php">Web</a></h1>
  <ol>
    <li><a href = "index.php?id=HTML">HTML</a></li>
    <li><a href = "index.php?id=CSS">CSS</a></li>
    <li><a href = "index.php?id=JavaScript">JavaScript</a></li>
    <li><a href = "index.php?id=PHP">PHP</a></li>
    <li><a href = "index.php?id=python">Python</a></li>

  </ol>
  <h2>
    <?php 
    if  (isset($_GET['id']))  {
      echo $_GET['id']; /* 위 주소에서 가져온다.  */
    } else {
      echo "Welcome";
    }
    ?>  
  </h2>
  <?php
    if(isset($_GET['id'])) {
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "Hello, PHP <br>";
      echo "1. 프로그래밍은 시간의 순서. 2. 복잡한 문제는 조건문과 반목문으로 해결 가능";
    }
    /* 파일 경로를 찾아서 표현해준다.  
    현실에서는 보안적으로 쓰지 않는 코드(only 교육용) */ 
    ?>
</body>
</html>