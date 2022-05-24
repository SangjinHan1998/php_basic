<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function 2</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>

    <?php 
        function basic1() {
            print("php function 1<br>");
            print("php function 2<br>");

        }

        basic1();
        basic1();
        basic1();


        /*
        function basic() {
            print("인터넷(Internet)이란 여러 통신망을 하나로 연결한다는 의미의<br> 
            ‘인터 네트워크(inter-network)’라는 말에서 시작되었으며, <br>
            이제는 전 세계 컴퓨터들을 하나로 연결하는 거대한 컴퓨터 통신망을 의미합니다.<br>");
            print("이러한 인터넷은 클라이언트와 서버로 구성되며,<br>
            TCP/IP라는 기본 프로토콜을 통해 제공되고 있습니다.<br>");
        }    basic 이라는 함수를 실행하면 print 안의 내용이 출력된다. 

        basic();
        */
    ?>
    <h2>parameter &amp; argument </h2>
    <?php 
    function sum($left, $right) {
        print($left+$right);
        print("<br>");
    }

    sum(2,4);   // input real data --> 
    sum(4,44);

    ?>

    <h2>return (출력값) </h2>
    <?php
        function sum2($left, $right) {
            return $left + $right;
            // return 이후로는 함수 종료
        }
        print(sum2(20, 40));
        //  email('xmfl34@naver.com', sum2(20,40)); 코드 예시
        // upload('xmfl34.net', sum2(20,40)); 코드 예시 
        file_put_contents('result.txt', sum2(20,40));  // 코드 예시 
    ?>

</body>
</html>