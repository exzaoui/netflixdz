

<?php
require_once ('connect.php');
require_once ('includes/function.inc.php');
include_once('includes/header.inc.html');
if(isset($_GET['serie'])){
    $serie_id=mysqli_real_escape_string($dbc,trim($_GET['serie']));
}else{
    header('location:index.php');
}
$serie_info=getSerie($serie_id);
$serie_cat_id=$serie_info['cat_id'];
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $serie_info['title'] ?></h1>
    </div>

    <div class="row">

        <?php
        $q="select * from season where serie_id='$serie_id';";
        $r=mysqli_query($dbc,$q);
        if($r){
            while($season=mysqli_fetch_assoc($r)){
                //echo $season['img'];exit();
                ?>
                <!-- Basic Card Example -->
                <div class="col-md-6 text-center" style="margin-bottom: 20px;">
                    <div class="card">
                        <a href="episode.php?season=<?= $season['id'] ?>"><img src="<?= $season['img'] ?>" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="episode.php?season=<?= $season['id'] ?>" style="color: #000839;"><h5 class="card-title">Saison <?= $season['num'] ?></h5></a>
                            <a href="episode.php?season=<?= $season['id'] ?>" class="btn btn-danger">Regarder maintenant</a>
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

    <h3 class="text-center">Séries Similaires</h3>

    <div class="row">

        <?php
        $q="select * from series where cat_id=$serie_cat_id and id != $serie_id ORDER BY RAND() LIMIT 4; ";
        $r=mysqli_query($dbc,$q);
        if($r){
            while($serie=mysqli_fetch_assoc($r)){
                ?>
                <!-- Basic Card Example -->
                <div class="col-md-3 text-center" style="margin-bottom: 20px;">
                    <div class="card">
                        <a href="seasons.php?serie=<?= $serie['id'] ?>"><img src="<?= $serie['img'] ?>" class="card-img-top" alt="..."></a>
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