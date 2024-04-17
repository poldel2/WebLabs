<?php
namespace App\Http\Controllers;

class MainController extends Controller
{
    public function action_index()
    {
        return view('main'); // Отобразить представление study_view.blade.php
    }
}
