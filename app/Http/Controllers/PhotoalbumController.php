<?php

namespace App\Http\Controllers;

use App\Models\PhotoAlbum;

class PhotoAlbumController extends Controller
{
    public function action_index()
    {
        $model = new PhotoAlbum();
        $data = $model->get_data();

        return view('photoAlbum', compact('data'));
    }
}