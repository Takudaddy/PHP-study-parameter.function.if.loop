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
          <ol>
            <?php
              print_list();
            ?>
          </ol>

          <h2>

            <form action="update_process.php" method="post">
            <input type="hidden" name="old_title" value="<?$_GET['id']?>">
              <p>
                 <input type="text"
                  name="title"
                  placeholder="Title"
                  value=<?php print_title();?>>
              </p>

              <p>
                  <textarea name="description"
                   placeholder="hit me"><?php print_description();?></textarea>
              </p>

              <p>
                 <input type="submit">
              </p>
            </form>


  </body>
</html>
