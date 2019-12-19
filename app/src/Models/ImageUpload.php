<?php

namespace SRC\Models;

class ImageUpload {

    function checkImage($image)
    {
        var_dump($maxSize = 400000);
        $validExt = array('.jpg','.png','.gif','.jpeg');

        if($image['error'] > 0)
        {
            header('location: index.php?action=errorSendFile');
            die;
        }

        $fileSize = $image['size'];

        if($fileSize > $maxSize)
        {
            header('location: index.php?action=errorSizeImageUpdate');
            die;
        }

        $fileName = $image['name'];
        $fileExt = ".".strtolower(substr(strrchr($image['name'],'.'),1));

        if(!in_array($fileExt, $validExt)){
            header('location: index.php?action=errorFileImageUpdate');
            die;
        }
        $tmpName = $image['tmp_name'];
        $uniqueName = md5(uniqid(rand(), true));
        $fileName = "app/public/upload/". $uniqueName. $fileExt;
        $resultat = move_uploaded_file($tmpName, $fileName);

        if($resultat)
        {
            return $fileName;
        }
    }


    function removeImage($image) 
    {
        unlink($image);
    }
}