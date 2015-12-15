<?php 
namespace app\models;
use Eloquent;
  class Article extends Eloquent {
    protected $table = 'article';
    protected $primaryKey = 'id';
}
