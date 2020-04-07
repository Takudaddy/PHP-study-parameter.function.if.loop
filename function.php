<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Function</title>
  </head>


  <body>
     <h1>Function</h1>
       <?php
           $poem ="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
           exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
           irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
           nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
           qui officia deserunt mollit anim id est laborum.";

           echo $poem;
         ?>

        <h2>strlen()</h2>
           <?php
            echo strlen($poem);
           ?>


        <h2>nl2br</h2> <!-- 줄바꿈 / -->
           <?php
            echo nl2br($poem);
           ?>
  </body>
</html>
