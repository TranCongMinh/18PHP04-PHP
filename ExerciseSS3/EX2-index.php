<?php
	$errFile = '';
	$check = true;
	if (isset($_POST['Submit'])) {
						$type_file = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
   						$size_file = $_FILES['avatar']['size'];
   						$type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
			        	$hinhanh = $_FILES['avatar']['name'];
   						$src = "img/".$hinhanh;
   						$src2 = "img2/".$hinhanh;
   						$widthTH = 20;
		if (isset($_FILES['avatar']))
			        {	
			        	
			            // Nếu file upload không bị lỗi,
			            // Tức là thuộc tính error > 0
			            if ($size_file > 5000000) {
       						 $errFile = "Invalid size (5MB)";
       						
    					}
    					if (!in_array(strtolower($type_file), $type_fileAllow)) {
        					$errFile = "Does not support files (Support jpg jpeg gjf png)";
        					
   						}
			            if ($_FILES['avatar']['error'] > 0)
			            {
			                $errFile = 'Upload error';
			                
			            }
			            else{
			                // Upload file
			                move_uploaded_file($_FILES['avatar']['tmp_name'], './img/'.$_FILES['avatar']['name']);
			               
			            }
			        	}
				        else{
				            $errFile = 'Bạn chưa chọn ảnh upload';
				            
				        }
				        if ($check) {
				        	echo "<b>Avatar : </b> <img src="."img/".$hinhanh." />";
				        	Thumbnail($url,$type_file,$hinhanh,$src2,$widthTH);
				        }
				        Thumbnail($url,$type_file,$hinhanh,$src2,$widthTH);

			function Thumbnail($src_url, $type, $src_name, $sUploadDir, $iWidth = 20) 
    {
        $dst_path = $sUploadDir; 
        $dst_name = "$src_name";
        //$scale = 0.2;
        $quality = 100; # [0-100], 100 being max.
##########################################################################

        $dst_url = $dst_path.$dst_name;

        $src_size= getimagesize("$src_url");

        # calculate h and w for thumb:
        $dst_w=    $iWidth;//$src_size[0]*$scale;
        $dst_h= $src_size[1]/$src_size[0]*$dst_w;//$scale;
        $dst_img=imagecreatetruecolor($dst_w,$dst_h);

        switch($type)
        {
            case "image/jpeg":
            case "image/pjpeg":
            case "image/jpg":    $src_img=ImageCreateFromjpeg($src_url); 
                                break;
            
            case "image/gif":    $src_img=imagecreatefromgif($src_url); 
                                break;
            case "image/x-png":
            case "image/x-png":     $src_img=imagecreatefrompng($src_url); 
                                    break;
            default:    echo "Chỉ được upload file có định dạng GIF, PNG, JPEG (JPG)! <input type=button value=\"Làm lại\" onClick=\"javascript:history.go(-1);\">";
                    exit();
        }
        imagecopyresampled($dst_img,$src_img,0,0,0,0,$dst_w,$dst_h,ImageSX($src_img),ImageSY($src_img));
        imagejpeg($dst_img,$dst_url,$quality); # output the in-memory file to disk
        imagedestroy($dst_img); # free memory. important if you create many images at once
    }
				        
	}
?>
<form action="#" method="POST" enctype="multipart/form-data">
	<p>Avatar <input type="file" name="avatar" id="avatar"></p>
	<input type="Submit" name="Submit" value="Sign">
	<span class="err"> <?php echo $errFile; ?></span>
</form>