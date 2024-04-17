<?php
namespace App\Http\Controllers;

use App\Models\Model_Interests;
class InterestsController extends Controller
{
	function action_index()
	{	
		$model = new Model_Interests();
        $data = $model->get_data();
		return view('interests', compact('data'));
	}
}