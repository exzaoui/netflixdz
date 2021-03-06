<?php

    function getCatSerie($cat_id){
        $dbc = mysqli_connect('localhost', 'root', '', 'netflixdz');
        mysqli_set_charset($dbc, 'utf8');
        $q="SELECT * FROM `category` WHERE id=$cat_id";
        $r=mysqli_query($dbc,$q);
        $catInfo=mysqli_fetch_assoc($r);
        return($catInfo);
    }

    function getSerie($serie_id){
        $dbc = mysqli_connect('localhost', 'root', '', 'netflixdz');
        mysqli_set_charset($dbc, 'utf8');
        $q="SELECT * FROM `series` WHERE id=$serie_id";
        $r=mysqli_query($dbc,$q);
        $serieInfo=mysqli_fetch_assoc($r);
        return($serieInfo);
    }

    function getSeason($season_id){
        $dbc = mysqli_connect('localhost', 'root', '', 'netflixdz');
        mysqli_set_charset($dbc, 'utf8');
        $q="SELECT * FROM `season` WHERE id=$season_id";
        $r=mysqli_query($dbc,$q);
        $seasonInfo=mysqli_fetch_assoc($r);
        return($seasonInfo);
    }

    function getEpisode($episode_id){
        $dbc = mysqli_connect('localhost', 'root', '', 'netflixdz');
        mysqli_set_charset($dbc, 'utf8');
        $q="SELECT * FROM `episodes` WHERE id=$episode_id";
        $r=mysqli_query($dbc,$q);
        $episodeInfo=mysqli_fetch_assoc($r);
        return($episodeInfo);
    }

    function youtubeVideosFromPlaylist($playlist){
        $api_key = 'AIzaSyBixvWwZ1zBB9SOesBLVtIlFAnaleO-mk4';
        $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist . '&key=' . $api_key;

        $playlistInfo = json_decode(file_get_contents($api_url));
        return $playlistInfo;
    }
?>