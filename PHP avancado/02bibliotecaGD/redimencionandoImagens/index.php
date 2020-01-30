<?php
$filename = 'image.png';
$width = 200;
$height = 200;
list($width_original, $height_original) = getimagesize($filename);
$ratio = $width_original / $height_original;

if ($width / $height > $ratio) {
  $width = $height * $ratio;
} else {
  $height = $width / $ratio;
}
$final_image = imagecreatetruecolor($width, $height);
$original_image = imagecreatefrompng($filename);

imagecopyresampled(
  $final_image,
  $original_image,
  0,
  0,
  0,
  0,
  $width,
  $height,
  $width_original,
  $height_original
);
// se for jpeg imagepng($final_image, null, qualidade do jpeg(0-100%));
// transforma o arq em uma imagem header('Content-Type: image/png');
imagepng($final_image, "img/" . md5(rand(0, 999)) . md5(rand(1000, 9999)) . ".png");
echo "imagem redimensionada com sucesso";
