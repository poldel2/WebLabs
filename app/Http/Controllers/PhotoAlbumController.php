<?php

namespace App\Http\Controllers;

use App\Models\Model_PhotoAlbum;

class PhotoalbumController extends Controller
{
    public function action_index()
    {
        $model = new Model_PhotoAlbum();
        $data = $model->get_data();

        return view('photoAlbum_view', compact('data'));
    }
}