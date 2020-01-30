<?php
  $image = 'image.png';
  list($original_width,$orignal_height) = getimagesize($image);
  $final_image = imagecreatetruecolor($original_width,$orignal_height);
  $original_image = imagecreatefrompng($image);
  $waterMark = imagecreatefrompng('water-mark.png');
  list($waterMark_Width,$waterMark_Height) = getimagesize('water-mark.png');
  imagecopy(
    $final_image,
    $original_image,
    0,
    0,
    0,
    0,
    $original_width,
    $orignal_height);
    imagecopy(
      $final_image,
      $waterMark,
      100,
      500,
      0,
      0,
      $waterMark_Width,
      $waterMark_Height);
    imagepng($final_image,'img/image+water-mark.png');
    echo "criada com sucesso a watermark";
?>