<?php 
function print_title()  {
    if  (isset($_GET['id']))  {
      echo $_GET['id']; /* 위 주소에서 가져온다.  */
    } else {
      echo "Welcome";
    }
  }
  function print_description() {
    if(isset($_GET['id'])) {
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "Hello, PHP <br>";
      echo "1. 프로그래밍은 시간의 순서. 2. 복잡한 문제는 조건문과 반목문으로 해결 가능<br>";
      echo "Why we use Function?? To do things neat and tidy.";
    }
    /* 파일 경로를 찾아서 표현해준다.  
    현실에서는 보안적으로 쓰지 않는 코드(only 교육용) */ 
  }
  function print_list() {
    $list = scandir('./data');
      $i = 0;
      while($i < count($list))   {
        if ($list[$i] != '.') {    /* Are left data and right data not same??   */ 
          if ($list[$i] != '..') {
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            
          }
        }  
        $i = $i + 1;
      }
      /*
      echo "<li>$list[2]</li>\n"; 
      echo "<li>$list[3]</li>\n"; 
      echo "<li>$list[4]</li>\n"; 
      echo "<li>$list[5]</li>\n"; 
      echo "<li>$list[6]</li>\n"; 
      */
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    PHP Start
  </title>
</head>
<body>
  <h1><a href = "index.php">Web</a></h1>
  <ol>
    <?php 
      print_list();
    ?>
  </ol>
  <a href ="create.php">create</a>
  <form action = "create_process.php" method="post">
    <p>
      <input type = "text" name = "title" placeholder="Title">
    </p>
    <p>
      <textarea name = "description" placeholder = "Description"></textarea> 
      <!-- 본문 -->
    </p>
    <p>
      <input type= "submit" >
    </p>  
  </form>

  
</body>
</html>