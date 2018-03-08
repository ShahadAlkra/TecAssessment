<!DOCTYPE html>
<html lang="en">
<head>
<title>SMovies</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="FPlayout.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<?php
   include "info.php";
  include_once "navi.php";
?>
    <h1> More Movie detalis </h1>
    <hr>
    <ul>
      <?php
        include_once "api/api_movie_id.php";
        foreach($movie_id->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></li>";
        }
      ?>
    </ul>
	
	<?php
 
  include_once "footer.php";
?>

</body>
</html>


