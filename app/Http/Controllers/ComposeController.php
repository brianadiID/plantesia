<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Description of ComposeController
 *
 * @author Brian Adi Kusumo <brianadikusumo@gmail.com>
 */
class ComposeController extends Controller {
    
    public function index(){
        return view('site/compose');
    }
	
	
}