<?php 
  ini_set('display_errors',1);
  //define the width and height of our images
  define("WIDTH", 200);
  define("HEIGHT", 133);
  
  //functions
  function makeImage($source_image_path){
    list($source_image_width, $source_image_height, $source_image_type) = getimagesize($source_image_path);
    switch ($source_image_type) {
        case IMAGETYPE_GIF:
            $source_gd_image = imagecreatefromgif($source_image_path);
            break;
        case IMAGETYPE_JPEG:
            $source_gd_image = imagecreatefromjpeg($source_image_path);
            break;
        case IMAGETYPE_PNG:
            $source_gd_image = imagecreatefrompng($source_image_path);
            break;
    }
    return $source_gd_image;
  }

  //Clean Up POST VARIABLES
  $background = filter_var($_POST["background"], FILTER_SANITIZE_STRING);
  $foreground = filter_var($_POST["foreground"], FILTER_SANITIZE_STRING);
  $sharing = filter_var($_POST["sharing"], FILTER_SANITIZE_STRING);
  $text       = filter_var($_POST["text"], FILTER_SANITIZE_STRING);
  $fontsize   = filter_var($_POST["fontsize"], FILTER_VALIDATE_INT);

  $dest_image = imagecreatetruecolor(WIDTH, HEIGHT);
  
  //make sure the transparency information is saved
  imagesavealpha($dest_image, true);
  
  //create a fully transparent background (127 means fully transparent)
  $trans_background = imagecolorallocatealpha($dest_image, 0, 0, 0, 127);
  
  //fill the image with a transparent background
  imagefill($dest_image, 0, 0, $trans_background);
  
  //make create image resources out of the images

  $backgroundImage = imagecreatefrompng('./backgrounds/'.$background.'.png');
  if(isset($_FILES["backgroundFile"]["tmp_name"]) && $_FILES["backgroundFile"]["tmp_name"] !='' ){
    $backgroundImage = makeImage($_FILES["backgroundFile"]["tmp_name"]);
  }
  $foregroundImage = imagecreatefrompng('./foregrounds/'.$foreground.'.png');
  
  $sharingImage = imagecreatefrompng('./sharing/'.$sharing.'.png');

  
  // FONT
  putenv('GDFONTPATH=' . realpath('.'));
  $font = 'arial';
  
  //copy each png file on top of the destination (result) png
  imagecopy($dest_image, $backgroundImage, 0, 0, 0, 0, WIDTH, HEIGHT);
  imagecopy($dest_image, $foregroundImage, 0, 0, 0, 0, WIDTH, HEIGHT);
  imagecopy($dest_image, $sharingImage, 175, 0, 0, 0, 25, 25);

  $white = imagecolorallocate($dest_image, 255, 255, 255);
  imagettftext($dest_image, $fontsize, 0, 50, 125, $white, $font, $text);
  
  //send the appropriate headers and output the image in the browser
  header('Content-Type: image/png');
  header('Content-Disposition: Attachment;filename=image.png'); 
  imagepng($dest_image);

  //destroy all the image resources to free up memory
  imagedestroy($backgroundImage);
  imagedestroy($foregroundImage);
  imagedestroy($sharingImage);

  imagedestroy($dest_image);

?>