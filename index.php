 <?php
      require_once ('connect.php');
      include_once('includes/header.inc.html');
      if(isset($_GET['cat'])){
          $cat_id=mysqli_real_escape_string($dbc,trim($_GET['cat']));
      }
      ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cards</h1>
          </div>

          <div class="row">
              <?php
              $q="select * from series";
              if(isset($cat_id)){
                  $q.=" where cat_id=$cat_id";
              }
              $q.=";";
              $r=mysqli_query($dbc,$q);
              if($r){
                  while($serie=mysqli_fetch_assoc($r)){
                      ?>
                      <!-- Basic Card Example -->
                      <div class="col-md-3 text-center">
                          <div class="card" style="width: 18rem;">
                              <a href="seasons.php?serie=<?= $serie['id'] ?>"><img src="img/<?= $serie['img'] ?>" class="card-img-top" alt="..."></a>
                              <div class="card-body">
                                  <a href="seasons.php?serie=<?= $serie['id'] ?>"><h5 class="card-title"><?= $serie['title'] ?></h5></a>
                                  <a href="seasons.php?serie=<?= $serie['id'] ?>" class="btn btn-danger">Regarder maintenant</a>
                              </div>
                          </div>
                      </div>
              <?php
                  }
              }else{
                  echo mysqli_error($dbc);
              }
              ?>



          </div>

        </div>
        <!-- /.container-fluid -->

<?php include_once ('includes/footer.inc.html');?>