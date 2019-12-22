<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravolt\Avatar\Facade as Avatar;

class AvatarController extends Controller
{
    public function outputImage() 
    {
        $data['image_1'] = Avatar::create('Henry Lee')->setBackground(sprintf('#%06X', mt_rand(0, 0xFFFFFF)))->setDimension(300)->toBase64();
        $data['image_2'] = Avatar::create('Henry Lee')->setBackground(sprintf('#%06X', mt_rand(0, 0xFFFFFF)))->setDimension(300)->toBase64();
        $data['image_3'] = Avatar::create('Henry Lee')->setBackground(sprintf('#%06X', mt_rand(0, 0xFFFFFF)))->setDimension(300)->toBase64();
		return response()->view('avatar', $data, 200);
    }
}
