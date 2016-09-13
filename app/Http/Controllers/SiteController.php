<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Description of SiteController
 *
 * @author Brian Adi Kusumo <brianadikusumo@gmail.com>
 */
class SiteController extends Controller {
    
    public function index(){
        return view('site/home');
    }
    
    public function explore(){
		$thread = DB::table('thread')->get();
        return view('site/explore',['thread'=>$thread]);
    }
	
	public function admin(){
        return view('site/admin1');
    }
}