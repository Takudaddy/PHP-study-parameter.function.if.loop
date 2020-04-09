<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>


  <body>
    <h1>Array</h1>

      <?php
          $family = array('taku', 'yaong', 'wangwang', 'son');
    echo $family[1].'<br>';
    echo $family[3].'<br>';
    var_dump(count($family));
    array_push($family, 'daughter');
    var_dump($family);
    ?>
  </body>
</html>
