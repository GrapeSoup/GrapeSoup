<?php

namespace App\Traits\User;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

trait UploadFiles
{
    /**
     * @param        $file
     * @param string $disk
     *
     * @return mixed
     */
    public function uploadAvatarAndReturnUrl ($file, $disk = 'dospace')
    {
        return Storage::disk($disk)->putFile('avatars', new File($file), 'public');
    }

    /**
     * @param        $file
     * @param string $disk
     *
     * @return mixed
     */
    public function uploadImageAndReturnUrl ($file, $disk = 'dospace')
    {
        return Storage::disk($disk)->putFile('images', new File($file), 'public');
    }

    /**
     * @param        $file
     * @param string $disk
     *
     * @return mixed
     */
    public function uploadVideoAndReturnUrl ($file, $disk = 'dospace')
    {
        return Storage::disk($disk)->putFile('videos', new File($file), 'public');
    }
}