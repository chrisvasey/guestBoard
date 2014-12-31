<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Output</title>
  
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/main.less" type="text/less" media="screen" />
  
  <!-- Scripts -->
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.min.js"></script>
  
  <!-- Font import -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favi.ico" type="image/vnd.microsoft.icon" />
  <link rel="icon" href="images/fav.ico" type="image/vnd.microsoft.icon" />

  <!-- Facebook Share stuff -->
  <!--   <meta property="og:image" content="images/icon.png" /> -->
  <meta property="og:title" content="Project Name" />
  <meta property="og:description" content="Project Discription"/> 
</head>
<body class="outputBody">

<div class="ticker">
  <div class="innerWrap">
<?php 
include('db.php');
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT `name`, `text` from `messages` order by `id` desc";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_object($result))
{
  //print_r($row);
  print("<div class='list'><strong>" . $row->name . ":</strong><p>" . $row->text . "</p></div>");
}

mysqli_close($conn);
?>
  </div>
</div>
  <button class="outBack"  onclick="location.href='index.html'">
    BACK
  </button>
<script src="js/jquery.easy-ticker.min.js"></script> 
  <script>
  $('.ticker').easyTicker({
    direction: 'up',
    easing: 'swing',
    speed: 'slow',
    interval: 1000,
    height: 'auto',
    visible: 0,
    mousePause: 0,
    controls: {
      up: '',
      down: '',
      toggle: '',
      playText: 'Play',
      stopText: 'Stop'
    }
  });
</script>

</body>
<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>