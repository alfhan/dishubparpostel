<?php
use app\models\Article;
  class ArticleController extends BaseController {
    public function __construct(){
      $this->article = new Article();
    }
    public function getIndex(){
      $data = [
        'list' => Article::all(),
      ];
      return View::make('admin.article',$data);
    }
    public function getForm($value='')
    {
      $data = [];
      if($value>0){
        $data = ['row'=>Article::find($value)];
      }
      return View::make('admin.articleform',$data);
    }
    public function postSimpan($value='')
    {
      $model = new Article();
      if(Input::get('id') > 0){
        $model = Article::find(Input::get('id'));
      }
      $model->title = Input::get('title');
      $model->description = Input::get('description');
      $model->save();
      return Redirect::to('article');
    }
    public function getHapus($value='')
    {
      $this->article->find($value)->delete();
      return Redirect::to('article');
    }
}