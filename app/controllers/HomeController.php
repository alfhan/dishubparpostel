<?php

use app\models\DataInstansi;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function index($param='home')
	{
		$dataInstansi = DataInstansi::find(1);
	    $kabKotaId = $dataInstansi->kabkota_id;

		$tower = Tower::whereKabkotaId($kabKotaId)->whereRaw(" gambar != '' ")->get();
		$data['tower'] = $tower;
		return View::make($param,$data);
	}
	public function showWelcome()
	{
		return View::make('hello');
	}

}
