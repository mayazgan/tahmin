<body bgcolor="#e3d5b5">
  <?php
  session_start();
  if(!$_SESSION){
    header('Location: index.php');
  }
  ?>
  <link rel="stylesheet" href="index2-css.css">
<table style="border-collapse: collapse;margin-left: -6px;">
<tr><td><h1 style="text-shadow: 3px 3px 4px #000;color: #e3d5b5;font-size: 120px;text-align: center;">Tebrikler Bildinnn!<br><a style="text-decoration: none; color: orange;" href="index.php">Tekrar Oyna</a></h1>
<div style="margin-top: -25px" align="center"><button style='box-shadow: 3px 3px 4px #000;font-size: 20px;border-radius: 50px;border: none;background-color: #333;color: #eee;cursor: pointer;' id='btnFullscreen' type='button'>Tam Ekran &#x26F6;</button></div>
</td><td id="myiframe" style="padding-right: 20px">
<div style="box-shadow: 3px 3px 4px #000;" align="center" id="scroller">
          <iframe id="myiframe" src="kuran.pdf#page=<?php
              echo $_SESSION['tutsayi'];
              session_destroy();
          ?>"></iframe>
</div>
</td>
</tr>
</table>
<script src="firework.js"></script>
<script src="fscreen.js"></script>
</html>
