

<?php
require_once ('connect.php');
require_once ('includes/function.inc.php');
include_once('includes/header.inc.html');
if(isset($_GET['season'])){
    $season_id=mysqli_real_escape_string($dbc,trim($_GET['season']));
}else{
    header('location:index.php');
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
        $q="select * from episodes where season_id='$season_id';";
        $r=mysqli_query($dbc,$q);
        if($r){
        while($episodes=mysqli_fetch_assoc($r)){
        ?>
        <!-- Basic Card Example -->
        <div class="col-md-3 text-center" style="margin-bottom: 20px;">
            <div class="card" style="width: 18rem;">
                <a href="watch.php?e=<?= $episodes['id'] ?>"><img src="img/a.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <a href="watch.php?e=<?= $episodes['id'] ?>"><h5 class="card-title"><?= "Episode ".$episodes['num']." - ".$episodes['title'] ?></h5></a>
                    <a href="watch.php?e=<?= $episodes['id'] ?>" class="btn btn-danger">Regarder maintenant</a>
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