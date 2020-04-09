<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>


  <body>
    <h1>Array</h1>

      <?php
        $family = array('taku','yaong','wangwang','son');
        echo $family[0].'<br>';
        echo $family[3].'<br>';
        echo count($family).'<br>';
        var_dump(count($family).'<br>');

        array_push($family,"son2").'<br>';
        print_r($family).'<br>';
        

    ?>
  </body>
</html>
