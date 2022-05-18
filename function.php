<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>
    <?php
    $str = "대표적인 서버 사이드 스크립트 언어로 전 세계 수많은 웹 시스템의 기반이 되는 언어.
    비슷한 언어로는 ASP, JSP 등이 있다. C-like 문법[4]로 된 CGI 보다 나았으며 
    펄처럼 배열이 연관배열이라 자료구조가 간편하고, 
    웹 페이지 제작시 기본적으로 웹관련 함수들이 많아 생산성이 높다는 점에서 사용자, 사용처가 많다. 
    1995년 라스무스 러돌프가 처음 공개했고, 
    지금은 The PHP Group 이라는 단체에서 개발 및 관리를 맡고 있다.
    PHP라는 이름은 원래 Personal Home Page Tools였는데, 
    지금은 PHP: Hypertext Preprocessor의 재귀 약자를 사용하고 있다.
    워드프레스, 미디어위키 등의 많은 애플리케이션이 PHP로 작성되어있다. 
    웹서핑을 하다보면 쓰이는 곳이 많다. ";
    echo $str;
      ?>
      <h2>strlen()</h2>
      <?php 
      echo strlen($str);   
        ?>
    <!--함수 : 괄호 안으로 들어오면, 계산 뒤 반환하는 프로그램 -->
        <h2>nl2br</h2>
        <?php
        echo nl2br($str);
        /* nl2br 에 넣으면 줄바꿈을 자동으로 한다. */ 
          ?>
</body>
</html>