<?php
$api_key = 'AIzaSyBixvWwZ1zBB9SOesBLVtIlFAnaleO-mk4';
$playlist_id =  'PL3WXh3PJUuW4PHIGmGqZw9LeQ4snuDd4k'; 
$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $api_key;
      
$playlist = json_decode(file_get_contents($api_url));
//print_r($playlist);exit();
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<ul>
<?php foreach($playlist->items AS $item): ?>
  <li><h4><?php echo $item->snippet->title  ."</br>". $item->snippet->resourceId->videoId?></h4></li>
<?php endforeach; ?>
</ul>
</body>
</html>