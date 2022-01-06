<?php

namespace App\Libraries;
use Image;
class uploadFile
{

    private $imagePath = "\upload\images";
    private $soundPath = "\upload\sound";
    private $filmPath = "\upload\film";
    private $documentPath = "\upload\document";
    private $archivePath = "\upload\archive";

    public function image($file,$url,$with,$height)
    {
       // 'required|mimes:jpeg,png,bmp,jpg,JPG,PNG,BMP',
        $filename = time().'.'. $file->getClientOriginalName();
        $img =Image::make($file->getRealPath());
        $pattmp=public_path($this->imagePath.'/'.$url.'/tmp/');
        $patorg=public_path($this->imagePath.'/'.$url.'/');
        $img->resize($with, $height)->save($pattmp.$filename);
        $file = $file->move($patorg,$filename);
        return $filename;
    }

    public function uploadSource($file1)
    {

        $sourcePath = "\upload\sources";
        $filename1 =  time().'.'.$file1->getClientOriginalName();
        $file1 = $file1->move(public_path($sourcePath),$filename1);
        return $filename1;
    }
    public function showMedia($url , $media , $alt)
    {
        $type = explode('.',$media);
        switch ($type[2])
        {
            case 'PNG'||'png'||'jpg'||'JPG'||'jpeg'||'JPEG'||'bmp'||'BMP':
                    $htmlCod='
                        <img src="'.$url.'/'.$media.'"  alt="'.$alt.'" title="'.$alt.'" width="100%" >"
                    ';
                    return $htmlCod;
                break;
            case 'mp4':
                break;

        }

    }
}
