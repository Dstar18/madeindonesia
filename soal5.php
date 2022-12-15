<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php 
    $menu = array(
        array(
        'tabName' => 'Home',
        'content' => 'This is content for Home-tab. Please display me in the
        correct tab menu.'
        ),
        array(
        'tabName' => 'About',
        'content' => 'This is content for ABOUT. Please display me in the correct
        tab menu.'
        ),
        array(
        'tabName' => 'Contact',
        'content' => 'This is content for CONTACT. Please display me in the
        correct tab menu.'
        ),
        );
        
        echo '<nav> <div class="nav nav-tabs" id="nav-tab" role="tablist">';
        foreach($menu as $row){
            echo '<a class="nav-item nav-link" id="nav-'.$row['tabName'].'-tab" data-toggle="tab" href="#nav-'.$row['tabName'].'" role="tab" aria-controls="nav-'.$row['tabName'].'" aria-selected="false">'.$row['tabName'].'</a>'; 
        }
        echo '</div> </nav>';
        echo '<div class="tab-content" id="nav-tabContent">';
        foreach($menu as $row){
            echo '<div class="tab-pane fade" id="nav-'.$row['tabName'].'" role="tabpanel" aria-labelledby="nav-'.$row['tabName'].'-tab">'.$row['content'].'</div>';
        }
        echo '</div>';

        

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>