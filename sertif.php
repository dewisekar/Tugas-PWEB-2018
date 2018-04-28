<?php	
	$namaanda  = $_POST['in_namaanda'];
	
	function watermark_text($source_img, $wm_text) {
	$imagetobewatermark=imagecreatefromjpeg($source_img);
//	$font="../font/century gothic.ttf";

	$font="arialroundedbold.ttf";
	$fontsize="45";
	$img_w = imagesx($imagetobewatermark);
    $img_h = imagesy($imagetobewatermark);
	$text_box = imagettfbbox($fontsize,0,$font,$wm_text);
	$text_width = $text_box[2]-$text_box[0];
	$text_height = $text_box[7]-$text_box[1];
	$dst_x = ($img_w*0.5) - ($text_width*0.5);
	$dst_y = ($img_h*0.425);
	$white = imagecolorallocate($imagetobewatermark, 0, 0, 0);
	imagettftext($imagetobewatermark, $fontsize, 0, $dst_x, $dst_y, $white, $font, $wm_text);
	
	header("Content-type:image/jpg");
	imagejpeg($imagetobewatermark);
	imagedestroy($imagetobewatermark);	
}

$gambar_asli = "assets/img/quiz/typeb.jpg";
watermark_text($gambar_asli, $namaanda);
?>