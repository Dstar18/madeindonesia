<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 
    $genre = ["Horor", "drama", "action", "comedy", "romance", "family", "fantasy", "Thriller", "mystery"];

    
    foreach($genre as $row){
        echo '<div class="container p-3 my-3 border">';
        echo '<h3>'.$row.'</h3>';
        echo '<p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, doloribus numquam sint atque deleniti reiciendis animi aspernatur necessitatibus. Officiis accusamus, cupiditate magni mollitia exercitationem quo distinctio? Eaque eum corrupti dolor.</p>';
        echo '</div>';
    }
    
?>

</body>
</html>
