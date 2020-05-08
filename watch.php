<?php
require_once ('connect.php');
require_once ('includes/function.inc.php');
include_once('includes/header.inc.html');
if(isset($_GET['e'])){
    $episode_id=mysqli_real_escape_string($dbc,trim($_GET['e']));
}else{
    header('location:index.php');
}
$episode_info=getEpisode($episode_id);
$url=$episode_info['url'];
if ($url!="") {
    $video_id = explode("?v=", $url);
$video_id = $video_id[1];
}

$season_id=$episode_info['season_id'];
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
    </div>

    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $video_id ?>?rel=0&autoplay=1" allowfullscreen frameborder="0" ></iframe>
    </div>
    <div class="row">

        <?php
        $q="select * from episodes where season_id='$season_id' and id != $episode_id;";
        $r=mysqli_query($dbc,$q);
        if($r){
            while($episodes=mysqli_fetch_assoc($r)){
            $qs="SELECT * FROM `season` WHERE id='$season_id'";
            $rs=mysqli_query($dbc,$qs);
            $seasonInfo=mysqli_fetch_assoc($rs);

            $serie_id=$episodes['serie_id'];

            $q0="SELECT * FROM `series` WHERE id='$serie_id'";
            $r0=mysqli_query($dbc,$q0);
            $serieInfo=mysqli_fetch_assoc($r0);
        ?>
        <!-- Basic Card Example -->
        <div class="col-md-3 text-center" style="margin-bottom: 20px;">
            <div class="card">
                <a href="watch.php?e=<?= $episodes['id'] ?>"><img src="<?= $serieInfo['img'] ?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <a href="watch.php?e=<?= $episodes['id'] ?>" style="color: #000839;"><h5 class="card-title"><?= "Episode ".$episodes['num']." - ".$serieInfo['title']." S".$seasonInfo['num'] ?></h5></a>
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