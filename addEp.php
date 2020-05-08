<?php
require_once('connect.php');
require_once ('includes/function.inc.php');

if (isset($_GET['serie']) and isset($_GET['season'])) {
  $serie_id=$_GET['serie'];
  $season_id=$_GET['season'];
  $url=$_GET['url'];
  $playlist=youtubeVideosFromPlaylist($url);
    $i=1;
  foreach($playlist->items AS $item):
  $videoId=$item->snippet->resourceId->videoId;
  $url="https://www.youtube.com/watch?v=".$videoId;
  $q="INSERT INTO `episodes`(`num`, `serie_id`, `season_id`, `url`) VALUES ('$i','$serie_id','$season_id', '$url')";
  $r=mysqli_query($dbc,$q);
  if($r){
      $i++;
  }else{
      echo mysqli_error($dbc);
  }
    endforeach;
 exit();

}else{
  echo "err";
}

if (isset($_POST['update'])) {
  $nbrEp=$_POST['nbrEp'];

  for ($i=1; $i <= $nbrEp; $i++) { 
    $url=$_POST['url'.$i];

    $q="UPDATE `episodes` SET `url`='$url' WHERE serie_id ='$serie_id' and season_id='$season_id' and num='$i'";
    $r=mysqli_query($dbc,$q);
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>addEp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h3 class="text-center">Ajouter Episodes</h3>
      
          
          <form action="addEp.php?serie=<?= $serie_id ?>&season=<?= $season_id ?>" method="post">
              <?php
              $q="SELECT * FROM `episodes` WHERE `serie_id`='$serie_id' and `season_id`='$season_id'";
              //echo $q;exit();
              $r=mysqli_query($dbc,$q);
              $num=mysqli_num_rows($r);
              while ($row=mysqli_fetch_assoc($r)) { ?>

                <div class="form-group">
                <label>URL Ep <?= $row['num'] ?></label>
                <input type="text"
                  class="form-control" name="url<?= $row['num'] ?>" aria-describedby="helpId" value="<?= $row['url'] ?>">
              </div>
              <input type="hidden" name="nbrEp" value="<?= $num ?>">

              <?php } ?>

              <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
          </form>
        
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>