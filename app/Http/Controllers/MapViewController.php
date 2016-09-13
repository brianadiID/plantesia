<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MapViewController extends Controller {
   public function index(){
      $thread = DB::table('thread')->get();
      return view('site/explore',['threads'=>$thread],['thread1'=>$thread]);
   }
}