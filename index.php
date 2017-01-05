<html>
<head>
  <title></title>
  <?php
    include 'inject-header.txt';
  ?>
  
  
  <style>
    .icon-item {
    display: inline-block;
   // float: left;
   color: white;
   font-family: sans-serif;
   text-align: center;
   padding: 10px;
   font-size: small;
    }
    .icon__ {
      margin-top: 15px;
    }
    h1 {
       color: white; text-align: center;
   //font-family: sans-serif;
    }
    
  </style>
</head>
<body style="background-color: black;">


<div class="bio-banner">


<h1>Story Banner</h1>


<?php
$arr = array('bling', 'build', 'capture', 'clay', 'cook', 'decorate', 'design', 'draw', 'paint', 'print', 'roast', 'sculpt', 'stitch', 'weave');
foreach ($arr as $val) echo '<div class="icon-item">' . $val . '<div class="icon__ ' . $val . '--"></div></div>';
?>



</div>


<div id="feature-section" style="padding: 55px 34px 50px 34px;">

<h1>Featured Story</h1>


<?php
$arr = array('bling', 'build', 'capture', 'clay', 'cook', 'decorate', 'design', 'draw', 'paint', 'print', 'roast', 'sculpt', 'stitch', 'weave');
foreach ($arr as $val) echo '<div class="icon-item">' . $val . '<div class="icon__ ' . $val . '--"></div></div>';
?>
</div>

</body>
</html>
