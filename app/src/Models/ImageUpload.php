<?php

namespace SRC\Models;

class ImageUpload {

    function checkImage($image)
    {
        var_dump($maxSize = 200000);
        $validExt = array('.jpg','.png','.gif','.jpeg');

        if($image['error'] > 0)
        {
            echo "Une erreur est arrivée lors du transfert";
            die;
        }

        $fileSize = $image['size'];

        if($fileSize > $maxSize)
        {
            echo $fileSize;
            die;
        }

        $fileName = $image['name'];
        $fileExt = ".".strtolower(substr(strrchr($image['name'],'.'),1));

        if(!in_array($fileExt, $validExt)){
            echo "Le fichier n'est pas une image";
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