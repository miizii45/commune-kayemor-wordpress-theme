<?php
/**
 * Generate theme screenshot
 * 
 * This file is used to generate the theme screenshot that appears in the WordPress admin
 */

// Set content type
header('Content-Type: image/png');

// Create image
$width = 1200;
$height = 900;
$image = imagecreatetruecolor($width, $height);

// Colors
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 26, 26, 26);
$blue = imagecolorallocate($image, 0, 123, 255);
$gray = imagecolorallocate($image, 108, 117, 125);

// Fill background
imagefill($image, 0, 0, $white);

// Add header bar
imagefilledrectangle($image, 0, 0, $width, 80, $black);

// Add logo text
$font = __DIR__ . '/assets/fonts/Poppins-Bold.ttf';
imagettftext($image, 24, 0, 50, 50, $white, $font, 'Commune de Kayemor');

// Add hero section
imagefilledrectangle($image, 0, 80, $width, 400, $blue);
imagettftext($image, 40, 0, 100, 200, $white, $font, 'Bienvenue à la');
imagettftext($image, 60, 0, 100, 280, $white, $font, 'Commune de Kayemor');

// Add content sections
$y = 450;
for ($i = 0; $i < 3; $i++) {
    imagefilledrectangle($image, 100, $y, ($width - 100), ($y + 100), $white);
    imagerectangle($image, 100, $y, ($width - 100), ($y + 100), $gray);
    $y += 150;
}

// Output image
imagepng($image);
imagedestroy($image);
