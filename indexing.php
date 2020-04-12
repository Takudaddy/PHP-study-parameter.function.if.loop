<?php
function print_title(){
  if(isset($_GET['id']))
    {echo $_GET['id'];}
  else
    {echo "Welcome";}
}




function print_description(){
  if(isset($_GET['id']))
  {echo file_get_contents("data/".$_GET['id']);}
  else {echo "You did it!";}
}





function print_list(){
  $list = scandir('./data');

   $i = 0;
   while($i < count($list))
   {
    if($list[$i] != '.')
   {if($list[$i] != '..')
   {echo "<li>
          <a href=\"indexing.php?id=$list[$i]\">
          $list[$i]
          </a>
          </li>\n";}}
   $i = $i + 1;
   }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php print_title(); ?></title>
  </head>


  <body>

      <h1><a href="indexing.php">WEB</a></h1>
<!-- .ㅇ은 현재 디렉토 / ..은 부모 디렉토리 -->
          <ol>
            <?php
              print_list();

              /*echo "<li>$list[3]</li>\n";
              echo "<li>$list[5]</li>\n";
              echo "<li>$list[1]</li>\n";
              echo "<li>$list[4]</li>\n";*/
            ?>
          </ol>

          <a href="create.php">create</a>

          <?php if(isset($_GET['id'])) { ?>
              <a href="update.php?id=<?=$_GET['id']?>">update</a>

              <form action="delete_process.php" method="post">
              <input type="hidden" name="id" value="<?=$_GET['id']?>">
              <input type="submit" value="delete">
              </form>
                                  <?php } ?>

         <!-- <a href="update.php?id=<?php// echo $_GET['id'];?>">update</a> -->

      <h2>
          <?php
            print_title();
          ?>
      </h2>

          <?php
               print_description();
          ?>


  </body>
</html>
