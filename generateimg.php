<?
$image = $pfad.$bildname;   // Bilddatei 
$scale = 80;               // In Prozent 

if(!isset($viewwidth) OR $viewwidth == "")
  {
  $viewwidth = round($breite);
  }
else
  {
  $viewwidth = round($viewwidth);
  }

$size      = GetImageSize($image);
$width     = $size[0];
$height    = $size[1];
$type      = $size[2];
$newwidth  = $viewwidth;
$bildverhaeltnis = ($width / $height);
$newheight = round($newwidth / $bildverhaeltnis);


if($type==1){
header ("Content-type: image/gif"); 
$src = imagecreatefromgif("$image"); 
$im = imagecreatetruecolor($newwidth,$newheight);
}

if($type==2){
header ("Content-type: image/jpeg"); 
$src = imagecreatefromjpeg("$image"); 
$im = imagecreatetruecolor($newwidth,$newheight);
}


if($type==3){
header ("Content-type: image/png"); 
$scr = imagecreatefrompng("$image");
$im = imagecreatetruecolor($newwidth,$newheight);
}

//$bgc = ImageColorAllocate ($im, 255, 255, 255);
//$tc = ImageColorAllocate ($im, 0, 0, 0);
 
imagecopyresized($im,$src,0,0,0,0,$newwidth,$newheight,$width,$height); 
imagejpeg($im,'',$scale); 
imagegif($im,'',$scale);
imagepng($im,'',$scale);
imagedestroy($im); 
?> 
