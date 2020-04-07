<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
       <h1>If-Conditional</h1>

       <h2>조건</h2>
          <?php
             echo '1<br>';
                if(true)
                {echo '2<br>';}
             echo '3<br>';
           ?>
<br>
           <?php
              echo '1<br>';
                 if(false)
                 {echo '2<br>';}
              echo '3<br>';
            ?>
<br>
            <?php
              echo '1<br>';
                 if(true)
                 {echo '2-1<br>';}
                 else
                 {echo '2-2<br>';}
              echo '3<br>';
            ?>

<br>
            <?php
              echo '1<br>';
                  if(false)
                  {echo '2-1<br>';}
                  else
                  {echo '2-2<br>';}
              echo '3<br>';
            ?>


  </body>
</html>
