<?php //nama controller harus sama dgn model, maka terkoneksi otomatis
 class pembayaranController extends BaseController {
 public function __construct(){
  $this->pembayaran = new Pembayaran();//panggil class Pembayaran pada model
  $this->tower = new Tower();//panggil class Tower pada model
 }

 public function admintampil(){
 $data = $this->pembayaran->tampil();//panggil function tampil pada class
 $data2 = $this->tower->tampilData();//panggil function tampilData pada class
 return View::make('admin.pembayaran')->with('datapembayaran',$data)
 									  ->with('datatower',$data2);}
 
 
}



