<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Feed</title>
  
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
  <!-- fotorama.css & fotorama.js. -->
  <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.2/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.2/fotorama.js"></script> <!-- 16 KB -->
</head>
<body class="outputBody">
<div class="container contentFeed"></div>
<!-- Photos -->
<div class="fotorama"
  data-width="100%"
  data-height="100%"
  data-shuffle="true"
  data-loop="true"
  data-autoplay="5000"
  data-arrows="false"
  data-nav="false"
>
  <img src="images/1.jpg" alt="">
  <img src="images/2.jpg" alt="">
  <img src="images/3.jpg" alt="">
  <img src="images/4.jpg" alt="">
  <img src="images/5.jpg" alt="">
  <img src="images/6.jpg" alt="">
  <img src="images/7.jpg" alt="">
  <img src="images/8.jpg" alt="">
  <img src="images/9.jpg" alt="">
  <img src="images/10.jpg" alt="">
  <img src="images/11.jpg" alt="">
  <img src="images/12.jpg" alt="">
  <img src="images/13.jpg" alt="">
  <img src="images/14.jpg" alt="">
  <img src="images/15.jpg" alt="">
  <img src="images/16.jpg" alt="">
  <img src="images/17.jpg" alt="">
  <img src="images/18.jpg" alt="">
  <img src="images/19.jpg" alt="">
  <img src="images/20.jpg" alt="">
  <img src="images/31.jpg" alt="">
  <img src="images/32.jpg" alt="">
  <img src="images/33.jpg" alt="">
  <img src="images/34.jpg" alt="">
  <img src="images/35.jpg" alt="">
  <img src="images/36.jpg" alt="">
  <img src="images/37.jpg" alt="">
  <img src="images/38.jpg" alt="">
  <img src="images/39.jpg" alt="">
  <img src="images/40.jpg" alt="">
  <img src="images/41.jpg" alt="">
  <img src="images/43.jpg" alt="">
  <img src="images/43.jpg" alt="">
  <img src="images/44.jpg" alt="">
  <img src="images/45.jpg" alt="">
  <img src="images/46.jpg" alt="">
  <img src="images/47.jpg" alt="">
  <img src="images/48.jpg" alt="">
  <img src="images/49.jpg" alt="">
  <img src="images/50.jpg" alt="">
  <img src="images/51.jpg" alt="">
  <img src="images/52.jpg" alt="">
  <img src="images/53.jpg" alt="">
  <img src="images/54.jpg" alt="">
  <img src="images/55.jpg" alt="">
  <img src="images/56.jpg" alt="">
  <img src="images/57.jpg" alt="">
  <img src="images/58.jpg" alt="">
  <img src="images/59.jpg" alt="">
  <img src="images/60.jpg" alt="">
  <img src="images/61.jpg" alt="">
  <img src="images/62.jpg" alt="">
  <img src="images/63.jpg" alt="">
  <img src="images/64.jpg" alt="">
  <img src="images/65.jpg" alt="">
  <img src="images/66.jpg" alt="">
  <img src="images/67.jpg" alt="">
  <img src="images/68.jpg" alt="">
  <img src="images/69.jpg" alt="">
  <img src="images/70.jpg" alt="">
  <img src="images/81.jpg" alt="">
  <img src="images/82.jpg" alt="">
  <img src="images/83.jpg" alt="">
  <img src="images/84.jpg" alt="">
  <img src="images/85.jpg" alt="">
  <img src="images/86.jpg" alt="">
  <img src="images/87.jpg" alt="">
  <img src="images/88.jpg" alt="">
  <img src="images/89.jpg" alt="">
  <img src="images/90.jpg" alt="">
  <img src="images/91.jpg" alt="">
  <img src="images/92.jpg" alt="">
  <img src="images/93.jpg" alt="">
  <img src="images/94.jpg" alt="">
  <img src="images/95.jpg" alt="">
  <img src="images/96.jpg" alt="">
  <img src="images/97.jpg" alt="">
  <img src="images/98.jpg" alt="">
  <img src="images/99.jpg" alt="">
  <img src="images/100.jpg" alt="">
</div>



<!-- <div class="ticker">
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
</script> -->

</body>
<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>