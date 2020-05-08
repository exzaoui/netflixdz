<?php
require_once('connect.php');

if(isset($_POST['addSerie'])){
$category1=$_POST['category1'];
$title1=$_POST['title1'];
include('upload_file1.php');

$q="INSERT INTO `series`(`title`, `cat_id`, `img`) VALUES ('$title1','$category1','$file_name')";
$r=mysqli_query($dbc,$q);
header('location:add.php?success1');
}

if(isset($_POST['addSeason'])){
  $serie1=$_POST['serie1'];
  $num1=$_POST['num1'];
  include('upload_file2.php');
  
  $q="INSERT INTO `season`(`num`,`serie_id`, `img`) VALUES ('$num1','$serie1','$file_name')";
  $r=mysqli_query($dbc,$q);
  header('location:add.php?success2');
  }

  if(isset($_POST['addEpisode'])){
    $serie2=$_POST['serie2'];
    $season=$_POST['season'];
    $nbrEp=$_POST['nbrEp'];
    $url=$_POST['url'];
    
    for ($i=1; $i <= $nbrEp; $i++) { 
      $q="INSERT INTO `episodes`(`num`, `serie_id`, `season_id`) VALUES ('$i','$serie2','$season')";
      $r=mysqli_query($dbc,$q);
    }
    
    header('location:addEp.php?serie='.$serie2.'&season='.$season.'&url='.$url);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>add</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h3 class="text-center">Ajouter une série</h3>
      <?php
      if(isset($_GET['err_img1'])){
        ?>
        <div class="alert alert-danger">
          <strong>Erreur!</strong> Erreur
        </div>
        <?php }elseif(isset($_GET['success1'])){ ?>
          <div class="alert alert-success">
          <strong>Success!</strong> Success
        </div>
        <?php } ?>
      
          
          <form action="add.php" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="category">Catégories</label>
                <select class="form-control" name="category1">
                <option value=""></option>
                <?php
                $q="SELECT * FROM `category`";
                $r=mysqli_query($dbc,$q);
                while($row=mysqli_fetch_assoc($r)){
                ?>
                  <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <input type="text"
                  class="form-control" name="title1" aria-describedby="helpId" placeholder="Titre de la série">
              </div>

              <div class="form-group">
                <label for="img">Image de la série 480/360</label>
                <input type="file" class="form-control-file" name="fileToUpload" placeholder="Image de la série">
              </div>

              <button type="submit" name="addSerie" class="btn btn-primary btn-block">Add</button>
          </form>
        <hr>
      <h3 class="text-center">Ajouter une saison</h3>
      <?php
      if(isset($_GET['err_img2'])){
        ?>
        <div class="alert alert-danger">
          <strong>Erreur!</strong> Erreur
        </div>
        <?php }elseif(isset($_GET['success2'])){ ?>
          <div class="alert alert-success">
          <strong>Success!</strong> Success
        </div>
        <?php } ?>
          
          <form action="add.php" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="serie">Série</label>
                <select class="form-control" name="serie1">
                  <option value=""></option>
                  <?php
                $q="SELECT * FROM `series`";
                $r=mysqli_query($dbc,$q);
                while($row=mysqli_fetch_assoc($r)){
                ?>
                  <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <input type="number"
                  class="form-control" name="num1" aria-describedby="helpId" placeholder="Num de la saison">
              </div>

              <div class="form-group">
                <label for="img">Image de la saison 851/315</label>
                <input type="file" class="form-control-file" name="fileToUpload" placeholder="Image de la saison">
              </div>

              <button type="submit" name="addSeason" class="btn btn-primary btn-block">Add</button>
          </form>
      <hr>
      <h3 class="text-center">Ajouter une episode</h3>
      <?php
      if(isset($_GET['success3'])){
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong> Success
        </div>
        <?php } ?>
          
          <form action="add.php" method="post">

              <div class="form-group">
                <label for="serie">Série</label>
                <select class="form-control" name="serie2">
                  <option value=""></option>
                  <?php
                $q="SELECT * FROM `series`";
                $r=mysqli_query($dbc,$q);
                while($row=mysqli_fetch_assoc($r)){
                ?>
                  <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="season">saison</label>
                <select class="form-control" name="season">
                  <option value=""></option>
                  <?php
                $q="SELECT * FROM `season`";
                $r=mysqli_query($dbc,$q);
                while($row=mysqli_fetch_assoc($r)){
                  $s_id=$row['serie_id'];

                  $sq="SELECT * FROM `series` WHERE id='$s_id'";
                  $sr=mysqli_query($dbc,$sq);
                  $srow=mysqli_fetch_assoc($sr);
                ?>
                  <option value="<?= $row['id'] ?>"><?= $srow['title']." ".$row['num'] ?></option>
                <?php } ?>
                </select>
              </div>

              <div class="form-group">
                  <input type="text"
                         class="form-control" name="url" aria-describedby="helpId" placeholder="Url">
              </div>

              <button type="submit" name="addEpisode" class="btn btn-primary btn-block">Add</button>
          </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>