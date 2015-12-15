<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use app\models\UserRole;
class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');
	protected $primaryKey = 'id';
	
	public function tampilData($id=null){
 if($id!=null)
 	{return self::find($id);}
 else
 {return self::all();}} 

 
 
 public function prosesEdit($input){
  $id = $input['id'];
  $data = self::find($id);
  $data->user_role_id = $input['user_role_id'];
  $data->username = $input['username'];
  if(Input::has('password')){
  	$data->password = Hash::make(Input::get('password'));
  }
  $data->save();
 }
 
 public function hapus($id){
 self::find($id)->delete();
 }

public function getRememberToken()
{
    return $this->remember_token;
}

public function setRememberToken($value)
{
    $this->remember_token = $value;
}

public function getRememberTokenName()
{
    return 'remember_token';
}
public function simpan($input){
  $this->username = $input['username'];
  $this->password = Hash::make(Input::get('password'));
  $this->save(); //menjalankan perintah simpan  
 }
 public function role()
  {
    return $this->belongsTo('app\models\UserRole', 'user_role_id', 'id');
  }
}
