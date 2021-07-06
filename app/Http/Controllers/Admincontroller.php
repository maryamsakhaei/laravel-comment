<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\adminlist;
use DB;
use Validator;
use Redirect;
use Input;
use Hash;
    
class Admincontroller extends Controller
{
    public function adminlogin(){
      
       return View('adminlogin');
    }
    //===============login-opration=========================
    public function check(Request $req){
        $mobile=$req->mobile;
        $email=$req->email;
         $users = DB::table('adminlist')->select('mobile', 'email')->where([
            ['mobile', '=',$mobile ],
            ['email', '=', $email],
            ])->get();//'get yani BEGIR'
         $chechredirect=strlen($users);
            if($chechredirect>=3){
                Session::put('admin','ok');
                $url=url('admin');
                return redirect($url);
            }
            else{
                $url=url('adminlogin');
                return redirect($url);

            }
   }
}
