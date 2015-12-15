<?php 
namespace app\models;
use Eloquent;
  class UserRole extends Eloquent {

    protected $table = 'user_role';
    protected $primaryKey = 'id';

    public function tampil($value='')
    {
      return self::all();
    }
}
