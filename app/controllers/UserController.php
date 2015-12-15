<?php
 
class UserController extends \BaseController {
public function __construct()
{
  $this->user = new User();
}
 
    public function login()
    {
                    return View::make('admin.login');
    }
 
    public function doLogin()
    {
        $rules = array(
                        'username'   ,
                        'password' => 'required|alphaNum|min:6'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
                        return Redirect::to('login')
                                        ->withErrors($validator)
                                        ->withInput(Input::except('password'));
        } else {
                        $userdata = array(
                                        'username'    => Input::get('username'),
                                        'password' => Input::get('password')
                        );
                        if (Auth::attempt($userdata)) {
                                        return Redirect::to('admin/dashboard');
                        } else {               
                                        return Redirect::to('login');
                        }
        }
    }
 
    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
	
	
	
	public function admintampil(){
    if(Auth::user()->user_role_id > 1)
        return Redirect::to('/');
 $data = $this->user->tampilData();
 return View::make('admin.user')->with('datauser',$data);}
 
 public function simpan(){
 $rules = array('username',
                 'password' => 'required|alphaNum|min:6');
  $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
                        return Redirect::to('admin-page/user/tambah')
                                        ->withErrors($validator)
                                        ->withInput(Input::except('password'));}
		else {
 $input=Input::all();
 $this->user->simpan($input);
 return Redirect::to('admin-page/user');
 
 }}
 
 public function edit($id){
 $data['datauser'] = $this->user->tampilData($id);
 $data['role'] = DB::select('select * from user_role order by nama asc');
 return View::make('admin.useredit',$data);
}
 
 public function prosesEdit(){
 $input=Input::all();
 $this->user->prosesEdit($input);
 return Redirect::to('admin-page/user');}
 
 public function hapus($id){
 $this->user->hapus($id);
 return Redirect::to('admin-page/user');}
 
}