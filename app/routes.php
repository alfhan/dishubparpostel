<?php
use app\models\DataInstansi;
use app\models\DataPemilik;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Halaman Awal
Route::get('/', array('uses' => 'HomeController@index'));
Route::get('/home/{page?}', 'HomeController@index');
//ADMINISTRATOR
Route::group(array('before' => 'auth'), function()
{
	//admin
	Route::controller('admin/{page}/{grafik?}', 'AdminController');	
	Route::controller('pengaturan', 'PengaturanController');	

//Tower
Route::get('admin-page', 'towerController@admintampil');
Route::get('admin-page/tower', 'towerController@admintampil');
Route::get('admin-page/tower_bts/tambah', function(){
    $dataInstansi = DataInstansi::find(1);
    $kabKotaId = $dataInstansi->kabkota_id;
    $data['kecamatan'] = Districts::whereRegencyId($kabKotaId)->get();
    $data['datapemilik'] = DataPemilik::all();
	return View::make('admin.towertambah',$data);
});
Route::post('admin-page/tower_bts/simpan', 'towerController@simpan');
Route::get('admin-page/tower_bts/show/{id}', 'towerController@show');
Route::get('admin-page/tower_bts/showbayar/{id}', 'towerController@showbayar');
Route::get('admin-page/tower_bts/edit/{id}', 'towerController@edit');
Route::post('admin-page/tower_bts/proses-edit', 'towerController@prosesEdit');
Route::post('admin-page/tower_bts/proses-editbayar', 'towerController@prosesEditbayar');
Route::get('admin-page/tower_bts/hapus/{id}', 'towerController@hapus');
Route::get('admin-page/tower_bts/hapusbayar/{id}', 'towerController@hapusbayar');
Route::get('admin-page/tower_bts/tampilbayar/{tahun?}', 'towerController@tampilpembayaran');
Route::get('admin-page/tower_bts/bayar/{id}/{tahun}', 'towerController@bayar');
Route::get('admin-page/tower_bts/editbayar/{id}', 'towerController@editbayar');
Route::post('admin-page/tower_bts/proses-bayar', 'towerController@prosesBayar');
Route::get('admin-page/tower_bts/tampil', 'towerController@tampil');

//Wartel
Route::get('admin-page/wartel', 'wartelController@admintampil');
Route::get('admin-page/wartel/tambah', function(){
	$dataInstansi = DataInstansi::find(1);
    $kabKotaId = $dataInstansi->kabkota_id;
    $data['kecamatan'] = Districts::whereRegencyId($kabKotaId)->get();
	return View::make('admin.warteltambah',$data);
});
Route::post('admin-page/wartel/simpan', 'wartelController@simpan');
Route::get('admin-page/wartel/edit/{id}', 'wartelController@edit');
Route::post('admin-page/wartel/proses-edit', 'wartelController@prosesEdit');
Route::get('admin-page/wartel/hapus/{id}', 'wartelController@hapus');

//Warnet
Route::get('admin-page/warnet', 'warnetController@admintampil');
Route::get('admin-page/warnet/tambah', function(){
	$dataInstansi = DataInstansi::find(1);
    $kabKotaId = $dataInstansi->kabkota_id;
    $data['kecamatan'] = Districts::whereRegencyId($kabKotaId)->get();
	return View::make('admin.warnettambah',$data);
});
Route::post('admin-page/warnet/simpan', 'warnetController@simpan');
Route::get('admin-page/warnet/edit/{id}', 'warnetController@edit');
Route::post('admin-page/warnet/proses-edit', 'warnetController@prosesEdit');
Route::get('admin-page/warnet/hapus/{id}', 'warnetController@hapus');

//Radio
Route::get('admin-page/radio', 'radioController@admintampil');
Route::get('admin-page/radio/tambah', function(){return View::make('admin.radiotambah');});
Route::post('admin-page/radio/simpan', 'radioController@simpan');
Route::get('admin-page/radio/edit/{id}', 'radioController@edit');
Route::post('admin-page/radio/proses-edit', 'radioController@prosesEdit');
Route::get('admin-page/radio/hapus/{id}', 'radioController@hapus');

//Jasa Pos
Route::get('admin-page/pos', 'posController@admintampil');
Route::get('admin-page/pos/tambah', function(){return View::make('admin.postambah');});
Route::post('admin-page/pos/simpan', 'posController@simpan');
Route::get('admin-page/pos/edit/{id}', 'posController@edit');
Route::post('admin-page/pos/proses-edit', 'posController@prosesEdit');
Route::get('admin-page/pos/hapus/{id}', 'posController@hapus');

//TV Kabel
Route::get('admin-page/tvkabel', 'tvkabelController@admintampil');
Route::get('admin-page/tvkabel/tambah', function(){return View::make('admin.tvkabeltambah');});
Route::post('admin-page/tvkabel/simpan', 'tvkabelController@simpan');
Route::get('admin-page/tvkabel/edit/{id}', 'tvkabelController@edit');
Route::post('admin-page/tvkabel/proses-edit', 'tvkabelController@prosesEdit');
Route::get('admin-page/tvkabel/hapus/{id}', 'tvkabelController@hapus');

//TV Kabel
Route::get('admin-page/televisi', 'televisiController@admintampil');
Route::get('admin-page/televisi/tambah', function(){return View::make('admin.televisitambah');});
Route::post('admin-page/televisi/simpan', 'televisiController@simpan');
Route::get('admin-page/televisi/edit/{id}', 'televisiController@edit');
Route::post('admin-page/televisi/proses-edit', 'televisiController@prosesEdit');
Route::get('admin-page/televisi/hapus/{id}', 'televisiController@hapus');

//Users
Route::get('admin-page/user', 'UserController@admintampil');
Route::get('admin-page/user/tambah', function(){
	$data = ['role'=> DB::select('select * from user_role order by nama asc')];
	return View::make('admin.usertambah',$data);
});
Route::post('admin-page/user/simpan', 'userController@simpan');
Route::get('admin-page/user/edit/{id}', 'userController@edit');
Route::post('admin-page/user/proses-edit', 'userController@prosesEdit');
Route::get('admin-page/user/hapus/{id}', 'userController@hapus');

//Pegawai
Route::get('admin-page/pegawai', 'pegawaiController@admintampil');
Route::get('admin-page/pegawai/tambah', function(){return View::make('admin.pegawaitambah');});
Route::post('admin-page/pegawai/simpan', 'pegawaiController@simpan');
Route::get('admin-page/pegawai/edit/{id}', 'pegawaiController@edit');
Route::post('admin-page/pegawai/proses-edit', 'pegawaiController@prosesEdit');
Route::get('admin-page/pegawai/hapus/{id}', 'pegawaiController@hapus');

//laporan
Route::get('admin-page/laporan_tower', 'towerController@laporan');
Route::get('admin-page/laporan_wartel', 'wartelController@laporan');
Route::get('admin-page/laporan_warnet', 'warnetController@laporan');
Route::get('admin-page/laporan_radio', 'radioController@laporan');
Route::get('admin-page/laporan_pos', 'posController@laporan');
Route::get('admin-page/laporan_tvkabel', 'tvkabelController@laporan');
Route::get('admin-page/laporan_televisi', 'televisiController@laporan');

Route::controller('article','ArticleController');

//pembayaran
Route::get('admin-page/pembayaran2', 'pembayaranController@admintampil');

Route::get('admin-page/pembayaran', function() {

		# Ambil semua data mahasiswa (lengkap dengan semua relasi yang ada)
		$tower = tower::with('pembayaran')->get();

		# Kirim variabel ke View
		return View::make('admin.pembayaran', compact('tower'));
	});

//Logout
Route::get('logout', array('uses' => 'UserController@logout'));

});
 
Route::get('login', array('uses' => 'UserController@login'));
Route::post('login', array('uses' => 'UserController@doLogin'));