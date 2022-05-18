<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    Hello. Mr.<?php echo $_GET['name'];  ?> Welcome
    <!-- url으로 넘어온 name data -->
    <!-- GET 을 통해 URL 로 데이터 바꿈.  -->
    Do you like <?php echo $_GET['food']; ?>??
     I provide it as many as we can.
    <!-- Add input data?? use & mark -->
</body>
</html>