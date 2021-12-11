<html>
<body style="margin-top: 7%">
<link rel="stylesheet" href="index-css.css">
<div align="center">
<?php
if(!$_POST){// POST olayı yoksa yani sayfa ilk kez açılıyorsa
   $sayi=rand(0,606); // bulunması gereken sayı rastgele üretiliyor
   $mesaj="<h3 style='color: #111'>Bir sayı tuttum bil bakalım kaç!</h3>";
}
else{ // POST olayı varsa yani sayı tahmin edildiyse
   $tahmin=$_POST["tahmin"];
   $sayi=$_POST["sayi"];
   if($tahmin>$sayi)
      $mesaj="<h3 style='color: #222'>Tuttuğum sayı daha küçük</h3>";
   elseif($tahmin<$sayi){
      $mesaj="<h3 style='color: #222'>Tuttuğum sayı daha büyük</h3>";
      }
   else{
      header("Location: index2.php");
   }
}
?>
<?php

  session_start();
  $_SESSION["tutsayi"] = $sayi;

?>
   <form name="form1" method="post" action="index.php" autocomplete="off">
      <p><font size="50"><b style="text-shadow: 3px 3px 4px #000;color: #e3d5b5;font-size: 90px"> Tahmin: </b></p>

      &#8886;<input style='text-shadow: 3px 3px 4px #000;box-shadow: 3px 3px 4px #000;font-size: 50px;border-radius: 50px;border: none;text-align: center'  maxlength="3" min="0" max="606" type="text" name="tahmin" title="0 ile 606 arasında :)" pattern="\d*" required autofocus>&#8887;<br>
      <input type="text" name="sayi" value="<?php echo $sayi;?>" hidden><br>
      <input style='box-shadow: 3px 3px 4px #000;font-size: 55px;border-radius: 50px;border: none;background-color: blue;color: #eee;cursor: pointer' type="submit" name="tahminet" value="   Tahmin Et   ">
  </form>
<?php
echo $mesaj;
?>
</div>
</body>
</html>
