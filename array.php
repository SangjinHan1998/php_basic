<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
    <body>
        <h1>Array</h1>
        <?php 
        // 괄호 안에 담고 싶은 값
        $coworkers = array('red', 'orange', 'brown', 'black'); 
        $food = array('bread', 'rice', 'chocolate', 'noodle'); 

        /* coworkers 는 배열을 담고 있다. 
            데이터 표현식 
        */
        echo $coworkers[1].'<br>';
        echo $coworkers[3].'<br>';  
        var_dump(count($coworkers));    // var_dump : 변수정보 출력함수

        array_push($coworkers, 'blue');
        array_push($coworkers, 'gray');


        ?>
    </body>
</html>