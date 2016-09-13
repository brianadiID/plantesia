<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Description of MailboxController
 *
 * @author Brian Adi Kusumo <brianadikusumo@gmail.com>
 */
class MailboxController extends Controller {
    
    public function index(){
        return view('site/mailbox');
    }
	
	
}