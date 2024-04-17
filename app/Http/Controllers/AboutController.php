<?php
namespace App\Http\Controllers;
class AboutController extends Controller
{
	function action_index()
	{	
		return view('about');
	}
}